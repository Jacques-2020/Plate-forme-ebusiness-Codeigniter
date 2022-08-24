<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | MTBUY-Admin</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?= base_url();?>Admin/Design/favicon.ico" type="image/x-icon" />

        <link href="<?= base_url();?>https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?= base_url();?>Admin/Design/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url();?>Admin/Design/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url();?>Admin/Design/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url();?>Admin/Design/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="<?= base_url();?>Admin/Design/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?= base_url();?>Admin/Design/dist/css/theme.min.css">
        <script src="<?= base_url();?>Admin/Design/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head<?= base_url();?>Admin/Design
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?= base_url();?>Admin/Design/img/auth/login-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="../index.html"><img src="<?= base_url();?>Admin/Design/src/img/brand.svg" alt=""></a>
                            </div>
                            <h3>Admin-MTBUY</h3>
                            <p>Happy to see you again!</p>
                            <?php echo form_open_multipart(site_url("ControllerAdmin/Publiciter/Admin/Authentification"));?>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" >
                                    <span class="text-danger"><?= form_error('email');?></span>
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="motdepasse" placeholder="Password" >
                                    <span class="text-danger"><?= form_error('motdepasse');?></span>
                                    <i class="ik ik-lock"></i>
                                </div>
                                <span class="text-danger"><?= $this->session->flashdata('error');?></span>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">Se Connecté</button>
                                </div>
                            <?= form_close();?>
                            <div class="register">
                                <p>Don't have an account? <a href="register.html">Create an account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url();?>Admin/Design/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?= base_url();?>Admin/Design/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url();?>Admin/Design/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?= base_url();?>Admin/Design/dist/js/theme.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
