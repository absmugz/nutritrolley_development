<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$data['main_content'] = 'dashboard';
        $this->load->view('includes/dashboard/template', $data);
	}





}