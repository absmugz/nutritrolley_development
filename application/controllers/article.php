<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('article_model');
    }

    public function index() {
        $data['article'] = $this->article_model->get_all();
        $this->load->view('article', $data);
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('body', 'body', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('create_article');
        } else {

            $article = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body')
            );

            $this->article_model->insert($article);
            redirect('article');
        }
    }

    public function edit($id) {

        $data['article'] = $this->article_model->get($id);
        $this->load->view('edit_article', $data);
    }

    public function update($id) {
        $article = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );
        $this->article_model->update($id, $article);
        redirect('article');
    }

    public function delete($id) {

        $this->article_model->delete($id);
        redirect('article');
    }

}
