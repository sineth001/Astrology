<?php

class model_user_more extends CI_Model{
    
   function __construct() {
       parent::__construct();
 
       $this->load->model('model_system_user');
   }

   public function add_user_more(){
       $user_data=$this->model_system_user->get_user_by_email();
       $user_id=$user_data['id'];
          $data=[
           'user_id'=>$user_id,
           'time_of_birth'=>$this->input->post('time_of_birth'),
           'zodiac'=>$this->input->post('zodiac')
       ];
          
       return $this->db->insert('user_more', $data);
   }
    
}

?>



