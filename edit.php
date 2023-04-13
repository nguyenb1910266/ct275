<?php
require_once '../bootstrap.php';

use CT275\Labs\Film;

$film = new Film($PDO);

$id = isset($_REQUEST['id']) ?
    filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT) : -1;

if ($id < 0 || !($film->find($id))) {
    redirect('/');
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($film->update($_POST)) {
        redirect('manage.php');
    }
    $errors = $film->getValidationErrors();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/favious.png" rel="icon">
    <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link href="/css/sticky-footer.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../partials/navbar.php') ?>

    <!-- Main Page Content --> 
    <div class="container">
        <section id="inner" class="inner-section section d-flex justify-content-center">
            <div class="container">

                <!-- SECTION HEADING -->
                <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">EDIT FILM</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <p class="wow fadeIn" data-wow-duration="2s">Edit your films here.</p>
                    </div>
                </div>

                <div class="inner-wrapper row d-flex justify-content-center">
                    <div class="col-md-12 d-flex justify-content-center">

                        <form name="frm" id="frm" action="" method="post" class="col-md-6 col-md-offset-3">

                            <input type="hidden" name="id" value="<?=htmlspecialchars($film->getId())?>">

                            <!-- Name -->
                            <div class="form-group<?=isset($errors['name']) ? ' has-error' : '' ?>">
                                <label for="name">Film's Name</label>
                                <input type="text" name="name" class="form-control" maxlen="255" id="name" 
                                    placeholder="Enter Name" value="<?=htmlspecialchars($film->name)?>" />

                                <?php if (isset($errors['name'])): ?>
                                    <span class="help-block">
                                        <strong><?=htmlspecialchars($errors['name'])?></strong>
                                    </span>
                                <?php endif ?>                                
                            </div>

                            <!-- Poster -->
                            <div class="form-group<?=isset($errors['poster']) ? ' has-error' : '' ?>">
                                <label for="poster">Poster</label>
                                <input type="file" name="poster" class="form-control" maxlen="255" id="poster" 
                                    placeholder="Enter Poster" value="<?=htmlspecialchars($film->poster)?>" />

                                <?php if (isset($errors['poster'])): ?>
                                    <span class="help-block">
                                        <strong><?=htmlspecialchars($errors['poster'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                            <div class="form-group<?=isset($errors['background']) ? ' has-error' : '' ?>">
                                <label for="background">Background</label>
                                <input type="file" name="background" class="form-control" maxlen="255" id="background" 
                                    placeholder="Enter background" value="<?=htmlspecialchars($film->background)?>" />

                                <?php if (isset($errors['background'])): ?>
                                    <span class="help-block">
                                        <strong><?=htmlspecialchars($errors['background'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                            <!-- Content -->
                            <div class="form-group<?=isset($errors['content1']) ? ' has-error' : '' ?>">
                                <label for="description">Intro Content</label>
                                <textarea name="content1" id="content1" class="form-control" style="height: 200px;"
                                    ><?=htmlspecialchars($film->content1)?></textarea>

                                <?php if (isset($errors['content1'])): ?>
                                    <span class="help-block">
                                        <strong><?=htmlspecialchars($errors['content1'])?></strong>
                                    </span>
                                <?php endif ?>                                 
                            </div>
                            <div class="form-group<?=isset($errors['content2']) ? ' has-error' : '' ?>">
                                <label for="description">Outtro Content</label>
                                <textarea name="content2" id="content2" class="form-control" style="height: 200px;"
                                    ><?=htmlspecialchars($film->content2)?></textarea>

                                <?php if (isset($errors['content2'])): ?>
                                    <span class="help-block">
                                        <strong><?=htmlspecialchars($errors['content2'])?></strong>
                                    </span>
                                <?php endif ?>                                 
                            </div>
                            <!-- Submit -->
                            <button type="submit" name="submit" id="submit" class="btn btn-primary mt-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update film</button>
                            <a href="manage.php"><button type="button" name="cancel" id="cancel" class="btn btn-primary mt-2"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</button></a>
                        </form>

                    </div>
                </div>

            </div>
        </section>
    </div> 

    <?php include('../partials/footer.php') ?>    

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script>
        $(document).ready(function(){
            new WOW().init();          
        });
    </script>
</body>
</html>
