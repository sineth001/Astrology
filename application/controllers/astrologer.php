<?php

class astrologer extends CI_Controller{
    
    function __construct() {
        parent::__construct();
//        $this->load->model('model_welcome');
        $this->load->library('form_validation');
        
        if(empty($this->session->userdata('email'))){
            redirect('home');
        }
     
    }
    
    public function index(){
        
        if(empty($this->session->userdata('email'))&&1==2){
            
//            redirect('welcome');
            $this->load->view('view_astrologer');
            
        }else{
        
            if($_POST){

                $this->form_validation->set_rules('name_of_service', 'Nmae of Service', 'trim|required');
                $this->form_validation->set_rules('experience', 'Last name', 'trim|required');
                
                if($this->form_validation->run()==FALSE){

                    $this->load->view('view_astrologer');
                }else{
                    die('ok');

                        if( $this->model_welcome->reg_form1()){//bolean true
                            redirect('login/logout');
                            }
                }
            }else{

                $this->load->view('view_astrologer');
            }
        }
    }
}
?>

