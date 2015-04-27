<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('recipe_model');
    }

    public function index() {
        $data['recipes'] = $this->recipe_model->get_all();
        $this->load->view('recipe/recipe', $data);
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
