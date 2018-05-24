<?php

class model_comment extends CI_Model{
    
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
   

   

   public function add_comment_for_a_post(){
          $data=[
           'user_id'=>$_SESSION['id'],
           'post_id'=>$this->input->post('id_to_post'),
           'content'=>$this->input->post('comment_content'),
           'added_time'=>$this->get_time()
           
           
       ];
          
         
       return $this->db->insert('comment', $data);
   }
   
   public function get_number_of_comments_for_a_post($post_id){
       $this->db->select('*');
       $this->db->from('comment');
       $this->db->where('post_id',$post_id);
       $query=$this->db->get();
       return $query->num_rows();
   }
   
   public function get_all_comments_for_a_post($postid){
       
       $this->db->select('*');
       $this->db->from('comment');
      $this->db->order_by('comment_id','desc');
       $this->db->where('post_id',$postid);
       $query=$this->db->get();
       return $query->result_array();
       
   }
   
   public function delete_a_comment_by_id($comment_id){
       $this->db->where('comment_id', $comment_id );
       return $this->db->delete('comment');
   }


//      public function get_user_by_email(){
//       
//        $this->db->select('*');
//        $this->db->from('system_user');
//        $this->db->where('email', $_SESSION['email'] );
//        $query = $this->db->get();   
//        return $query->row_array();
//    
//       
//   }
//      public function login_user(){
//        $email=$this->input->post('email');
//        $password=$this->input->post('password');
//        
//        $this->db->select('id,first_name,last_name,email,user_type');
//        $this->db->from('system_user');
//        $this->db->where('email',$email);
//        $this->db->where('password',$password);
//        $result=$this->db->get();
//        return $result->row_array();
//    } 
    
}

?>



