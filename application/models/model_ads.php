<?php

class model_ads extends CI_Model{
    
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
   

   

   public function add_a_advertisement($img_info){
//       echo $img_info['file_name'];
        foreach ($img_info as $img_data){
          
        
          $data=[
           
           'heading'=>$this->input->post('title'),
           'description'=>$this->input->post('content'),
           'added_date'=>$this->get_time(),
           'img_url'=>$img_data['file_name']
           
          ];
         
         return $this->db->insert('advertisement', $data);
        }
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

