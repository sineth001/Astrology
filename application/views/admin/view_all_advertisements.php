<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All ads</title>  
    
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
font-size: 16px;"> Last access : 03 Oct 2017 &nbsp; <a href="<?php echo site_url('./login/logout'); ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        
                        <a  href="<?php echo site_url('./admin/admin/all_users'); ?>"><i class="fa fa-user fa-3x"></i>View All User</a>
                     
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
                        <a class="active-menu" href="#"><i class="fa fa-sitemap fa-3x"></i> Advertisement <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="<?php echo site_url('./admin/admin/all_advertisements'); ?>">View All Advertisement</a>
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
                        <a  href="<?php echo site_url('./admin/admin/all_zodiacs'); ?>"><i class="fa fa-qrcode fa-3x"></i> Zodiacs</a>
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
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Advertisements</h2>   
                        
                       <!--flash data message-->
                        <div style="text-align: center">
                            <?php
                            
                                echo $this->session->flashdata('success');
                                echo $this->session->flashdata('success_edit');
                            
                            ?>
                        </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             All Advertisements  descriptions
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <?php
                                        
                                        if($this->model_admin->get_all_ads()){
                                            $advertisement_data=$this->model_admin->get_all_ads();
                                            $id=0;
                                                ?>
                                    
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Added time</th>
                                            <th>Type</th>
                                            <th>Operations</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($advertisement_data as $advertisement_info){
                                                $id=$id+1;
//                                                echo $astrologer_info['email'];
                                                ?>
                                        
                                                <tr class="odd gradeX">
                                                    <td><?php echo $id; ?></td>
                                                    <td><?php echo $advertisement_info['heading']; ?></td>
                                                    <td class="center"><?php echo $advertisement_info['description']; ?></td>
                                                    <td> 
                                                        <img style="height: 100px;" src="<?php echo base_url('uploads/advertisements/'.$advertisement_info['img_url']); ?>">
                                                    </td>
                                                    <td class="center"><?php echo $advertisement_info['added_date']; ?></td>
                                                    <td class="center"><?php echo $advertisement_info['type']; ?></td>
                                                    <td style="text-align: center">
                                                        <a href="<?php echo site_url('./admin/admin/edit_advertisement/'.$advertisement_info['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="padding: 0 10px"></i></a>  
                                                        <a href="<?php echo site_url('./admin/admin/delete_advertisement/'.$advertisement_info['id']); ?>"><i class="fa fa-trash-o" aria-hidden="true" style="padding: 0 10px"></i></a>
                                                    </td> 
                                                </tr>
                                                <?php
                                            }
                                        
                                        }  else {
                                            
                                            ?>
                                        <!--result not found-->
                                        <div style="width: 40%; margin: auto;">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    No result to show
                                                </div>
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                                        adipiscing elit. Vestibulum tincidunt est vitae 
                                                        ultrices accumsan. Aliquam ornare lacus adipiscing,
                                                        posuere lectus et, fringilla augue.</p>
                                                </div>
                                                <div class="panel-footer">
                                                    empty
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                            <?php
                                                }
                                        

                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

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


