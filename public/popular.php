<?php require_once '../bootstrap.php'; ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="css/style.css" rel="stylesheet"></style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <link href="/css/font-awesome.min.css" rel="stylesheet">
     <link href="img/favious.png" rel="icon">
     <title>Top 10 Most Popular Movies</title>
 </head>
 <body>
 <?php include('../partials/navbar.php') ?>
    <div class="container bg-white">
        <h1 class="text-center">Top 10 Most Popular Movies</h1>

        <?php for( $i=0; $i<10; $i++ ){ ?>
            <div class="row">
                <h3 id="popular-title-<?=$i?>"></h3>
                <div class="col-md-3 text-center"><img id="popular-poster-<?=$i?>" src="" alt="" width="50%" height="90%"></div>
                <div class="col-md-9">
                    Movie's name: <b><span id="popular-name-<?=$i?>"></span></b><br>
                    Release: <span id="popular-release-<?=$i?>"></span><br>
                    Popularity: <span id="popular-popularity-<?=$i?>"></span><br>
                    Language: <span id="popular-lan-<?=$i?>"></span><br>
                    Overview: <span id="popular-overview-<?=$i?>"></span>
                </div>
            </div>

        <?php } ?>

    </div>
    <script>
        $(document).ready(function () {
            $.getJSON(
                `https://api.themoviedb.org/3/movie/popular?api_key=e9e9d8da18ae29fc430845952232787c&language=en-US&page=1`,
                (result) => {
                    // console.log(result);
                    for(i=0; i<10; i++){
                        $('#popular-title-'+i).text(result.results[i].title);
                        $('#popular-poster-'+i).prop("src", "https://image.tmdb.org/t/p/original" + result.results[i].poster_path);
                        $('#popular-name-'+i).text(result.results[i].original_title);
                        $('#popular-release-'+i).text(result.results[i].release_date);
                        $('#popular-popularity-'+i).text(result.results[i].popularity);
                        $('#popular-lan-'+i).text(result.results[i].original_language);
                        $('#popular-overview-'+i).text(result.results[i].overview);
                    }

                }
            )
        });
    </script>
    <?php include('../partials/footer.php') ?>
 </body>
 </html>