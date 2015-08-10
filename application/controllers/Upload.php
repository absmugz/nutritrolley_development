<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form');
	}


function do_upload()
    {

    $this->upload_file('userfile1');
    $this->upload_file('userfile2');
    $this->upload_file('userfile3');
    $this->upload_file('userfile4');

            //$this->load->view('upload_form', $error);
            $this->load->view('upload_form');
    }

 function upload_file($field_name){
       $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

      
     
            $data = array('upload_data' => $this->upload->data());
            var_dump($data["upload_data"]["file_name"]);
            
     
  }
}
?>