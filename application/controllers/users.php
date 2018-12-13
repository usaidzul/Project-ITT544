<?php 
 class users extends CI_Controller
 {
 	public function register()
 	{

 		$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			 $this->load->helper('security');

   			//$data['title']='ADD NEW USERS';

			 $this-> form_validation ->set_rules('fName','First Name','required');

   			$this-> form_validation ->set_rules('lName','Last Name','required');

   			$this-> form_validation ->set_rules('noPhone','Phone No','required');

   			$this-> form_validation->set_rules('email','Email','required|callback_check_email_exists');

   			$this-> form_validation->set_rules('username','Username','required|callback_check_username_exists');

   			$this-> form_validation ->set_rules('password','Password','required');

   			//$this-> form_validation ->set_rules('confPassword','Confirmation Password','matches [inputPassword4]');

   			//$this-> form_validation->set_rules('role','Role','required');

   			//$this-> form_validation->set_rules('bookid','Book Id','required');


   			if($this-> form_validation ->run() == FALSE)
   			{
   				
   			$this->load->view('template/header');
			 $this->load->view('users/register');
			 $this->load->view('template/footer');

   			}

   			else 
   			{
   				//encrypt passwordinputPassword4
   				$enc_password = md5($this->input->post('password'));

   				$this->user_model->register($enc_password);

   				//message

   				$this->session->set_flashdata('user_registered', ' You are now registered and can log in');

   				redirect('post'); 
   			}

 	}
 	//login


 // Log in user
		public function login(){

			$data['title'] = 'Sign In';



			$this-> form_validation->set_rules('username', 'Username', 'required');
			$this-> form_validation->set_rules('password', 'Password', 'required');

			if($this-> form_validation ->run() === FALSE){
				$this->load->view('template/header');
				$this->load->view('users/login');
				$this->load->view('template/footer');
			}
       else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

        //$role = md5($this->input->post('role'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					// Create session
					$user_data = array(
						'id' => $user_id,
				'username' => $username,
        //'role'=> $role,
						'logged_in' => true
					);
					$this->session->set_userdata($user_data);
           
          $user_role=$this->session->user_data;
					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					redirect('post');

				} 
				else {
					// Set messagge
    		
					$this->session->flashdata('login_failed', 'Login is invalid');
				
					redirect('users/login');
				}		
			}
		}

    public function logout()
    {

      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('user_id');
     $this->session->unset_userdata('username');

    $this->session->flashdata('user_loggedout', 'You are now logged out');

    redirect('users/login');




    }
 	

 	public function check_username_exists($username)
     {
      $this-> form_validation->set_message ('check_username_exists', 'The username has taken');
        

      if ($this->user_model->check_username_exists ($username))
      {
        return true;

      }

      else{

        return false;

      }
     }

     function check_email_exists($email)
     {
      $this-> form_validation->set_message ('check_email_exists', 'The email has taken');
        

      if ($this->user_model->check_email_exists ($email))
      {
        return true;

      }

      else{

        return false;

      }
     }

     
 }