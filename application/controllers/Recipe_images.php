<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe_images extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('recipe_image_model');
    }

    public function index() {
          $this->load->view('recipes_images_form');
       //$user = $this->Recipe_images_model->get(1);
       
       //print_r($user);
       //die();
       
       //$pages = $this->recipe_model->with('recipe_images')
                         //->get(1);

                 
        //$data['recipes'] = $this->recipe_model->get_all();
        //$this->load->view('recipe/recipe', $data);
    }
    

  
  function do_upload()
    {

    $this->upload_file('userfile1');
    $this->upload_file('userfile2');
    $this->upload_file('userfile3');
    $this->upload_file('userfile4');

            //$this->load->view('upload_form', $error);
            $this->load->view('recipes_images_form');
    }

 function upload_file($field_name){
       $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($field_name))
        {
            return array('error' => $this->upload->display_errors());

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            //var_dump($data["upload_data"]);
            
         
            foreach ($data as $value) {
                
                var_dump($value[fil]);
}
            

        }
  }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('recipe/create_recipe');
        } else {

            $recipe = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description')
            );

            $this->article_model->insert($recipe);
            redirect('recipe/recipe');
        }
    }

    public function edit($id) {

        $data['recipe'] = $this->recipe_model->get($id);
        $this->load->view('recipe/edit_recipe', $data);
    }

    public function update($id) {
        $recipe = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        $this->recipe_model->update($id, $recipe);
        redirect('recipe');
    }

    public function delete($id) {

        $this->recipe_model->delete($id);
        redirect('recipe');
    }

}
