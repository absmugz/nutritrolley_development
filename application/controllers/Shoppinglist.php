<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Shoppinglist extends CI_Controller {
    
  function __construct()
  {
    parent::__construct();
    
  }

    public function index() {
        $data['main_content'] = 'shopping_list';
        $this->load->view('includes/template', $data);
    }
    
 
    
}