<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title></title>
<link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("public/fonts/font-awesome/css/font-awesome.css"); ?>">
<!-- Add fancyBox -->

<link rel="stylesheet" href="<?php echo base_url("public/fancybox/source/jquery.fancybox.css?v=2.1.5"); ?>" type="text/css" media="screen" />
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"); ?>" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"); ?>" type="text/css" media="screen" />
<body>

<div class="container">

 
            
           
           
       
    <?php echo $this->session->flashdata('message');?>
    <?php echo form_open('admin/login',array('class'=>'form-signin'));?>
    
    <a href="<?=base_url('home')?>" title="NutriTrolley" class="logo"> <img src = "<?=base_url('public/img/logo.png')?>" alt="Home" title="Home" class="img-responsive"/></a>
              <!-- <h2 class="form-signin-heading center-block">Login</h2> -->
     
        <?php form_label('Username','identity');?>
        <?php echo form_error('identity');?>
        <?php
        
        $Unsername = array(
              'name'        => 'identity',
              'placeholder' => 'Username',
              'class'=> 'form-control' 
            );

echo form_input($Unsername);

        
        ;?>
   
        <?php form_label('Password','password');?>
        <?php echo form_error('password');?>
        <?php
         
        $Password = array(
              'name'        => 'password',
              'placeholder' => 'Password',
              'class'=> 'form-control',
              'type'=>'password'
            );

echo form_input($Password);
        
                
         ;?>
   
     
              
              <div class="checkbox">
           <label>
          <?php echo form_checkbox('remember','1',FALSE);?> Remember me
        </label>
                  <a href="<?=base_url('auth/forgot_password')?>" class="pull-right need-help">Forgot password? </a><span class="clearfix"></span>
        </div>
              
      <?php echo form_submit('submit', 'Log in', 'class="btn btn-lg btn-primary btn-block"');?>
    <?php echo form_close();?>
 


    </div>




 

                
              
              
         
    
    <script type="text/javascript" src="<?php echo base_url("public/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.js"); ?>"></script>



<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo base_url("public/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"); ?>"></script>

<!-- Add fancyBox -->
<script type="text/javascript" src="<?php echo base_url("public/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"); ?>"></script>


<!-- Optionally add helpers - button, thumbnail and/or media -->
<script type="text/javascript" src="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("public/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"); ?>"></script>

<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url("public/js/custom.js"); ?>"></script>

</body>
</html>