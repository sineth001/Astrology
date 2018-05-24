<?php

class model_system_user extends CI_Model{
    
   function __construct() {
       parent::__construct();
       $this->load->helper('date'); 
   }
   
    public function get_time(){
         //geting time
         $datestring = '%Y-%m-%d %H:%i:%s';
         $timestamp = time();
         $timezone  = 'UP45';
         //$daylight_saving = TRUE;
         $sl_time=gmt_to_local($timestamp, $timezone);
         $started_time=mdate($datestring, $sl_time);
        // $started_time= date( '%Y-%m-%d %H:%i:%s', time() );
         //strtotime
        // 2017-1-5 10:48:23
         return $started_time;
    }
   
   public function add_a_user_email(){
        $email=$this->input->post('email');
         $started_time=$this->get_time();
    
        if(isset($email)&& !empty($email)){
            
            $data=[
                "email"=>$email
            ];
            $this->session->set_userdata($data);
            
            $data2=[
                "email"=>$email,
                "started_date"=>$started_time
            ];
            
            
            //$query=$this->db->query("INSERT INTO user (email,started_date) VALUES('$email','$started_time')");

         return $this->db->insert('system_user', $data2 );

        }
   }
   
//add system user info and set session
   public function add_sytem_user(){
       
       $this->db->select('id');
        $this->db->from('system_user');
        $this->db->where('email', $_SESSION['email'] );
        $query = $this->db->get();   
        $user_data= $query->row_array();
       
       
       
       $data2=[
           'id'=>$user_data['id'],
           'first_name'=>$this->input->post('fname'),
           'last_name'=>$this->input->post('lname'),
           'user_type'=>$this->input->post('user_type'),
           'gender'=>$this->input->post('gender'),
           'img_url'=>$this->input->post('img_url')
           
       ];
       
       $this->session->set_userdata($data2);
       
//       hash tag
       $hashed_pw=md5($this->input->post('pw'));
       
         
       
        $data=[
           'first_name'=>$this->input->post('fname'),
           'last_name'=>$this->input->post('lname'),
           'password'=>$hashed_pw,
//           'date_of_birth'=>$this->input->post(''),   
           'phone'=>$this->input->post('tp'),
           'user_type'=>$this->input->post('user_type'),
           'home_town'=>$this->input->post('home_town'),
           'gender'=>$this->input->post('gender'),
           'img_url'=>$this->input->post('img_url')
           
       ];
          $this->db->where('email',$_SESSION['email']);
       return $this->db->update('system_user', $data);
   }
   
      public function get_user_by_email(){
       
        $this->db->select('*');
        $this->db->from('system_user');
        $this->db->where('email', $_SESSION['email'] );
        $query = $this->db->get();   
        return $query->row_array();
    
       
   }
      public function login_user(){
          
        $email=$this->input->post('email');
        $hashed_pw=  md5($this->input->post('password'));
        
        $this->db->select('id,first_name,last_name,email,user_type,gender,img_url');
        $this->db->from('system_user');
        $this->db->where('email',$email);
        $this->db->where('password',$hashed_pw);
        $result=$this->db->get();
        return $result->row_array();
    } 
    
        public function make_a_profile_picture($img_info){
            
            foreach ($img_info as $img_data){

//            $started_time=$this->get_time();
                $data=[
                   "img_url"=>$img_data['file_name']
//                   ,"started_date"=>$started_time
                ];
//                set image as session
                $this->session->set_userdata($data);
               
                $this->db->where( 'id',$_SESSION['id']);
                return $this->db->update('system_user', $data );
            }
        }
        
       


        public function get_user_by_id($id){
           $this->db->select('*');
           $this->db->from('system_user');
           $this->db->where('id',$id);
           
           $result= $this->db->get();
           return $result->row_array();
       }
       

}

?>

