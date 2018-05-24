<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        
        <link href="<?php echo base_url('css/css/master.css') ;?> " rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('css/bootstrap/css/bootstrap.min.css') ;?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/destinyz/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
        <link href="<?php echo base_url('css/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="http://localhost/destinyz/css/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
                /*border: 1px solid black;*/
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
            

            .navbar-inverse {
                background-color: #67A3BF;
                border-color: #67A3BF;
                border-radius: 0px;
            }
            .navbar-inverse .navbar-nav>li>a {
                color: #fcf8e3;
            }
            .navbar-inverse .navbar-brand {
                color: white;
            }
            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
                color: #fff;
                background-color: #aa2525;
            }
            .profile-pcture-wrapper {
                width: 400px;
                /*height: 300px;*/
                margin: auto;
                margin-top: 45px;
                background-color: white;
                box-shadow: 1px 1px 5px 5px #c0c0c0;
            }
            .post-wrapper{
                /*width: 80%;*/
                margin:auto;
                margin-top: 14px;
                
            }
            .settings-option:hover{
                /*text-decoration: underline;*/
                
            }
            #spy{
                background-color: black;
                font-size: 23px;
                /*text-align: center;*/
            }
            .side-nav-link{
                color:whitesmoke;
            }
            .side-nav-link:hover{
                color:gray;
                font-size: 30px;
            }
            .fa{
                padding:10px;
            }
            .fa:hover{
                
            }

        </style>
</head>
<body style="background-color:  #f2eded">

    <!--navigation bar-->
    <nav class="navbar navbar-inverse" style=" margin-bottom: 2px;">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
    <a class="navbar-brand" href="#">Destiny-Z.lk |</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>

      <li><a href="#">Message</a></li>
      <li><a href="#">Notification</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('./login/logout'); ?>"> Logout</a></li>  
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></a></li>
      
    </ul>
  </div>
</div>
</nav> 
    
    <!--page content-->
<div class=" container-fluid body-wrapper" style=" padding: 0px; font-family: cursive; ">
    
    
    <!--main column ---1--------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="col-lg-8 border-style" style=" ">
        
        <!--profile picture area------------------>
        <div class="row border-style" style=" ">
            
            <!--profile picture------->
            <div class=" col-lg-8 border-style" style="height: 400px; background-color: #75767F;">
                    <div class=" border-style profile-pcture-wrapper" style="">
                 
                                
                        <button type="button" class="btn " data-toggle="modal" data-target="#modalChangePic">
                                
                                    <img class="profile-picture-wrapper" style=" width: 400px; height: 300px;"  
                                         src="<?php echo base_url('uploads/profile_pictures/'.$_SESSION['img_url']); ?>">
                                
                        </button> 
                        <!-- Modal -->
                                    <div id="modalChangePic" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Change profile picture</h4>
                                          </div>
                                          <div class="modal-body">
                                              <div class="col-lg-3">
                                                  <p style="font-size: 16px;">select a image to change</p>
                                              </div>
                                              <div class="col-lg-9">
                                                  
                                                    <?php 
                                                    if(!empty($error)){echo $error;}?>

                                                    <?php echo form_open_multipart('users/img_uploads/do_upload');?> 

                                                    <input type="file" name="img" size="20" />

                                                    <br /><br />

                                                    <input type="submit" value="upload" />

                                                    </form>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                <!--End of Modal -->
                        
                        
                        
                        
                        
