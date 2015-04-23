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
  function __construct()
  {
    parent::__construct();

    //
    // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
    //
    if(!$this->ion_auth->logged_in())
    {
       redirect(base_url() . 'auth/login');
    }
     if(!$this->ion_auth->is_admin())
    {
      redirect(base_url() . 'auth/login');
    }
}
}



class Public_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
  }
}
