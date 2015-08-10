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
    }
  

    //the function that loads the first form<br><br>
    public function index() {
 
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
    
 
    
}
