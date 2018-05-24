<?php

class user extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_user_more');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('email'))){
               redirect('home');
           }
    }
    
    public function index(){
        
        if(empty($this->session->userdata('email'))&&1==2){
            
//            redirect('welcome');
            $this->load->view('view_user');
            
        }else{
        
            if($_POST){

                $this->form_validation->set_rules('time_of_birth', 'Time of Birth', 'trim|required');
                $this->form_validation->set_rules('zodiac', 'Zodiac', 'trim|required');
                
                if($this->form_validation->run()==FALSE){
                    
                    $this->load->view('view_user');
                }else{
                   

                        if( $this->model_user_more->add_user_more()){//bolean true
                            
                            redirect('login/logout');
                            }
                }
            }else{

                $this->load->view('view_user');
            }
        }
    }
}
?>

