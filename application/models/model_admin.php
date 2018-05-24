<?php

class model_admin extends CI_Model{
    
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
   


   

    
        public function make_a_profile_picture($img_info){
            
            foreach ($img_info as $img_data){

//            $started_time=$this->get_time();
                $data=[
                   "img_url"=>$img_data['file_name']
//                   ,"started_date"=>$started_time
                ];
               
                $this->db->where( 'id',1);
                return $this->db->update('system_user', $data );
            }
        }
       
        
//     get all astrologers   
        
       public function get_all_astrologers(){
           $this->db->select('*');
           $this->db->from('system_user');
           $this->db->where('user_type','astrologer');
           $result= $this->db->get();
           return $result->result_array();
       }
       public function get_astrologer_more_info_by_id($id){
           $this->db->select('*');
           $this->db->from('astrologer_more');
           $this->db->where('astrologer_id',$id);
           $result= $this->db->get();
           return $result->row_array(); 
       }
       public function get_all_users(){
           $this->db->select('*');
           $this->db->from('system_user');
           $this->db->where('user_type','user');
           $result= $this->db->get();
           return $result->result_array();
       }
       public function get_user_more_info_by_id($id){
           $this->db->select('*');
           $this->db->from('user_more');
           $this->db->where('user_id',$id);
           $result= $this->db->get();
           return $result->row_array(); 
       }
       public function get_all_admins(){
           $this->db->select('*');
           $this->db->from('system_user');
           $this->db->where('user_type','admin');
           $result= $this->db->get();
           return $result->result_array();
       }
       public function get_all_posts(){
           $this->db->select('*');
           $this->db->from('post');
//           $this->db->where();
           $result= $this->db->get();
           return $result->result_array();
       }
        public function get_user_for_post($user_id){
           $this->db->select('*');
           $this->db->from('system_user');
           $this->db->where('id',$user_id);
           $result= $this->db->get();
           return $result->row_array(); 
       }
       
       public function get_all_zodiacs(){
           $this->db->select('*');
           $this->db->from('zodiac');
//           $this->db->where();
           $result= $this->db->get();
           return $result->result_array();
       }
       
        public function get_all_advertisements(){
           $this->db->select('*');
           $this->db->from('advertisement');
//           $this->db->where();
           $result= $this->db->get();
           return $result->result_array();
       }
       
       
//       delete-------------------------------------------------------------
       public function delete_astrologer($id){
            $this->db->where('id', $id );
            return $this->db->delete('system_user');
//          $this->db->delete('astrologer_more');
       }
       public function delete_astrologer_more($id){
           $this->db->where('astrologer_id', $id );
           return $this->db->delete('astrologer_more');
       }
       
       public function delete_user($id){
            $this->db->where('id', $id );
            return $this->db->delete('system_user');
       }
       public function delete_user_more($id){
           $this->db->where('user_id', $id );
           return $this->db->delete('user_more');
       }
       public function delete_post_by_user_id($id){
            $this->db->where('user_id', $id );
            return $this->db->delete('post'); 
       }
       public function delete_admin($id){
            $this->db->where('id', $id );
            return $this->db->delete('system_user'); 
       }
       public function delete_post($id){
            $this->db->where('id', $id );
            return $this->db->delete('post'); 
       }
       public function delete_advertisement($id){
            $this->db->where('id', $id );
            return $this->db->delete('advertisement');
       }
       
       
//      edit use info---------------------------------------------------------
        public function admin_update_user($id){
            $data=[
             'first_name'=>$this->input->post('fname'),
             'last_name'=>$this->input->post('lname'),
             'phone'=>$this->input->post('tp'),
             'user_type'=>$this->input->post('user_type'),
             'email'=>$this->input->post('email')

            ];
            $this->db->where('id',$id);
            return $this->db->update('system_user', $data);
        }
     
        public function get_user_by_admin($id){
           $this->db->select('*');
           $this->db->from('system_user');
           $this->db->where('id',$id);
           $result= $this->db->get();
           return $result->row_array();
        }
//-------------------------get Zodiacs info---------------------------------
       public function get_zodiac_by_id($id){
           $this->db->select('*');
           $this->db->from('zodiac');
           $this->db->where('id',$id);
           $result= $this->db->get();
           return $result->row_array();
        } 
        
        public function update_zodiac_description($id){
            $data=[
             'description'=>$this->input->post('description'),
             'updated_time'=>$this->get_time()
             

            ];
            $this->db->where('id',$id);
            return $this->db->update('zodiac', $data);
        }
      
        
        
        public function get_all_ads(){
            $this->db->select('*');
            $this->db->from('advertisement');
     //       $this->db->order('desc');
            $query=$this->db->get();
            return $query->result_array();

        }
}

?>

