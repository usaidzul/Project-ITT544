<?php
   
   class Post extends CI_Controller{

   		public function index()
   		{

              if(!$this->session->userdata('logged_in'))
            {
               redirect ('users/login');
            }
   			$data['title']='LIST OF USERS';

   			$data['user'] = $this -> post_model->get_post();

   			$this->load->view('template/header');
			$this->load->view('post/index', $data);
			$this->load->view('template/footer');

   		
   		}

   		public function view($id = NULL)
   		{


   			
   			$data['users'] = $this->post_model->get_post($id);

   			if(empty($data['users']))
   			{
   				show_404();
   			}

   			$data['email']=$data['users']['email'];


   			$this->load->view('template/header');
			$this->load->view('post/view', $data);
			$this->load->view('template/footer');


   		} 

   		public function create ()
   		{

   			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			 $this->load->helper('security');

   			$data['title']='ADD NEW BOOKING';

   			$this-> form_validation ->set_rules('password','Password','required');

            $this-> form_validation ->set_rules('username',' Username','required');

   			$this-> form_validation ->set_rules('noPhone','Phone No','required');

   			$this-> form_validation ->set_rules('fName','First Name','required');

   			$this-> form_validation ->set_rules('lName','Last Name','required');

   			$this-> form_validation->set_rules('email','Email','required');

   			$this-> form_validation->set_rules('role','Role','required');

   			$this-> form_validation->set_rules('bookid','Book Id','required');

   			if($this-> form_validation ->run() == FALSE)
   			{

   			$this->load->view('template/header');
			$this->load->view('post/create', $data);
			$this->load->view('template/footer');

   			}

   			else 
   			{
   				$this->post_model->create_post();
   				$this->session->set_flashdata('post_created', 'Your info has been created');
   				redirect('post');
   			}

   		}


   		public function delete ($id)
   		{
   			$this->post_model->delete_post ($id);
   			$this->session->set_flashdata('post_deleted', 'Your info has been deleted');
   			redirect('post');
   		}

   		public function edit ($id)
   		{
   				$data['users'] = $this->post_model->get_post($id);

   			if(empty($data['users']))
   			{
   				show_404();
   			}

   			$data['title']='Edit User';
   		


   			$this->load->view('template/header');
			$this->load->view('post/edit', $data);
			$this->load->view('template/footer');

   		}

   		public function update()
   		{
   				$this->post_model->update_post();
   					$this->session->set_flashdata('post_updated', 'Your info has been updated');
   				redirect('post');
   		}


}
   