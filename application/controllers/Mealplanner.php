<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mealplanner extends Public_Controller {
    
  function __construct()
  {
    parent::__construct();
    
  }

    public function index() {
        
        if ($this->ion_auth->logged_in()) {
            $loggedin = true;
        } else {
            $loggedin = false;
        }

        $data['user'] = $this->ion_auth->user()->row();
        $data['loggedin'] = $loggedin;
        
        $data['main_content'] = 'meal_planner';
        $this->load->view('includes/template', $data);
    }
    
 
    
}