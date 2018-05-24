<?php

class admin extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_admin');
        $this->load->model('model_ads');
//        $this->load->model('model_comment');
//        $this->load->model('model_system_user');
        $this->load->library('form_validation');
         $this->load->helper(array('form', 'url'));
         
         if(empty($this->session->userdata('email'))||$this->session->userdata('user_type')!='admin'){
            redirect('login');
        }
    }
    
    public function index(){
        
        $this->load->view('./admin/index');
    }
    
    public function all_users(){
        $this->load->view('./admin/view_all_users');
    }
    public function all_astrologers(){
        $this->load->view('./admin/view_all_astrologers');
    }
    public function all_admins(){
        $this->load->view('./admin/view_all_admins');
    }
    public function all_advertisements(){
        $this->load->view('./admin/view_all_advertisements');
    }
    public function all_posts(){
        $this->load->view('./admin/view_all_posts');
    }
    public function all_zodiacs(){
        $this->load->view('./admin/view_all_zodiacs');
    }
    public function settings(){
        $this->load->view('./admin/view_settings');
    }
    
//    delete----------------------------------------------------------------------------------------------
    
    public function delete_astrologer($id){
        
        if($this->model_admin->delete_astrologer($id)==TRUE){
            if($this->model_admin->delete_astrologer_more($id)){
                if($this->model_admin->delete_post_by_user_id($id)){
                    
                    $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>The astrologer was deleted successfully </p>');
                    redirect('admin/admin/all_astrologers');
                }
                
            }
            
        }else{
            
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
        
            redirect('admin/admin/all_astrologers');
        }
    }
    
    public function delete_user($id){
        
        if($this->model_admin->delete_user($id)==TRUE){
            if($this->model_admin->delete_user_more($id)){
                if($this->model_admin->delete_post_by_user_id($id)){
                    $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>The user was deleted successfully </p>');
                    redirect('admin/admin/all_users');
                }
                
            }
            
        }else{
            
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
        
            redirect('admin/admin/all_users');
        }
    }
    public function delete_admin($id){
        
        if($this->model_admin->delete_admin($id)==TRUE){
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>The admin was deleted successfully </p>');
            redirect('admin/admin/all_admins');
            
        }else{
            
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
        
            redirect('admin/admin/all_admins');
        }
    }
    
    public function delete_post($id){
        
        if($this->model_admin->delete_post($id)==TRUE){
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>The post was deleted successfully </p>');
            redirect('admin/admin/all_posts');
            
        }else{
            
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
        
            redirect('admin/admin/all_posts');
        }
    }
    
    public function delete_advertisement($id){
        
        if($this->model_admin->delete_advertisement($id)==TRUE){
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i>The post was deleted successfully </p>');
            redirect('admin/admin/all_advertisements');
            
        }else{
            
            $this->session->set_flashdata('success','<p style="font-size: 22px;width: 16%;margin: auto; padding: 10px; color: red;">'
                            . '<i class="fa fa-times-circle" aria-hidden="true" style="padding: 10px; "></i>Error occurred </p>');
        
            redirect('admin/admin/all_advertisements');
        }
    }
//    edit---------------------------------------------------------------------------------------------------
    
    
    public function edit_all($id) {
        $data=[
            'id'=>$id
        ];
        $this->load->view('./admin/view_edit_admin',$data);
    }
    
    
    
//    extra
    public function blank(){
        $this->load->view('./admin/blank');
    }
    public function chart(){
        $this->load->view('./admin/chart');
    }
    public function form(){
        $this->load->view('./admin/form');
    }
    public function table(){
        $this->load->view('./admin/table');
    }
    public function table_panel(){
        $this->load->view('./admin/table_panel');
    }
    
    
    
    
    public function edit_info($id){
        
        if(empty($this->session->userdata('email'))&&1==2){
            
            $this->load->view('./admin/view_edit_admin');
            
        }else{
        
            if($_POST){

                $this->form_validation->set_rules('user_type', 'User type', 'trim|required');
                $this->form_validation->set_rules('fname', 'First name', 'trim|required');
                $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
                $this->form_validation->set_rules('tp', 'T.P. number', 'trim|required|exact_length[10]|is_natural');                
                $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');             


                if($this->form_validation->run()==FALSE){
                    
                       $data=[
                          'id'=>$id
                      ];

                    $this->load->view('./admin/view_edit_admin',$data);
                }else{
                    
                    
                        if( $this->model_admin->admin_update_user($id)){//bolean true
                            
                            $this->session->set_flashdata('success_edit','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i> Edited successfully </p>');
                             redirect('admin/admin/all_astrologers');
                            
                        }
                        else {
                               
                        }    
                }
            }else{

                $data=[
                          'id'=>$id
                      ];

                    $this->load->view('./admin/view_edit_admin',$data);
            }
        }
    }
    
    
//    make new advertiesments---------------------------------------------------------------------------
    
    
    
    public function add_new_ads(){
        $this->load->view('./admin/view_add_new_ads');
    }
    
     public function do_upload(){ 

        $config['upload_path']          = './uploads/advertisements';
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
                $this->load->view('./admin/view_add_new_ads',$error);
        }
        else
        {

                $img_info = array('upload_data' => $this->upload->data());

                $this->get_value($img_info);
        }

    }
        
    public function get_value($img_info){
        

            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('content', 'Content', 'trim|required');


            if($this->form_validation->run()==FALSE){

                $this->load->view('./admin/view_add_new_ads');
            }else{
                
               if( $this->model_ads->add_a_advertisement($img_info)){//bolean true
                   
                   $this->session->set_flashdata('success','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i> Advertisement has been added successfully </p>');
                             redirect('admin/admin/all_advertisements');
                   

//                   $this->load->view('./admin/view_add_new_ads');
                   
                  }

            }
           
    } 
 //  end of  make new advertiesments---------------------------------------------------------------------------
    
// edit Zodiac------------------------------------------------------------------   
    public function edit_zodiac($id){
        
        $data=[
          'id'=>$id
        ];
        
        $this->load->view('./admin/view_edit_zodiac',$data);
        
    }
    
    public function edit_zodiac_info($id){
        
        if(empty($this->session->userdata('email'))&&1==2){
            
            $this->load->view('./admin/view_edit_zodiac',$data);
            
        }else{
        
            if($_POST){

                 $this->form_validation->set_rules('description', 'Description', 'trim|required');             


                if($this->form_validation->run()==FALSE){
                    
                       $data=[
                          'id'=>$id
                      ];

                     $this->load->view('./admin/view_edit_zodiac',$data);
                }else{
                    
                    
                        if( $this->model_admin->update_zodiac_description($id)){//bolean true
                            
                            $this->session->set_flashdata('success_edit','<p style="font-size: 22px;width: 34%;margin: auto; padding: 10px; color: green;">'
                                . '<i class="fa fa-check-circle" aria-hidden="true" style="padding: 10px; "></i> Edited successfully </p>');
                             redirect('admin/admin/all_zodiacs');
                            
                        }
                        else {
                               
                        }    
                }
            }else{

                $data=[
                          'id'=>$id
                      ];

                $this->load->view('./admin/view_edit_zodiac',$data);
            }
        }
        
    }
    
//    edit zodiac---------------------------------------------------------
}
?>



