<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function index() {
        if (!$this->ion_auth->logged_in())
		{
			//$this->load->view('admin/login', $data);
                        $this->load->view('admin/login');
		}
    }

    public function login() {

        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');
            if ($this->form_validation->run() === TRUE) {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    redirect('dashboard', 'refresh');
                } else {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    redirect('admin', 'refresh');
                }
            }
        }
        $this->load->view('admin/login');
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('admin', 'refresh');
    }
    
        public function profile() {
         $user = $this->ion_auth->user()->row();
         var_dump($user);
       
    }

}


