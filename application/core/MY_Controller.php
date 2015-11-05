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
       //$this->ion_auth->logged_in();
             $this->ion_auth->user()->row();
        }
      
   }
    
}

class Public_Controller extends MY_Controller {
    function __construct() {
        parent::__construct();
        //if($this->ion_auth->logged_in()===FALSE)
        $group = 'members';
	if ($this->ion_auth->in_group($group)===FALSE)
        { 
            redirect('home');
        }  else {
  
             $this->ion_auth->user()->row();
        }
    }
    

}