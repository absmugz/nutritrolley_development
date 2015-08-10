<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Recipefinder extends CI_Controller {
    
  function __construct() {
        parent::__construct();
        $this->load->model('recipes_model');
    }


    public function index() {
        
        $data['recipes'] = $this->recipes_model->get_all();
        $data['main_content'] = 'recipe_finder';
        $this->load->view('includes/template', $data);
    }
    
        public function view($id) {

         $data['recipe'] = $this->recipes_model->get($id);
        //var_dump($data);
        $data['main_content'] = 'recipe_item';
        $this->load->view('includes/template', $data);
    }
    
 
    
}