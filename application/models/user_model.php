<?php 
  class user_model extends CI_Model{

  	public function register ($enc_password){

  		   $data = array (

  		   	'fName'=>$this->input->post('fName'),
            'lName'=>$this->input->post('lName'),
            'email' =>$this->input ->post('email'), 
            'noPhone' =>$this->input ->post('inputPhone'), 
             'password'=> $enc_password,
             'role' =>$this->input ->post('role'), 
             'bookid' =>$this->input ->post('bookid'), 
      );

  		   //insert

  		   return $this->db->insert('users',$data);

  	}

    public function login($email, $password){
      // Validate
      $this->db->where('email', $email);
      $this->db->where('password', $password);
      $result = $this->db->get('users');
      if($result->num_rows() == 1){
        return $result->row('id')->id;
      }

       else {
        return false;
      }
    }


    public function check_username_exists($email)
    {
      $query = $this->db->get_where('users', array('email'=> $email));

      if(empty($query-> row_array()))
      {
        return true;
      }

      else 
        {
          return false;
        }
    }



  }