<?php 
  class user_model extends CI_Model{

  	public function register ($enc_password){

  		   $data = array (

  		   	'fName'=>$this->input->post('fName'),
            'lName'=>$this->input->post('lName'),
            'username'=> $this->input ->post('username'),
            'email' =>$this->input ->post('email'), 
            'noPhone' =>$this->input ->post('noPhone'), 
             'password'=> $enc_password,
             //'role' =>$this->input ->post('role'), 
             //'bookid' =>$this->input ->post('bookid'), 
      );

  		   //insert

  		   return $this->db->insert('users',$data);

  	}

    public function login($username, $password){ 
      // Validate

      //$this->db->select(*);
      //$this->db->from('users');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      //$this->db->where('role', $role);
      //$query = $this ->db->get();
      //return $query->num_rows();


      $result = $this->db->get('users');

      if($result->num_rows() == 1){
        return $result->row(0)->id;
      }

       else {
        return false;
      }
    }


    public function check_username_exists($username)
    {
      $query = $this->db->get_where('users', array('username'=> $username));

      if(empty($query-> row_array()))
      {
        return true;
      }

      else 
        {
          return false;
        }
    }

    public function check_email_exists($email)
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