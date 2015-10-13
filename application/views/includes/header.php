<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    
         <link rel="icon" type="image/png" href="<?= base_url('public/img/favicon.png') ?>">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("public/css/nutritrolley.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">
        
          <link rel="stylesheet" href="<?php echo base_url("public/css/html5imageupload.css"); ?>" />

        <link rel="stylesheet" href="<?php echo base_url("public/fonts/font-awesome/css/font-awesome.css"); ?>">
        <!-- Add fancyBox -->

        <link rel="stylesheet" href="<?php echo base_url("public/fancybox/source/jquery.fancybox.css?v=2.1.5"); ?>" type="text/css" media="screen" />
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"); ?>" type="text/css" media="screen" />

        <link rel="stylesheet" href="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"); ?>" type="text/css" media="screen" />
  
    <body>

        <div class="container">
            <div class="row">
                <!-- box starts here -->
                <div class="box col-md-12">
                    <!-- topnav starts here -->
                    <div id="topnav" class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="softwareversion"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Version 1.0 - the project begins">version: <strong>1.0</strong></a></div>
                            </div>
                            <!-- login -->
                            <div class="col-md-4 dashboard">


                                <div class="row">
                                    <div class="loginseparaterbarblue"></div>
                                    <div class="loginseparaterbarwhite"></div>
                                    <div class="col-md-6 loginspc">
                                            <span class="NutriTrolleyLogin whitetxt"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a><ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form class="form" role="form" method="post" action="admin/login" accept-charset="UTF-8" id="login-nav">
                                                                    <div class="form-group">
                                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox"> Remember me
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul></span> <span class="NutriTrolleyLogin loginbluetxt">or </span><span><a id="register" data-placement="bottom" data-toggle="tooltip" class="various fancybox.iframe" href="membership" data-original-title="Register">Register</a></span> <i class="icon-chevron-sign-right icon-2"></i></a></div>
                                    <div class="col-md-6 loginspc"><a id="why_register" class="various fancybox.iframe" title="" data-placement="bottom" data-toggle="tooltip" href="membership/why_register" data-original-title="Why Register?"><span class="NutriTrolleyLogin loginbluetxt">Why Register?</span></a> <i class="icon-chevron-sign-right icon-2"></i></div>
                                </div>









                            </div>
                            <!-- login -->
                        </div>
                    </div>
                    <!-- topnav ends here -->
                    <!-- logo and social media icons starts here -->
                    <div class="row row-no-margin">
                        <!-- .col-md-12 -->
                        <div id="logocontainer" class="col-md-12">
                            <div class="row">
                                <div class="col-md-5"><a href="<?= base_url('home') ?>" title="NutriTrolley" class="logo"> <img src = "<?= base_url('public/img/logo.png') ?>" alt="Home" title="Home"/></a></div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-12"> <span id="connected" class="NutriTrolleyFont NutriTrolleyColor"><strong>Let's stay connected</strong></span>
                                            <ul class="social social-icons-footer-bottom">
                                                <li class="rss"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="E-mail us"><i class="icon-envelope"></i></a></li>
                                                <li class="facebook"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Facebook"><i class="icon-facebook"></i></a></li>
                                                <li class="pinterest"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Pinterest"><i class="icon-pinterest"></i></a></li>
                                                <li class="twitter"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                                <li class="linkedin"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="LinkedIn"><i class="icon-linkedin"></i></a></li>
                                                <li class="youtube"><a title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Youtube"><i class="icon-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-12 -->
          
                    </div>
                    <!-- logo and social media icons ends here -->


              <div class="row row-no-margin">
  	<div id="logobase" class="col-md-12"></div>
	</div>
                    
                    <h6 id="breadcrumb_nutri" class="NutriTrolleyFont NutriTrolleyColor"><strong>You are here:</strong> NutriTrolley <strong><span id="breadcrumb"></span></strong></h6>