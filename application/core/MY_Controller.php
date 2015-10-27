<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
    }
}

class Admin_Controller extends MY_Controller
{
  public function __construct() {
        parent::__construct();

        // Check if the user is already logged in		
        if (!$this->ion_auth->logged_in()) {
            // If not, we send him to the login Page
            redirect('admin', 'refresh');
        }
         else {
        //Store user in $data
       //var_dump($this->ion_auth->logged_in());exit;
       $this->ion_auth->logged_in();
        }
      
   }
    
}

class Public_Controller extends MY_Controller
{
  public function __construct() {
        parent::__construct();
  
        $group = 'members';
        if(!$this->ion_auth->in_group($group)) {
     $this->session->set_flashdata('sign_up_message','You"re are not a allowed, register to view this page');
      $loggedin = false;
      $data['loggedin'] = $loggedin;
      $this->load->view('Home', $data);
      
    } else {
      $loggedin = true;
      $data['loggedin'] = $loggedin;
       //Store user in $data
       $this->ion_auth->logged_in();
       
      $this->load->view('Home', $data);
        //var_dump($this->ion_auth->logged_in());exit;
    }
 

        
    }
}