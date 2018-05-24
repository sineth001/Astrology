<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit zodiac</title>  
    
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('css/assets/css/bootstrap.css') ?>" rel="stylesheet" />
    <!--<link href="http://localhost/destinyz/css/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />-->
     
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('css/assets/css/font-awesome.css') ?>" rel="stylesheet" />
    <link href="http://localhost/destinyz/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('css/assets/js/morris/morris-0.4.3.min.css') ?>" rel="stylesheet" />
    <!--<link href="http://localhost/destinyz/css/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />-->
    
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('css/assets/css/custom.css') ?>" rel="stylesheet" />
    <!--<link href="http://localhost/destinyz/css/assets/css/custom.css" rel="stylesheet" type="text/css" />-->
    
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
       .form-topic-style{
                width: 43%;
                margin: auto;
                text-align: left;
                background-color: #8F91C4;
                margin-top: 36px;
            }
             .form-wrapper {
                width: 100%;
                margin: auto;
                background-color: whitesmoke;
                padding: 4px 33px 20px 33px;
                margin-bottom: 40px;
                /*margin-top: 40px;*/
                color: darkgray;
            }
   </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('./admin/admin'); ?>">DestinyZ admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 03 Oct 2017 &nbsp; <a href="<?php echo site_url('./login/logout'); ?>" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
		<!--------------------------------------------------------------------------------------->
                    <li>
                        <a  href="<?php echo site_url('./admin/admin/'); ?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                <!--astrologer-->
                    <li>
                        
                        <a href="<?php echo site_url('./admin/admin/all_astrologers'); ?>"><i class="fa fa-users fa-3x"></i>View All Astrologers</a>
                     
                    </li> 
                    <!--user-->
                    <li>
                        
                        <a   href="<?php echo site_url('./admin/admin/all_users'); ?>"><i class="fa fa-user fa-3x"></i>View All User</a>
                     
                      </li> 
                    <!--Admin-->
                    <li>
                        <a href="#"><i class="fa fa-user-md fa-3x"></i> Admins<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('./admin/admin/all_admins'); ?>">View All Admin</a>
                            </li>
                            <li>
                                <a href="#">Add new </a>
                            </li>
                            
                        </ul>
                      </li>
                    <!--Advertisement-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Advertisement <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('./admin/admin/all_advertisements'); ?>">View All Advertisement</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('./admin/admin/add_new_ads'); ?>">Add new </a>
                            </li>
                            
                        </ul>
                      </li>
                    <!----------------------------------------------------------------------->
                    
                   <li>
                        <a  href="<?php echo site_url('./admin/admin/all_posts'); ?>"><i class="fa fa-desktop fa-3x"></i> All posts</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo site_url('./admin/admin/all_zodiacs'); ?>"><i class="fa fa-qrcode fa-3x"></i> Zodiacs</a>
                    </li>
		    <li  >
                        <a  href="<?php echo site_url('./admin/admin/settings'); ?>"><i class="fa fa-bar-chart-o fa-3x"></i> Settings</a>
                    </li>	
                  
                <!-------------------------------------------------------------------------------------------------->
                </ul>
               
            </div>
            
        </nav>   
        <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        
        
               
             <!--form area--------------------------------------------------------------------->
    <div class="row" style="width: 85% ; margin: auto;">
        <!--error area-->
         <?php
            if($this->model_admin->get_zodiac_by_id($id)){
                $zodiac_data=$this->model_admin->get_zodiac_by_id($id);
//                die(print_r($user_data));
            
            ?>
        <!--form for basic details-- ------------------>
        <div style=" " class="col-lg-6 ">
           
            
            
 
            <div class=" form-wrapper">
                
                
                <p style="font-size: 30px;">Zodiac name :<?php echo $zodiac_data['zodiac_name']  ;?></p> 
                <img style="height: 452px; padding-top: 19px;border-radius: 4%;" src="<?php echo base_url('css/images/zodiac/'.$zodiac_data['img_url']); ?>"> 
                
                

               
            </div>
            

        </div>
        <!--form end-------------------------->
        <!------------------------------------------------------------------------------------->
        <div style=" " class=" col-lg-6">
            <div class=" form-wrapper">
                        <form class="form" action="<?php echo site_url('./admin/admin/edit_zodiac_info/'.$id); ?>" method="post" >
                
                
                
                <div class="form-group">
                    <p style="font-size: 20px;"> Zodiac description</p>
                    <div class="row form-error" style="height : 21px;">
                        <?php echo form_error('description'); ?>
                    </div>

                    <textarea class=" form-style form-control " name="description" style="min-height: 300px; padding: 20px"><?php echo $zodiac_data['description']; ?></textarea> 
                </div>


                
                
                <div class="row" style="  padding: 55px 0px 34px 0px;">
                    <div class=" form-group" style="  text-align: center;">
                            <button type="submit"  class="btn btn_submit">Submit 
                                <i class="fa fa-arrow-circle-right" aria-hidden="true" style="padding: 2px 10px;"></i>
                            </button>
                    </div>
                </div>

                
            </form>
           </div>     
            

        <!--form end-------------------------->
            
        <!--</div>-->
      </div>
        <?php
            }
         ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------
 ------------------------------------------------------------------------------------------------------------------------------------------------------------->
    </div>
               
        </div>
             <!-- /. PAGE INNER  -->
 </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/jquery.metisMenu.js') ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url('css/assets/js/morris/raphael-2.1.0.min.js') ?>"></script>
     
     <script src="http://localhost/destinyz/css/assets/js/morris/morris.js"></script>
    <script src="<?php echo base_url('css/assets/js/morris/morris.js') ?>"></script>
    
    
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/custom.js') ?>"></script>

     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('css/assets/js/dataTables/dataTables.bootstrap.js') ?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/custom.js') ?>"></script>
    
   
</body>
</html>


