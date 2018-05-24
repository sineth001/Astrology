<?php

class about extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_user_more');
        $this->load->library('form_validation');
     
    }
    
    public function index(){
        
        $this->load->view('./user/view_about');
       
    }
}
?>

