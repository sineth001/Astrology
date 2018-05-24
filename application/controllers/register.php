<?php

class register extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_system_user');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('email'))){
               redirect('home');
           }
    }
    
    public function index(){
        
        if(empty($this->session->userdata('email'))&&1==2){
            
//            redirect('welcome');
            $this->load->view('view_register');
            
        }else{
        
            if($_POST){

                $this->form_validation->set_rules('fname', 'First name', 'trim|required');
                $this->form_validation->set_rules('lname', 'Last name', 'trim|required');
                $this->form_validation->set_rules('tp', 'T.P. number', 'trim|required|exact_length[10]|is_natural');                
                $this->form_validation->set_rules('pw', 'Password', 'required');
                $this->form_validation->set_rules('cpw', 'Password Confirmation', 'required|matches[pw]');
                
                $this->form_validation->set_rules('user_type', 'User type', 'trim|required');
                $this->form_validation->set_rules('home_town', 'Home Town', 'trim|required');
                $this->form_validation->set_rules('gender', 'Gender', 'trim|required');               
                
                
//                $this->form_validation->set_rules('g-recaptcha-response',' Boot check ','required',
//                        array(
//                            'required'=>'Bot checking is required to identify you as not a robot'
//                        )
//                        );

                if($this->form_validation->run()==FALSE){

                    $this->load->view('view_register');
                }else{
                    
                    
                        if( $this->model_system_user->add_sytem_user()){//bolean true
                            
                            $user_type=$this->input->post('user_type');
                            if($user_type=='user'){
                                redirect('user');
                            }
                            else if ($user_type=='astrologer') {
                                redirect('astrologer');
                            }
                            
                        }
                        else {
                               
                        }    
                }
            }else{

                $this->load->view('view_register');
            }
        }
    }
}
?>

