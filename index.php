 <?php 
 require_once '../bootstrap.php';
//  use CT275\Labs\Film; 
include('../config.php');
$sql = 'SELECT * FROM films';
$query = mysqli_query($connect, $sql);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link href="css/font-awesome.min.css" rel="stylesheet"></style>
     <link href="css/style.css" rel="stylesheet"></style>
     <link href="img/favious.png" rel="icon">
     <style>
         #card-shadow{
            box-shadow: 0px 3px 5px gray;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
     </style>
     <title>Review Film</title>
 </head>
 <body>
 <?php include('../partials/navbar.php') ?>
    <div class="container">      
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 400px">

                <div class="carousel-item active">
                     <div class="card bg-dark text-white" onclick="location.href='upcoming.php'">
                        <img src="" class="card-img" alt="..." id="top5coming">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Top 5 Upcoming Movies</h5>
                            <p class="card-text">Release from <span id="coming-start"></span> to <span id="coming-end"></span></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card bg-dark text-white" onclick="location.href='rated.php'">
                        <img src="" class="card-img" alt="..." id="top5rated">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Top 10 Highest Rated Movies</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card bg-dark text-white" onclick="location.href='popular.php'">
                        <img src="" class="card-img" alt="..." id="top5popular">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Top 10 Most Popular</h5>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>  
        
        <div class="row row-cols-4">
            <?php foreach($query as $key => $value){ ?>
            <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 mt-4">
                <div class="card" style="width: 400px" id="card-shadow">
                    <img src="uploads/<?php echo $value['background']?>" class="card-img-top" alt="..." alt="" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">Review film <?php echo $value['name']?></h5><p>
                        <span class="card-text claimedRight" maxlength="40"><?php echo $value['content1']?></span>
                        <span>....</span></p>
                        <p>Posted on: <?=date("d-m-y h:m:s", strtotime($value['updated_at']))?></p>
                        <p>Post creator: <?=$value['user_name']?></p>
                        <a href="detail.php?id=<?php echo $value['id'] ?>" class="btn btn-primary"><i class="fa fa-info-circle" aria-hidden="true"></i> See details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $.getJSON(
                `https://api.themoviedb.org/3/movie/upcoming?api_key=e9e9d8da18ae29fc430845952232787c&language=en-US&page=1`,
                (upcoming) => {
                    // console.log(result);
                    $('#coming-start').text(upcoming.dates.maximum);
                    $('#coming-end').text(upcoming.dates.minimum);
                    $('#top5coming').prop("src", "https://image.tmdb.org/t/p/original" + upcoming.results[3].backdrop_path);
                }
            );

            $.getJSON(
                `https://api.themoviedb.org/3/movie/top_rated?api_key=e9e9d8da18ae29fc430845952232787c&language=en-US&page=1`,
                (toprated) => {
                    // console.log(result);
                    $('#top5rated').prop("src", "https://image.tmdb.org/t/p/original" + toprated.results[0].backdrop_path);
                }
            );

            $.getJSON(
                `https://api.themoviedb.org/3/movie/popular?api_key=e9e9d8da18ae29fc430845952232787c&language=en-US&page=1`,
                (popular) => {
                    // console.log(result);
                    $('#top5popular').prop("src", "https://image.tmdb.org/t/p/original" + popular.results[0].backdrop_path);
                }
            )
        });
    </script>
    <script>
        $(document).ready(function(){
            new WOW().init();
            $('#contacts').DataTable();

            $('button[name="delete-contact"]').on('click', function(e){
                var $form = $(this).closest('form');
                e.preventDefault();
                $('#delete-confirm').modal({
                    backdrop: 'static', keyboard: false
                })
                .one('click', '#delete', function() {
                    $form.trigger('submit');
                });
            });
 
  
            $('.claimedRight').each(function (f) {
 
                var newstr = $(this).text().substring(0,80);
                $(this).text(newstr);
 
            });
        });
    </script>
    <?php include('../partials/footer.php') ?>      
 </body>
 </html>