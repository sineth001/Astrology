<?php

class login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_system_user');
        $this->load->library('form_validation');
        //$this->id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
        
    }
    
    public function index(){
    
       // $this->load->view('view_login');
        if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
            $user_type=$_SESSION['user_type'];
            switch ($user_type) {
                                case 'user':
//                                    die('user');
                                    redirect('users/home');
                                    break;
                                case 'astrologer':
//                                    die('astrologer');
                                    redirect('astrologers/home');
                                    break;
                                case 'admin':
//                                    die('admin');
                                     redirect('admin/admin');
                                    break;
                                
                                default:
                                    redirect('');
                            }
        }else{
            if($_POST){
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                $this->form_validation->set_rules('password', 'Password', 'trim|required');

                if($this->form_validation->run()==FALSE){
                    $this->load->view('view_login');
                }else{
                    If($this->model_system_user->login_user()){
                        $user_info=$this->model_system_user->login_user();
                        $user_type=$user_info['user_type'];

                        //set session data of loged in user
                        $this->session->set_userdata($user_info);
                        $this->session->set_flashdata('flash_data','Welcom '.$_SESSION['first_name']);
                        
                          switch ($user_type) {
                                case 'user':
//                                    die('user');
                                    redirect('users/home');
                                    break;
                                case 'astrologer':
//                                    die('astrologer');
                                    redirect('astrologers/home');
                                    break;
                                case 'admin':
//                                    die('admin');
                                     redirect('admin/admin');
                                    break;
                                
                                default:
                                    redirect('');
                            }
                        
                       
                    }else{
                        $this->session->set_flashdata('flash_data','User name and email combination is wrong');
                        //$this->load->view('view_login');
                        redirect('login');
                    }


                }
            }else{
                $this->load->view('view_login');
            }
        
        }  
        
    }
    
    public function logout(){
      
        $user_info=array('id','first_name','last_name','email','gender','user_type','img_url');
        $this->session->unset_userdata($user_info);
        redirect('login');
        
    
    }
}

?>

