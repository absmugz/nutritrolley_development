<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Members extends Public_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
    }

    public function index() {
        if(!$this->ion_auth->in_group('members'))
		{
			//$this->load->view('admin/login', $data);
                        $this->load->view('Home');
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
                    
                    redirect('Home', 'refresh');
                } else {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    
                    redirect('Home', 'refresh');
                }
            }
        }
        $this->load->view('Home');
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('Home', 'refresh');
    }
    
        public function profile() {
         $user = $this->ion_auth->user()->row();
         var_dump($user);
       
    }
}
