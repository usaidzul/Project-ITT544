<?php 
   class post_model extends CI_Model 
   {
   	 public  function __construct()
   	 {
   	 	$this->load->database();
   	 }

   	 public function get_post($id = FALSE)
   	 {

   	 	if($id == FALSE)
   	 	{
   	 		$query = $this -> db-> get('users');
   	 		return $query->result_array();
   	 	}

   	 $query = $this -> db-> get_where('users',array('id'=>$id));
   	 return $query->row_array();
   	}

   	public function create_post()
   	{
   		//$email = url_title($this->input->post('email'));

   		$data=array(

   			'password'=> $this->input ->post('inputPassword4'),
   			'noPhone' =>$this->input ->post('inputPhone'), 
   			'fName'=>$this->input->post('fName'),
   			'lName'=>$this->input->post('lName'),
   		    'email' =>$this->input ->post('email'), 
   		    'role' =>$this->input ->post('role'), 
   		    'bookid' =>$this->input ->post('bookid'), 
   	);

   		return $this->db->insert('users',$data);


   	}

      public function delete_post($id)
      {
         $this->db->where('id',$id);
         $this->db->delete('users');
         return true;
      }

     public function update_post()
      {



         $data = array (

            'password'=> $this->input ->post('inputPassword4'),
            'noPhone' =>$this->input ->post('inputPhone'), 
            'fName'=>$this->input->post('fName'),
            'lName'=>$this->input->post('lName'),
             'email' =>$this->input ->post('email'), 
             'role' =>$this->input ->post('role'), 
             'bookid' =>$this->input ->post('bookid'), 
      );

         $this->db->where('id' ,$this->input->post('id'));
         return $this->db->update('users',$data);
                      

      }



   	 }
   