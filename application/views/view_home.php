<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        
        <link href="<?php echo base_url('css/css/master.css') ;?> " rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/destinyz/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
        <link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/destinyz/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--font-family: 'Lato', sans-serif;-->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet"> 
        <style>
            
/*            div{
                    width:300px;
                    height:300px;
                    background:url(images/seascape.jpg) no-repeat 0 0;
                    background-size:cover;
                    border:1px solid #000;
                    animation:spin 1s linear infinite;
            }*/

/*            @keyframes spin{
                    from{transform:rotate(0deg)}
                    to{transform:rotate(360deg)}	
            }*/
            
            
            .body-wrapper-1{
                background: url(<?php echo base_url('css/images/main_image.jpg')  ;?>)   ;
                margin-top: -21px; 
                background-size: cover; 
               
            }
            .border-style{
                /*border: 1px solid black;*/
            }
            .getstarted_btn {
                background-color: #4486F4;
                border-radius: 0;
                color: #fff;
                
                
            }
            .btn:hover{
                color:#fff;
            }
            .btn{
                border-radius: 0;
            }
            .sodiac-wrapper{
                border-radius: 50%;
                width : 180px; 
                box-shadow: 10px 1px 4px 0px #c0c0c0;
                height:180px; 
                /*background-color: #3D4F60;*/ 
                margin: 30px;
                
                -webkit-transition: width 1s, height 1s, -webkit-transform 1.5s; 
		    /* Safari */
   		transition: width 1s, height 1s, transform 1.5s;
            }
             .sodiac-wrapper:hover {
		    /*background-color:#2cc2f4;*/
		    /*opacity:0.8;*/ 
             
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
            .panel {
                margin-bottom: 0px;
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
        <a class="navbar-brand" href="#">Destiny-Z.lk</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          
          <li><a href="<?php echo site_url('Home/about_us') ?>">About Us</a></li>
          <li><a href="<?php echo site_url('Home/contact_us') ?>">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?php echo site_url('Home') ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li ><a href="<?php echo site_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
    </nav> 
    
    <!--page content-->
    <div class=" container-fluid body-wrapper-1">
        <!--form area-->
        <div class="row border-style" style=" text-align: center"  >
            <p>
                
            </p>
            <!--get started-->
            <div class="" style=" margin: auto; width:  61%; background-color: #F5F5F5;margin-top: 18px;">
                
                <div class="panel panel-info" style="border: 6px solid #3f4f89;">
                        <div class="panel-heading" style=" font-size: 30px;background-color: #3f4f89;color: #fff;">
                            Get started from here
                        </div>
                        <div class="panel-body" style=" padding-bottom: 50px; background-color: whitesmoke">
                            <div class=" form-error" style="height : 40px;">

                                <?php echo validation_errors(); ?>

                            </div>


                            <form  action=" <?php echo site_url('Home');  ?> " method="post" class=""  style="    margin: auto; width:  83%; ">
                                <div class="input-group" style="">
                                    <input type="text"  name="email" class="form-control email" placeholder="Enter your email address " style=" height: 65px; border-radius: 0;opacity: 0.9;">
                                  <div class="input-group-btn">
                                      <button class="btn getstarted_btn " type="submit" style="padding: 20px;">
                                      <i class="fa fa-rocket" style="font-size: 21px; padding-right: 6px;" aria-hidden="true"></i>
                                      GET STARTED
                                    </button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
              
                
            </div>
        </div>
        <!--end form area-->
        <div class="row border-style" style="margin: auto; width:  62%;  background-color: #f6f7f9; margin-top: 17px;" >
            
            <div class="panel panel-info" style=" border: 6px solid #EA4335;">
                        <div class="panel-heading" style=" font-size: 30px;background-color: #EA4335;color: #fff;">
                            Why You should get started...???
                        </div>
                        <div class="panel-body" style=" font-size: 20px;color: #4B5F80;background-color: whitesmoke">
                            <p>
                                Astrology is most interesting, marvelous & historical subject in the world. Astrology 
                                informs us anyone can be a  distinctive person. 
                                From our experiences of parapsychology, meditations,
                                psychology and new technology; astrology can be
                                described as pure mathematical science, that our many of previous life's
                                karmic energies are measured by considering planets and their 
                                motions. Also these past energies gave us positive powers to born as human being. 
                                Astrology define how our energy body affect with our
                                mind and what kind of positive powers we collected in our reincarnations, which 
                                are helping to our current life. Also all planets & objects in space influence to 
                                human body according to Physics such as Gravity. We get phlegm, cold, tonsillitis & 
                                fever in full moon days while heavy sunny days we have problems with urine system. 
                                Such way all planets link with our mind & body
                            <p>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
            
        </div>
        
        
        
        
        
        <!--sodiac description-->
        <div class="row border-style" style="margin: auto; width:  65%;" >
            <?php
            if($this->model_admin->get_all_zodiacs()){
                $zodiac_data=$this->model_admin->get_all_zodiacs();
                   foreach ($zodiac_data as $zodiac_info){
                        
                                        
            ?>
            <!--1-->
            <div class="sodiac-wrapper col-lg-2" style=" ">
                <button type="button" class=" " data-toggle="modal" data-target="#<?php echo $zodiac_info['id'] ?>">
                    <img src="<?php echo base_url('css/images/zodiac/'.$zodiac_info['img_url']); ?>" style="width: 100%; height: 100%;">
                </button>
            </div>
            <!-- Modal -->
                    <div id="<?php echo $zodiac_info['id'] ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><?php echo $zodiac_info['zodiac_name'] ?></h4>
                          </div>
                          <div class="modal-body">
                              <div class="col-lg-3">
                                  <img src="<?php echo base_url('css/images/zodiac/'.$zodiac_info['img_url']); ?>" style="width: 100%;border-radius: 31%; ">
                              </div>
                              <div class="col-lg-9">
                                  <p style="font-size: 16px;"><?php echo $zodiac_info['description'] ?></p>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                <!--End of Modal -->
           <?php
                 }                             
            }
           
           ?> 
<!--            2
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                   
                        <img src="<?php // echo base_url('css/images/zodiac/raurus.jpg') ?>" style="width: 100%; height: 100%;">
                    
                </a>
            </div>
            3
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/gemini.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            4
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/cancer.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            5
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/leo.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            6
            <div class="sodiac-wrapper col-lg-2" style=" ">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/virgo.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            7
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/libra.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            8
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/scorpio.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            9
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/sagittarius.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            10
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/capricorn.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            11
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/pisces.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>
            12
            <div class="sodiac-wrapper col-lg-2" style="">
                <a href="#">
                    <img src="<?php // echo base_url('css/images/zodiac/aquarius.jpg') ?>" style="width: 100%; height: 100%;">
                </a>
            </div>-->
            
            
            
        </div>
        
        <!--get stated-->
                <!--form area-->
        <div class="row border-style" style=" text-align: center"  >
            <p>
                
            </p>
            <!--get started-->
            <div class="" style="padding-bottom: 45px; margin: auto; width:  61%; background-color: #f6f7f9; margin-bottom: 27px;border: 6px solid;">
                <div class=" form-error" style="height : 40px;">

                    <?php echo validation_errors(); ?>
                    
                </div>
            
            
                <form  action=" <?php echo site_url('home');  ?> " method="post" class=""  style="    margin: auto; width:  83%; ">
                    <div class="input-group" style="">
                        <input type="text"  name="email" class="form-control email" placeholder="Enter your email address " style=" height: 65px; border-radius: 0;opacity: 0.9;">
                      <div class="input-group-btn">
                          <button class="btn getstarted_btn " type="submit" style="padding: 20px;">
                          <i class="fa fa-rocket" style="font-size: 21px; padding-right: 6px;" aria-hidden="true"></i>
                          GET STARTED
                        </button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end form area-->
    </div>
    <!--footer---------------------------------------------------------------------------------> 
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