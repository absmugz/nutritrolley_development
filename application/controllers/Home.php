<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Home extends CI_Controller {
    
   function __construct() {
        parent::__construct();
        $this->load->model('recipes_model');
        $this->load->library('ion_auth');
    }
  

    //the function that loads the first form<br><br>
    public function index() {
 
if ($this->ion_auth->logged_in()) {
      $loggedin = true;
    } else {
      $loggedin = false;
    }
        /* 
        
        $data = array(
          "view1" => $this->load->view('homepage','', TRUE),
          "view2" => $this->load->view('recipe_finder','', TRUE),
          "view3" => $this->load->view('natural_healing','', TRUE),
          "view4" => $this->load->view('meal_planner','', TRUE),
          "view5" => $this->load->view('shopping_list','', TRUE),
          "view6" => $this->load->view('guess_right_eat_right','', TRUE),
          "view7" => $this->load->view('blog','', TRUE)
 ); */
        
$data['user'] = $this->ion_auth->user()->row();
$data['loggedin'] = $loggedin;
$data['recipes'] = $this->recipes_model->get_all();
$data['main_content'] = 'home';
$this->load->view('includes/template', $data);

       //$this->load->view('home');
        
        
        //$views['pageTwo'] = $this->load->view('recipe_finder', $data, true);
        

        //$data['main_content'] = 'home';
        //$data['output'] = 'test';
        //$this->load->view('includes/template', $data);
        //$this->load->view('home', $data);
    }
    
    public function login()
    {
       
		
	$this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE)
        {
			$this->load->helper('form');
            redirect('home');
        }
        else
        {
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember))
            {
                redirect('home');
            }
            else
            {
                $_SESSION['auth_message'] = $this->ion_auth->errors();
                $this->session->mark_as_flash('auth_message');
                redirect('home');
            }
        }
    }
    
    public function logout()
{
	$this->ion_auth->logout();
	redirect('home');
}

    
 
    
}
