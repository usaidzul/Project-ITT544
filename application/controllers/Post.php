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

         public function book()
         {

              if(!$this->session->userdata('logged_in'))
            {
               redirect ('users/login');
            }
            $data['title']='LIST OF BOOKINGS';

            $data['book'] = $this -> post_model->get_book();

            $this->load->view('template/header');
         $this->load->view('post/book', $data);
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

            public function viewBook($id = NULL)
         {


            
            $data['books'] = $this->post_model->get_book($id);

            if(empty($data['books']))
            {
               show_404();
            }

            $data['bookid']=$data['books']['bookid'];


            $this->load->view('template/header');
         $this->load->view('post/viewBook', $data);
         $this->load->view('template/footer');


         } 


   		public function create ()
   		{



            if(!$this->session->userdata('logged_in'))
            {
               redirect ('users/login');
            }
         $data['title']='ADD NEW BOOKING';


            $data['booking'] = $this -> post_model->get_post();

            $this->load->view('template/header');
         $this->load->view('post/create', $data);
         $this->load->view('template/footer');


   			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			 $this->load->helper('security');

   		
               //$data['users'] = $this->post_model->get_post($id);

               /*if(empty($data['users']))
            {
               show_404();
            }*/

   			$this-> form_validation ->set_rules('id','Id','required');

            $this-> form_validation ->set_rules('date',' Date','required');

   			$this-> form_validation ->set_rules('days','Days','required');

            $this-> form_validation ->set_rules('roomid','Room','required');


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

         public function deleteBook ($id)
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
   