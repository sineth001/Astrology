<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_system_user');
        $this->load->library('form_validation');
        $this->load->model('model_admin');
        //$this->session->unset_userdata('email','id');
    }

	public function index(){
           
                if($_POST){
                    
                    $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[system_user.email]');
                    if ($this->form_validation->run() == FALSE){
                                        
                             $this->load->view('view_home');
                              
                        }else{
                            
                            if($this->model_system_user-> add_a_user_email()){//boolean true
                        
                                redirect('register');
                            }                      
                    
                        }
                
                }else{
                    // if not set post go to home
                    $this->load->view('view_home');
                }
            
	}
        public function about_us(){
            $this->load->view('about_us');
        }
        public function contact_us(){
            $this->load->view('contact_us');
        }
}
