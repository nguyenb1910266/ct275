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
     <title>Top 10 Highest Rated Movies</title>
 </head>
 <body>
 <?php include('../partials/navbar.php') ?>
    <div class="container bg-white">
        <h1 class="text-center">Top 10 Highest Rated Movies</h1>

        <?php for( $i=0; $i<10; $i++ ){ ?>
            <div class="row">
                <h3 id="rated-title-<?=$i?>"></h3>
                <div class="col-md-3 text-center"><img id="rated-poster-<?=$i?>" src="" alt="" width="50%" height="90%"></div>
                <div class="col-md-9">
                    Movie's name: <b><span id="rated-name-<?=$i?>"></span></b><br>
                    Release: <span id="rated-release-<?=$i?>"></span><br>
                    Popularity: <span id="rated-popularity-<?=$i?>"></span><br>
                    Language: <span id="rated-lan-<?=$i?>"></span><br>
                    Overview: <span id="rated-overview-<?=$i?>"></span>
                </div>
            </div>

        <?php } ?>

    </div>
    <script>
        $(document).ready(function () {
            $.getJSON(
                `https://api.themoviedb.org/3/movie/top_rated?api_key=e9e9d8da18ae29fc430845952232787c&language=en-US&page=1`,
                (result) => {
                    // console.log(result);
                    for(i=0; i<10; i++){
                        $('#rated-title-'+i).text(result.results[i].title);
                        $('#rated-poster-'+i).prop("src", "https://image.tmdb.org/t/p/original" + result.results[i].poster_path);
                        $('#rated-name-'+i).text(result.results[i].original_title);
                        $('#rated-release-'+i).text(result.results[i].release_date);
                        $('#rated-popularity-'+i).text(result.results[i].popularity);
                        $('#rated-lan-'+i).text(result.results[i].original_language);
                        $('#rated-overview-'+i).text(result.results[i].overview);
                    }

                }
            )
        });
    </script>
    <?php include('../partials/footer.php') ?>
 </body>
 </html>