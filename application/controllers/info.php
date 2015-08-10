<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Info extends CI_Controller {
    
  function __construct()
  {
    parent::__construct();
    
  }
  
  public function faq() {
      
       $this->load->view('info/faq'); 
      
  }
  
   public function  advertise() {
      
       $this->load->view('info/advertise'); 
      
  }
   public function about_me() {
      
       $this->load->view('info/about_me'); 
      
  }
   public function contact_me() {
      
       $this->load->view('info/contact_me'); 
      
  }
  
}
