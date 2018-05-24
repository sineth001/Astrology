<?php

class home extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_post');
        $this->load->model('model_comment');
        $this->load->model('model_system_user');
        $this->load->library('form_validation');
         $this->load->helper(array('form', 'url'));
         if(empty($this->session->userdata('email'))||$this->session->userdata('user_type')!='astrologer'){
            redirect('./login');
        }
    }
    
    public function index(){
        
        if(empty($this->session->userdata('email'))&&1==2){
            

//            $this->load->view('./astrologer/view_profile');
            
        }  else {
             $this->load->view('./astrologer/view_profile');
        }
    }
    
//    time line
    public function time_line(){
        $this->load->view('./astrologer/view_time_line');
    }
    public function about(){
        $this->load->view('./astrologer/view_about');
    }
    public function followers(){
        $this->load->view('./astrologer/view_followers');
    }
    public function freinds(){
        $this->load->view('./astrologer/view_freinds');
    }
    public function photos(){
        $this->load->view('./astrologer/view_photos');
    }


    
    
    
     public function do_upload(){
         
                $config['upload_path']          = './uploads/posts';
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
                        $this->load->view('./astrologer/view_profile', $error);
                }
                else
                {
                    
                        $img_info = array('upload_data' => $this->upload->data());
                        
                        $this->get_value($img_info);
                }
           
        }
        
    public function get_value($img_info){
        

                $this->form_validation->set_rules('title', 'Title', 'trim');
                $this->form_validation->set_rules('content', 'Content', 'trim');
                
                
                if($this->form_validation->run()==FALSE){

                    $this->load->view('./astrologer/view_profile');
                }else{
                   
                       
                       if( $this->model_post->add_a_post($img_info)){//bolean true
                         
                            redirect('./astrologers/home'); 
                          }
                   
                }
           
    } 
    
    
    public function delete_a_post($post_id){
        if($this->model_post->delete_a_post_by_id($post_id)){
            
            redirect('./astrologers/home');
        }
    }
    
    public function make_comments($post_id){
        
        if($_POST){
            $this->form_validation->set_rules('comment_content', 'Comment', 'trim');
            
            if($this->form_validation->run()){
                if($this->model_comment->add_comment_for_a_post($post_id)){
//                    $this->load->view('./astrologer/view_profile');
                    redirect('./astrologers/home');
                }
            }  else {
                $this->load->view('./astrologer/view_profile');
            }
        }
    }
    
    public function delete_a_comment($comment_id){
        if($this->model_comment->delete_a_comment_by_id($comment_id)){
            
            redirect('./astrologers/home');
        }
    }
    
//    ----------------------------like operations------------------------
    
    public function add_a_like($post_id){
        
        if($this->model_post->add_like_for_post($post_id)){
            redirect('./astrologers/home');
        }
        
    }
    
    public function remove_a_like($post_id){
        
        if($this->model_post->remove_like_for_post($post_id)){
            redirect('./astrologers/home');
        }
    }
    
    public function get_number_of_likes_for_a_post($post_id){
        
        if($this->model_post->remove_like_for_post($post_id)){
            redirect('./astrologers/home');
        }
    }
    
    
    
}
?>



