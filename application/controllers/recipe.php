<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('recipes_model');
    }

    public function index() {
       
      //$user = $this->recipe_model->with('recipe_images')->get(1);
      //$user = $this->recipe_model->with('recipe_images')->get_all();
      //print_r($user);
      //die();
                 
        $data['recipes'] = $this->recipes_model->get_all();
        
        $data['main_content'] = 'recipe/recipe';
        
        $this->load->view('includes/dashboard/template', $data);
        
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
