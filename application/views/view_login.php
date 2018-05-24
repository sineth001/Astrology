<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <link href="<?php echo base_url('css/css/master.css') ;?> " rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/destinyz/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
        <link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/destinyz/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--font-family: 'Lato', sans-serif;-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet"> 
        <style>
            .body-wrapper-1{
                background-image: url(<?php echo base_url('css/images/main_image.jpg') ;?>);
                margin-top: -21px; 
                background-size: cover; 
            }
            .border-style{
                border: 1px solid black;
            }
            .getstarted_btn {
                background-color: #ed8d44;
                border-radius: 0;
                color: #fff;
                
                
            }
            .btn{
                border-radius: 0;
            }
            .sodiac-wrapper{
                width : 200px; 
                box-shadow: 1px 1px 17px 0px #c0c0c0;
                height:200px; 
                background-color: #2cc2f4; 
                margin: 20px;
                
                -webkit-transition: width 1s, height 1s, -webkit-transform 1.5s; 
		    /* Safari */
   		transition: width 1s, height 1s, transform 1.5s;
            }
             .sodiac-wrapper:hover {
		    background-color:#ED8D44;
		    opacity:0.8; 
             
		    -webkit-transform: rotate(360deg); /* Safari */
		    transform: rotate(360deg);
		    

		}
             .btn_view_item{
                
                padding: 13px 67px;
                background-color: #ed8d44;
                border-radius: 0px;
                font-size: 16px;
                color: #fff;
            }
            .list-header{
                    font-size: 15px;
                    color: #ed8d44;
                    margin: 28px 18px 3px 18px;
            }
            .subscribe-form{
                    background: #2F2F2F;
                    height: 53px;
                    width: 58%;
                    border-color: #000;
                    text-align: center;
                    font-size: 18px;
            }
            .nav-bottom a{
                padding: 20px;
                font-size: 11px;
                color: #6A6A6A;
                text-decoration: none;
                
            }
            .form-topic-style{
                width: 62%;
                margin: auto;
                text-align: left;
                background-color: #92a0a3;
                margin-top: 36px;
                color: white;
            }
             .form-wrapper {
                width: 60%;
                margin: auto;
                background-color: whitesmoke;
                padding: 20px 65px 20px 65px;
                margin-bottom: 40px;
                /*margin-top: 40px;*/
                color: darkgray;
                box-shadow: 1px 1px 15px 0px #c0c0c0;
            }
        </style>
</head>
<body>
   
    <!--navigation bar-->
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="<?php echo site_url('Home') ?>">Destiny-Z.lk</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo site_url('Home') ?>">Home</a></li>
          
          <li><a href="<?php echo site_url('Home/about_us') ?>">About Us</a></li>
          <li><a href="<?php echo site_url('Home/contact_us') ?>">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="<?php echo site_url('Home') ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li class="active"><a href="<?php echo site_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
    </nav> 
    
    <!--page content-->
    <div class=" container-fluid body-wrapper" style=" ">
    <!--header-->

<div class=" container body-wrapper" style="    color: gray; ">
    
    <!--header-->
    <div class="row form-topic-style" >
            <h3 style=" padding: 8px 14px 14px 41px; ">Login </h3>
        
    </div>
    <!--form area--------------------------------------------------------------------->
    <div class="row">
        
        <!--form-- ------------------>
        <div class="form-wrapper" >

                <!--error area-->
            <div style="color: red;">
               
                <p><?php if($this->session->flashdata('flash_data')) {
                                echo $this->session->flashdata('flash_data');
                            } ?>
                </p>
            </div>
            

            <form class="form" action="<?php echo site_url('login') ?>" method="post">


                <div class="form-group">
                    <div class="row form-error" style="height : 17px; color: red;">
                        <?php echo form_error('email'); ?>
                    </div>
                    <label class="label-style" >Email </label>
                    <input type="text" name="email" placeholder="Enter your email " value="<?php echo set_value('email'); ?>" class=" form-style form-control "  style=" ">
                </div>

                <div class="form-group">
                    <div class="row form-error" style="height : 17px; color: red;">
                        <?php echo form_error('password'); ?>
                    </div>
                    <label class="label-style">Password </label>
                    <input type="password" name="password" placeholder="Enter your pasword" class="form-control form-style"  style=" ">
                </div>

                <div class=" form-group" style="  text-align: center;     padding: 20px 0 70px 0;">

                    <a href="#" class="btn btn_goback"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="padding-right: 4px;"></i>Forgot password </a>

                    <button type="submit"  class="btn btn_submit">Login <i class="fa fa-sign-in" aria-hidden="true" style="padding-left: 4px;"></i></button>

                </div>
            </form>

        </div>
        <!--form end-------------------------->

        
    </div>
    <!--form area end--------------------->

</div>

</div>

    
    <!--footer area-->
    <footer>
        
    </footer>
</body>
</html>