<?php

class change_profile_picture extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_system_user');
        $this->load->library('form_validation');
         $this->load->helper(array('form', 'url'));
    }
    
    public function index(){
        
        if(empty($this->session->userdata('email'))&&1==2){
            

//            $this->load->view('./astrologer/view_profile');
            
        }  else {
             $this->load->view('view_change_profile_picture');
        }
    }
     public function do_upload(){
         
                $config['upload_path']          = './uploads/profile_pictures';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                //config the image details
                $this->load->library('upload', $config);
                
                //check whether the img is uploaded succesfully 
                
                if ( $this->upload->do_upload('img')==FALSE)
                {
                    //get errors for the upload
                        $error = array('error' => $this->upload->display_errors());
                    //give the errors to disply 
                        $this->load->view('view_change_profile_picture', $error);
                       
                }
                else
                {
                    
                        $img_info = array('upload_data' => $this->upload->data());
                        
                        if( $this->model_system_user->make_a_profile_picture($img_info)){//bolean true
                         // for user profle ,have to get another one
                         redirect('astrologers/home');
                          }
                }
           
        }
        
  
    

    
}
?>



