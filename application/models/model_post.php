<?php

class model_post extends CI_Model{
    
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
   

   

   public function add_a_post($img_info){
//       echo $img_info['file_name'];
        foreach ($img_info as $img_data){
          
        
          $data=[
           'user_id'=>$_SESSION['id'],
           'post_title'=>$this->input->post('title'),
           'post_content'=>$this->input->post('content'),
           'added_time'=>$this->get_time(),
           'img_url'=>$img_data['file_name']
           
          ];
         
         return $this->db->insert('post', $data);
        }
   }
   public function get_all_post(){
       $this->db->select('*');
       $this->db->from('post');
       $this->db->order_by('post_id','desc');
//       $this->db->order('desc');
       $query=$this->db->get();
       
       //$this->db->last_query();
       //die();
       
       return $query->result_array();
       
   }
   
    public function delete_a_post_by_id($post_id){
        
        if($this->delete_comment_for_a_post_by_id($post_id)){
            if($this->remove_all_likes_for_a_post_by_id($post_id)){
                
                $this->db->where('post_id',$post_id );
                return $this->db->delete('post');
            }
        }
      
      
  }
  
  public function delete_comment_for_a_post_by_id($post_id){
      $this->db->where('post_id',$post_id );
      return $this->db->delete('comment');
  }
  
  public function remove_all_likes_for_a_post_by_id($post_id){
      $this->db->where('post_id',$post_id );
      return $this->db->delete('post_has_like');
  }
   
//-----------------like poerations-------------------------
   
  public function add_like_for_post($post_id){
      $data=[
           'user_id'=>$_SESSION['id'],
           'post_id'=>$post_id
           
          ];
         return $this->db->insert('post_has_like', $data);
  }
  
  public function remove_like_for_post($post_id){
      
      $this->db->where('post_id',$post_id );
      $this->db->where('user_id',$_SESSION['id'] );
      return $this->db->delete('post_has_like');
  }
  
  public function get_number_of_likes_for_a_post($post_id){
       $this->db->select('*');
       $this->db->from('post_has_like');
       $this->db->where('post_id',$post_id);
       $query=$this->db->get();
       return $query->num_rows();
   }
  public function check_liked_by_current_user($post_id){
      
      $this->db->select('*');
       $this->db->from('post_has_like');
       $this->db->where('post_id',$post_id);
       $this->db->where('user_id',$_SESSION['id']);
       $query=$this->db->get();
       return $query->num_rows();
      
  }
  
  public function check_liked($post_id){
        
        if($this->check_liked_by_current_user($post_id)>=1){
            $data=[
                'color'=>'#34A853',
                'function'=>'remove_a_like'
            ];
            
            return $data;
        }else{
           $data=[
                'color'=>'#2a6496',
                'function'=>'add_a_like'
            ]; 
           return $data;
        }
    }
    
}

?>

