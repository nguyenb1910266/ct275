<?php

namespace CT275\Labs;

use PDO;

class Film
{
	private PDO $db;

	private $id = -1;
	public $name;
	public $poster;
	public $background;
	public $content1;
	public $content2;
	public $user_name;
	public $created_at;
	public $updated_at;
	public $user_id;
	private $errors = [];

	public function getId()
	{
		return $this->id;
	}

	public function __construct(PDO $pdo)
	{
		$this->db = $pdo;
	}

	public function fill(array $data) //fill theo for
	{
		if (isset($data['name'])) {
			$this->name = trim($data['name']);
		}
		if (isset($data['poster'])) {
			$this->poster = trim($data['poster']);
		}
		if (isset($data['background'])) {
			$this->background = trim($data['background']);
		}
		if (isset($data['content1'])) {
			$this->content1 = trim($data['content1']);
		}
		if (isset($data['content2'])) {
			$this->content2 = trim($data['content2']);
		}
		if (isset($data['user_name'])) {
			$this->user_name = trim($data['user_name']);
		}
		return $this;
	}

	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{
		if (!$this->name) {
			$this->errors['name'] = 'Invalid name.';
		}

		if (!$this->poster) {
			$this->errors['poster'] = 'Invalid poster.';
		}
		if (!$this->background) {
			$this->errors['background'] = 'Invalid background.';
		}
		// if (strlen($this->poster) < 10 || strlen($this->poster) > 11) {
		// 	$this->errors['poster'] = 'Invalid poster number.';
		// }

		// if (strlen($this->content) > 1000) {
		// 	$this->errors['content1'] = 'Notes must be at most  characters.';
		// }

		return empty($this->errors);
	}

	// LISTED
	public function all() {
		$film = [];
		$stmt = $this->db->prepare('select * from films');
		$stmt->execute();
		while ($row = $stmt->fetch()) {
			$film = new film($this->db);
			$film->fillFromDB($row);
			$films[] = $film;
		}
		return $films;
	}

	protected function fillFromDB(array $row) {
		[
			'id' => $this->id,
			'name' => $this->name,
			'poster' => $this->poster,
			'background' => $this->background,
			'content1' => $this->content1,
			'content2' => $this->content2,
			'user_name' => $this->user_name,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'user_id' => $this->user_id
		] = $row;
		return $this;
	}

	// SAVE
	public function save() {

		$result = false;
		if ($this->id >= 0) {
			$stmt = $this->db->prepare(
				'update films set name = :name,
					poster = :poster, background = :background, content1 = :content1, content2 = :content2, user_name = :user_name, updated_at = now()
					where id = :id');
			$result = $stmt->execute([
				'name' => $this->name,
				'poster' => $this->poster,
				'background' => $this->background,
				'content1' => $this->content1,
				'content2' => $this->content2,
				'user_name' => $this->user_name,
				// 'user_id' => $this->user_id,
				'id' => $this->id
			]);
		} else {
			$stmt = $this->db->prepare(
				'insert into films (name, poster, background, content1, content2, user_name, created_at, updated_at)
					values (:name, :poster, :background, :content1, :content2, :user_name, now(), now())');
			$result = $stmt->execute([
				'name' => $this->name,
				'poster' => $this->poster,
				'background' => $this->background,
				'content1' => $this->content1,
				'content2' => $this->content2,
				'user_name' => $this->user_name
			]);
			if ($result) {
				$this->id = $this->db->lastInsertId();
			}
		}

		return $result;

	}

	// FIND
	public function find($id) {
		$stmt = $this->db->prepare('select * from films where id = :id');
		$stmt->execute(['id' => $id]);

		if ($row = $stmt->fetch()) {
			$this->fillFromDB($row);
			return $this;
		}

		return null;
	}

	// UPDATE
	public function update(array $data){
		$this->fill($data);
		if ($this->validate()) {
			return $this->save();
		}
		return false;
	}

	// DELETE
	public function delete() { 
		$stmt = $this->db->prepare('delete from films where id = :id'); 
		return $stmt->execute(['id' => $this->id]); 
	}

}
