<?php

class model_user_more extends CI_Model{
    
   function __construct() {
       parent::__construct();
 
       $this->load->model('model_system_user');
   }

   public function add_astrologer_more(){
       $user_data=$this->model_system_user->get_user_by_email();
       $astrologer_id=$user_data['id'];
          $data=[
           'astrologer_id'=>$astrologer_id,
           'name_of_service'=>$this->input->post('name_of_service'),
           'experience'=>$this->input->post('experience')
       ];
          
       return $this->db->insert('astrologer_more', $data);
   }
    
}

?>


