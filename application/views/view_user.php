<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>User</title>
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
                width: 43%;
                margin: auto;
                text-align: left;
                background-color: #8F91C4;
                margin-top: 36px;
            }
             .form-wrapper {
                width: 90%;
                margin: auto;
                background-color: whitesmoke;
                padding: 20px 65px 20px 65px;
                margin-bottom: 40px;
                /*margin-top: 40px;*/
                color: darkgray;
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
          <li class="active"><a href="<?php echo site_url('Home') ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="<?php echo site_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
    </nav> 
    
    <!--page content-->
    <div class=" container-fluid body-wrapper" style=" ">
    <!--header-->

    <!--form area--------------------------------------------------------------------->
    <div style="width: 60% ; margin: auto;">
        <!--error area-->
        
        <!--form-- ------------------>
       
 
            <div class=" form-wrapper">
            <form class="form" action="<?php echo site_url('user') ?>" method="post" >


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('time_of_birth'); ?>
                    </div>
                    <label class="label-style" >Time of Birth </label>
                    <input type="text" name="time_of_birth" placeholder="Time of Birth"  value="<?php echo set_value('time_of_birth'); ?>" class=" form-style form-control "  style=" ">
                    
                </div>


                <div class="form-group">
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('zodiac'); ?>
                    </div>
                    <label  class="label-style">Your Zodiac </label>
                    <input type="text" name="zodiac" placeholder="Zodiac"  value="<?php echo set_value('zodiac'); ?>" class="form-style form-control  " style=" ">
                </div>
                 <div class=" form-group" style="  text-align: center;">

                    <a href="#" class="btn btn_goback"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="padding: 2px 10px;"></i> Go back</a>

                    <button type="submit"  class="btn btn_submit">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true" style="padding: 2px 10px;"></i></button>

                </div>
            </form>

                

                

               
            </div>

      
        <!--form end-------------------------->


    </div>
    <!--form area end--------------------->

</div>
    <!--footer---------------------------------------------------------------------------------> 
 <!--footer area-->
       <div class=" " style="color: #fff;">
       
        
        <div class="col-lg-7" style="padding-bottom: 34px;  background-color: #252525;">
           
            <div class="row nav-bottom" style="text-align:left;">
                <div class="col-lg-4" style="height:296px;font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><p class="list-header">CUSTOMER SERVICE</p></li>
                        <li><a href="#">FEATURES</a></li>
                        <li><a href="#">EXAMPLE</a></li>
                        
                        
                    </ul >
                </div>
                <div class="col-lg-4" style="height:296px; font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><p class="list-header"> HELP</p></li>
                        <li><a href="#">HOW TO START</a></li>
                        
                        
                        
                    </ul>
                </div>
                <div class="col-lg-4" style="height:296px; font-size: 11px;line-height: 25px;">
                    <ul style=" list-style: none;">
                        <li><p class="list-header">FOLLOW US</p></li>
                        <li><a href="#">GET UPDATES</a></li>
                        
                        
                        
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="col-lg-5" style="height : 330px;  background-color: #000;">
            <div class="row" style=" width: 90%; margin: auto; text-align: initial;">
                <p class="list-header" style="">NEWSLETTER</p>
                <p style="    padding: 18px"> Subscribe to get daily updates</p>
                <div style="    padding-left: 18px">
                    <form>
                        <input type="text" name="subscriber_eamil" placeholder="Ente your email" class=" subscribe-form" style="width: 94%;">
                        <button type="submit" name="subscribe" class="btn btn_view_item" style="width: 94%; padding: 12px 0px;" >SUBSCRIBE</button>
                    </form>
                </div>

            </div>
        </div>
    </div> 
    <!--footer area-->
    <footer>
        
    </footer>
</body>
</html>