<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
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
    }
}

class Public_Controller extends MY_Controller
{
  public function __construct() {
        parent::__construct();

        $group = 'members';
		
        // Check if the user is already logged in		
        if (!$this->ion_auth->in_group($group)) {
            // If not, we send him to the login Page
             $this->session->set_flashdata('sign_up_message','You"re are not a allowed, register to view this page');
            redirect('Home', 'refresh');
        }
    }
}