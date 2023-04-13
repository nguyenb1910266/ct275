<?php
require_once '../bootstrap.php';

use CT275\Labs\Film;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/favious.png" rel="icon">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/sticky-footer.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <?php include('../partials/navbar.php') ?>
    
    <!-- Main Page Content --> 
    <div class="container bg-white">
        <div class="row d-flex justify-content-center  mt-4">
            <div class="col-md-8 col-md-offset-2">
                <form class="" id="frm" role="form" method="POST" action="register_submit.php">
                    <h1 class="text-center">REGISTER</h1>
                    <!-- NAME -->
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group<?=isset($errors['name']) ? ' has-error' : '' ?> col-md-9">
                            <label for="name" class="col-md-6 control-label">Name</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" 
                                    value="<?=isset($old['name']) ? $this->e($old['name']) : '' ?>" required autofocus>

                                <?php if (isset($errors['name'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['name'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group<?=isset($errors['location']) ? ' has-error' : '' ?> col-md-9">
                            <label for="location" class="col-md-3 control-label">Address</label>
                            <div class="col-md-8">
                                <input id="location" type="location" class="form-control" name="location" 
                                    value="<?=isset($old['location']) ? $this->e($old['location']) : '' ?>" required>

                                <?php if (isset($errors['location'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['location'])?></strong>
                                    </span>
                                <?php endif ?>       
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group<?=isset($errors['phone']) ? ' has-error' : '' ?> col-md-9">
                            <label for="phone" class="col-md-3 control-label">Number Phone</label>
                            <div class="col-md-8">
                                <input id="phone" type="phone" class="form-control" name="phone" 
                                    value="<?=isset($old['phone']) ? $this->e($old['phone']) : '' ?>" required>

                                <?php if (isset($errors['phone'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['phone'])?></strong>
                                    </span>
                                <?php endif ?>       
                            </div>
                        </div>
                    </div>
                    
                    <!-- EMAIL -->
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group<?=isset($errors['email']) ? ' has-error' : '' ?> col-md-9">
                            <label for="email" class="col-md-3 control-label">E-Mail Address</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" 
                                    value="<?=isset($old['email']) ? $this->e($old['email']) : '' ?>" required>

                                <?php if (isset($errors['email'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['email'])?></strong>
                                    </span>
                                <?php endif ?>       
                            </div>
                        </div>
                    </div>
                    <!-- PASSWORD -->
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group<?=isset($errors['password']) ? ' has-error' : '' ?> col-md-9">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if (isset($errors['password'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['password'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                        </div>
                    </div>
                    <!-- PASSWORD CONFIRMATION -->
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group<?=isset($errors['password_confirmation']) ? ' has-error' : '' ?> col-md-9">
                            <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                <?php if (isset($errors['password_confirmation'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['password_confirmation'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                        </div>
                    </div>
                    <br>                      
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-9">
                            <div class="col-md-6 col-md-offset-4">
                                <!-- <div class="g-recaptcha" data-sitekey="6Le1Ho4fAAAAAA74iIHsD7O_WzkqN_Bradb2XOSC"></div> -->
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-registered" aria-hidden="true"></i>
                                    Register
                                </button>
                                <button type="reset" class="btn btn-primary">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
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