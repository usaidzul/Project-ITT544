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

   			'password'=> $this->input ->post('password'),
   			'noPhone' =>$this->input ->post('inputPhone'), 
   			'fName'=>$this->input->post('fName'),
   			'lName'=>$this->input->post('lName'),
   		    'email' =>$this->input ->post('email'), 
   	);

   		return $this->db->insert('users',$data);


   	}



   	 }
   