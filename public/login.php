<?php
require_once '../bootstrap.php';

use CT275\Labs\Film;

require '../vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
/*$builder = new CaptchaBuilder();
$builder->build(); */

if (count($_POST) > 0){
    if (empty($_POST['g-recaptcha-response'])){
        echo '<script>alert("Please Solve reCAPTCHA");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/favious.png" rel="icon">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/sticky-footer.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <?php include('../partials/navbar.php') ?>

    <!-- Main Page Content --> 
    <div class="container bg-white">
        
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-6 col-md-offset-2">
                <form id="frm" role="form" method="POST" action="login_submit.php">
                <h1 class="text-center">LOG IN</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label h4">Email address</label>
                        <input id="email" type="email" class="form-control" name="email" 
                                value="<?php if(isset($_SESSION['mail'])){echo $_SESSION['mail'];} else {echo "";} ?>" required autofocus aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        <?php if (isset($errors['email'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['email'])?></strong>
                            </span>
                        <?php endif ?> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label h4">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        <?php if (isset($errors['password'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['password'])?></strong>
                            </span>
                        <?php endif ?>  
                    </div>
                    <form class="container" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                        <div class="form-group">
                            <label for="captcha" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <div class="g-recaptcha" data-sitekey="6LfDtZIfAAAAAFVoRfdB3D7GpYj9C9SnvKNgam1p"></div>
                            </div>
                        </div>
                            <br>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary h4" name="submit">
                                    <i class='fa fa-sign-in' aria-hidden='true'></i> 
                                    Login
                                </button>

                                <a class="btn btn-link" href="register.php">
                                    You are a new user?
                                </a>
                            </div>
                        </div>
                    </form><br>
                </form>
            </div>
        </div>
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
