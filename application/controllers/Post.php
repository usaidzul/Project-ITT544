<?php
   
   class Post extends CI_Controller{

   		public function index()
   		{
   			$data['title']='LIST OF USERS';

   			$data['user'] = $this -> post_model->get_post();

   			$this->load->view('template/header');
			$this->load->view('post/index', $data);
			$this->load->view('template/footer');

   		
   		}

   		/*public function view($id = NULL)
   		{
   			$data['user'] = $this->post_model->get_post($id);

   			if(empty($data['user']))
   			{
   				show_404();
   			}

   			$data['title']=$data['users']['title'];


   			$this->load->view('template/header');
			$this->load->view('post/view', $data);
			$this->load->view('template/footer');


   		} */

   		public function create ()
   		{

   			$data['title']='ADD NEW USERS';

   			$this-> form_validation ->set_rules('inputPhone','Phone No','required');

   			$this-> form_validation ->set_rules('inputPassword4','Password','required');

   			$this-> form_validation ->set_rules('fName','First Name','required');

   			$this-> form_validation ->set_rules('lName','Last Name','required');

   			$this-> form_validation->set_rules('email','Email','required');

   			if($this-> form_validation ->run() == FALSE)
   			{

   			echo('try again');

   			$this->load->view('template/header');
			$this->load->view('post/create', $data);
			$this->load->view('template/footer');

   			}

   			else 
   			{
   				$this->post_model->create_post();
   				redirect('post');
   			}

   		}
   }