<!--                                <a href="<?php // echo site_url('./change_profile_picture') ?>">
                                    <img class="" style=" width: 400px; height: 300px;"  src="<?php echo base_url('uploads/profile_pictures/'.$_SESSION['img_url']); ?>">
                                </a>-->
                               
                    </div>
            </div>
            
            <!--user name area-->
            <div class=" col-lg-4 border-style" style="height: 400px;background-color: #96979E;">
                <!--this is the user name-->
                <p style=" color: white;font-size: 30px; padding: 30px 5px;" > <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></p>
            </div>
            
           
            
        </div>
        
        <!--post and content-------->
        <div class="row border-style" style="">
            <!--settings area side navigation-->
            <div class="col-lg-4 border-style " style=" height: 400px">
                <!--setting -->
                <div id="sidebar-wrapper" style=" padding-top: 16px;" >
                <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <a class="side-nav-link" href="<?php echo site_url('./users/home/time_line'); ?>" data-scroll>
                            <i class="fa fa-calendar" aria-hidden="true"></i>Time line</span>
                        </a>
                    </li>
                    <li>
                        <a class="side-nav-link" href="<?php echo site_url('./users/home/about'); ?>" data-scroll>
                            <i class="fa fa-id-card-o" aria-hidden="true"></i></i>About</span>
                        </a>
                    </li>
                    <li>
                        <a class="side-nav-link" href="<?php echo site_url('./users/home/followers'); ?>" data-scroll>
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>Followers</span>
                        </a>
                    </li>
                    <li>
                        <a  class="side-nav-link" href="<?php echo site_url('./users/home/freinds'); ?>" data-scroll>
                            <i class="fa fa-users" aria-hidden="true"></i>Friends</span>
                        </a>
                    </li>
                    <li>
                        <a class="side-nav-link" href="<?php echo site_url('./users/home/Photos'); ?>" data-scroll>
                            <i class="fa fa-picture-o" aria-hidden="true"></i>Photos</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
                
            </div>
            

            
        </div>
        
    </div>
  
    <!--main column ---1--------------------------------------------------------------------------------------------------------------------->    
    <!------------------------------------------------------------------------------------------------------------------------------------------->
    <!--advertisement area-->
    <div class="col-lg-4 border-style" style="">
        
        <?php
        for($i=0;$i<4;$i++){
            
        
        ?>
        
            <div style=" box-shadow: 1px 1px 7px 1px #C0C0C0;margin: 23px;background-color: #FFFFFF;">
                <!--image-->
                <div class="row">
                    <div class="col-lg-7">
                       <img style="width: 100%; height: 205px; " src="<?php echo base_url('uploads/posts/img_1.jpg'); ?>" > 
                    </div>
                    <!--ad content-->
                    <div class="col-lg-5">
                        <p style=" padding: 16px 15px 10px 0px; ">jjkd jdjkdd djkdkd djkdd kdbjkdd jknkj jdekjd 
                            jndjkdnjk jkjkd jkj djkjjndjknd jndjknd jndkjnd jjkd jdjkdd djkdkd djkdd kdbjkdd jknkj jdekjd 
                            jndjkdnjk jkjkd jkj djkjjndjknd jndjknd jndkjnd</p> 
                    </div>
                </div>
                <!--title-->
                <div class="row" style="padding: 16px;">
                    <p style="font-size: 25px; color: gray; padding: 10px;"> This is the title of the advertisement </p>
                   
                </div>
            </div>
            
         
        <?php
        }
        ?>
    </div>


</div>
    
    
    <script type='text/javascript'>
//        /* attach a submit handler to the form */
//        $(".formoid").submit(function(event) {
//
//          /* stop form from submitting normally */
//          event.preventDefault();
//
//          /* get the action attribute from the <form action=""> element */
//          var $form = $( this ),
//              url = $form.attr( 'action' );
//
//          /* Send the data using post with element id name and name2*/
//          var posting = $.post( url, { comment: $("#comment").val() } );
//
//          /* Alerts the results */
//          posting.done(function( data ) {
//            alert('success');
//          });
//        });
    </script>
    
    <script type="text/javascript">
//        $("#commentSubmit").click(function(e) {
//            e.preventDefault();
//            var comment_id = $("comment").val();
//            var post_id = $("commentSubmit").val();
//            $.ajax({
//                url: "<?php // echo site_url('./users/home/make_comments'); ?>",
//                method: "POST",
//                data: {comment: comment_id,post: post_id },
//                success: function(data) {
//                    $("#message").html(data);
//                },
//                error: function() {
//                    alert("Please enter valid email id!");
//                }
//            });
//        });
        </script>
 <script type="text/javascript">
            $('.formoid').submit(function(e){ 
  
    e.preventDefault(); // Prevent Default Submission
  
    $.ajax({
 url: "<?php echo site_url('./users/home/make_comments'); ?>",
 type: 'POST',
 data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
       alert('sucess ...'); 
        $('#comment-area').fadeOut('slow', function(){
//          $('#comment-area').fadeIn('slow').html(data);
          $('.comment-area').fadeIn('slow').load(data);
        });
        
     
    })
    .fail(function(){
 alert('Ajax Submit Failed ...'); 
    });
});
        </script>
    
    

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
    
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('css/assets/js/custom.js') ?>"></script>
    
    
</body>
</html>

