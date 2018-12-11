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

    public function get_book($id = FALSE)
     {

      if($id == FALSE)
      {
        $query = $this -> db-> get('bookings');
        return $query->result_array();
      }

     $query = $this -> db-> get_where('bookings',array('bookid'=>$id));
     return $query->row_array();
    }

   	public function create_post()
   	{
   		//$email = url_title($this->input->post('email'));

   		$data=array(

            'id' =>$this->input ->post('id'), 
   			'date'=> $this->input ->post('date'),
            'days'=> $this->input ->post('days'),
             'roomid'=> $this->input ->post('roomid'),
   			
   			
           );

        //$this->db->where('id' ,$this->input->post('id'));
          //$this->db->where('roomid' ,$this->input->post('roomid'));
         return $this->db->insert('bookings',$data);
      }

      public function delete_post($id)
      {
         $this->db->where('id',$id);
         $this->db->delete('users');
         return true;
      }

     /*  public function deleteBook_post($bid)
      {
         $this->db->where('bookid',$bid);
         $this->db->delete('bookings');
         return true;
      }*/

     public function update_post()
      {



         $data = array (

            'password'=> $this->input ->post('password'),
            'noPhone' =>$this->input ->post('noPhone'),
              'username'=> $this->input ->post('username'), 
            'fName'=>$this->input->post('fName'),
            'lName'=>$this->input->post('lName'),
             'email' =>$this->input ->post('email'), 
             'role' =>$this->input ->post('role'), 
             'bookid' =>$this->input ->post('bookid'), 
      );

         $this->db->where('id' ,$this->input->post('id'));
         return $this->db->update('users',$data);
                      

      }
   public function fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("bookings");
    if($query!='')
    {
      $this->db->like('bookid',$query);
     // $this->db->or_like('date',$query);
     // $this->db->or_like('days',$query);
     // $this->db->or_like('id',$query);
      //$this->db->or_like('roomid',$query);

    }

    $this->db->order_by('bookid','DESC');
    return $this->db->get();
  }
      

}



   	 
   