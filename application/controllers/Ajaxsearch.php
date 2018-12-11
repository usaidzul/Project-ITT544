<?php

/*defined('BASEPATH') OR exit('No direct script access allowed');
class Ajaxsearch extends CI_Controller
{

	public function search()
	{

		$this->load->view('post/book');

	}

	public function fetch()
	{
		$output='';
		$query='';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query'))
		{
			$query=$this->input->post('query');
			   $this->load->view('template/header');
         		$this->load->view('post/book');
         		$this->load->view('template/footer');

		}

		$data=$this->ajaxsearch_model->fetch_data($query);
		$output .='

		<div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Customer Name</th>
       <th>Address</th>
       <th>City</th>
       <th>Postal Code</th>
      
      </tr>


		';

		if($data->num_rows()>0)
		{

			foreach($data->result() as $row)
			{
				 $output .= '
      	<tr>
       <td>'.$row->date.'</td>
       <td>'.$row->days.'</td>
       <td>'.$row->id.'</td>
       <td>'.$row->roomid.'</td>
      </tr>
    ';
			}

		}
		else
		{

			$output.='<tr>
       <td colspan="5">No Data Found</td>
      </tr>';

		}

		$output .='</table>';
		echo $output;
	}


}*/