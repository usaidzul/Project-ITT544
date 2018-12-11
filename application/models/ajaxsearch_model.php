<?php

/*class Ajaxsearch_model extends CI_Model
{

	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("bookings");
		if($query!='')
		{
			//$this->db->like('bookid',$query);
			$this->db->or_like('date',$query);
			$this->db->or_like('days',$query);
			$this->db->or_like('id',$query);
			$this->db->or_like('roomid',$query);

		}

		$this->db->order_by('bookid','DESC');
		return $this->db->get();
	}
}

?>*/