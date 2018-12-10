<?php 
 class users extends CI_Controller
 {

 	public function login(){

			$data['title'] = 'Sign In';

			$this-> form_validation->set_rules('username', 'Username', 'required');
			$this-> form_validation->set_rules('password', 'Password', 'required');

			if($this-> form_validation ->run() === FALSE){
				$this->load->view('template/header');
				$this->load->view('admin/loginadmin');
				$this->load->view('template/footer');
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));
				// Login user
				$admin_id = $this->user_model->login($username, $password);
				if($admin_id){
					// Create session
					$admin_data = array(
						'id' => $admin_id,
						'username' => $username,
						'logged_in' => true
					);
					$this->session->set_userdata($admin_data);
					// Set message
					$this->session->set_flashdata('logged_in', 'You are now logged in');
					redirect('post');

				} 
				else {
					// Set messagge
    		
					$this->session->flashdata('login_failed', 'Login is invalid');
				
					redirect('admin/loginadmin');
				}		
			}
		}

    public function logout()
    {

      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('admin_id');
     $this->session->unset_userdata('username');

    $this->session->flashdata('admin_loggedout', 'You are now logged out');

    redirect('admin/loginadmin');




    }


 }