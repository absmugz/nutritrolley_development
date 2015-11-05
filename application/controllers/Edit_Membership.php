<?php

class Edit_Membership extends CI_Controller {

  public function __construct() {
        parent::__construct();
// Load form helper library
//$this->load->helper('form');
// Load form validation library
        //$this->load->helper('bootstrapped');
        $this->load->library('form_validation');
        $this->load->library('ion_auth');
        $this->load->model('User_profile_picture_model', 'thumbnailcrop');

// Load session library
//$this->load->library('session');
// Load database
        //$this->load->model('multistep_model');
    }

    //the function that loads the first form<br><br>
public function index() {
$user = $this->ion_auth->user()->row();

//var_dump($user);die();
        //print_r($user);
        //var_dump($user);die();
        $thumnailId = ($user->id);
        $this->data['user'] = $user;
        $thumbnail = $this->thumbnailcrop->get_by('user_id', $thumnailId);
        
        //var_dump($thumbnail);die();
        
      
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First name', 'trim');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim');
        $this->form_validation->set_rules('company', 'Company', 'trim');
        $this->form_validation->set_rules('phone', 'Phone', 'trim');
        //$this->thumbnailcrop->get(1);

        if ($this->form_validation->run() === FALSE) {

            //$this->load->view('admin/edit_profile', $this->data);
            $data['main_content'] = 'edit_membership/step_1';
            $data['user'] =$user;
            $data['thumbnail'] = $thumbnail;
        $this->load->view('includes/membership/template', $data);
            
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone')
            );
            if (strlen($this->input->post('password')) >= 6)
                $new_data['password'] = $this->input->post('password');
            $this->ion_auth->update($user->id, $data);


            redirect('home', 'refresh');
        }

        
    }

//in your form1 use form_open('author/submit_step1') to access the second function
    public function step_2() {
        //load your model here and a method to save these items
        //redirect to the same controller but the second method that loads the second form
   
  /*
  
        $this->form_validation->set_rules('first_name', 'First name', 'required|max_length[255]');
        //$this->form_validation->set_rules('surname', 'Surname', 'required|trim|max_length[255]');
        //$this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[255]');
        //$this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[255]');
        
        //$this->form_validation->set_rules('password_confirmation', 'Password confirmation', 'required|trim|max_length[255]');
        
        //$this->form_validation->set_rules('your_email', 'Your email', 'required|trim|valid_email|max_length[255]');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['main_content'] = 'membership/step_1';
            $this->load->view('includes/template', $data);
        } else {
      

            $data = array(
                //'profile_picture' => @$this->profile_picture,
                'first_name' => set_value('first_name'),
                'surname' => set_value('surname'),
                'username' => set_value('username'),
                'password' => set_value('password'),
                //'password_confirmation' => set_value('password_confirmation'),
                'your_email' => set_value('your_email')
            );

            $this->session->set_userdata($data);

            


            //var_dump($this->session->all_userdata());
            //loads the second form
            $data['main_content'] = 'membership/step_2';
            $this->load->view('includes/template', $data);
        }
       $data = array(
                //'profile_picture' => @$this->profile_picture,
                'first_name' => set_value('first_name'),
                'surname' => set_value('surname'),
                'username' => set_value('username'),
                'password' => set_value('password'),
                //'password_confirmation' => set_value('password_confirmation'),
                'your_email' => set_value('your_email')
            );

            $this->session->set_userdata($data);
*/
        
  $username = $this->input->post('username');
$password = $this->input->post('password');
$email = $this->input->post('your_email');
		$additional_data = array(
								'first_name' => $this->input->post('first_name'),
								'last_name' => $this->input->post('surname'),
								);
$group = array('2'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

//$this->ion_auth->register($username, $password, $email, $additional_data, $group);

$id = $this->ion_auth->register($username, $password, $email, $additional_data, $group);

if ($id)
{
    $messages = $this->ion_auth->messages();
    $user = $this->ion_auth->user($id)->row();
    
    $user_id = $user->id;
                      
    //echo $messages;
    //var_dump($messages);die();
    //var_dump($user_id);die();
    
//profile image crop code starts here
        
$error					= false;

$absolutedir			= dirname(dirname(dirname(__FILE__)));

 
$dir					= '/uploads/';
$serverdir				= $absolutedir.$dir;
$filename				= array();

$json				= json_decode($this->input->post('profile_pic_values'));
$tmp					= explode(',',$json->data);
$imgdata 				= base64_decode($tmp[1]);
	
$extensiontempvar = explode('.',$json->name);
$extension				= strtolower(end($extensiontempvar));
$fname					= substr($json->name,0,-(strlen($extension) + 1)).'.'.substr(sha1(time()),0,6).'.'.$extension;
	
	
$handle					= fopen($serverdir.$fname,'w');
fwrite($handle, $imgdata);
fclose($handle);
	
$filename[]				= $fname;


$this->load->model('User_profile_picture_model', 'thumbnailcrop');

$this->thumbnailcrop->insert(array(
    'profile_picture' => $fname,
    'user_id' => $user_id
));

//profile image crop ends here

    //var_dump($messages);
    //var_dump($user_id);die();
    //var_dump($id);
}
else
{
    $errors = $this->ion_auth->errors();
    //echo $errors;
     //var_dump($errors);die();
}



            


            //var_dump($this->session->all_userdata());
            //loads the second form
            $data['main_content'] = 'Edit_Membership/step_2';
            $this->load->view('includes/membership/template', $data); 
    }
    
    
    
   

//function that loads form2
    public function step_3() {
        /*
        $this->form_validation->set_rules('gender', 'gender', 'required|trim');
        //$this->form_validation->set_rules('year_of_birth', 'Year of birth', 'required|trim|is_numeric');
        $this->form_validation->set_rules('year_of_birth', 'Year of birth', 'required|trim');
        $this->form_validation->set_rules('current_weight', 'Current weight', 'required|trim|is_numeric');
        $this->form_validation->set_rules('height', 'Height', 'required|is_numeric');
        $this->form_validation->set_rules('my_body_fat', 'My body fat', 'required|trim|is_numeric');
        $this->form_validation->set_rules('how_active', 'How active', 'required|trim');
        //$this->form_validation->set_rules('activity', 'activity', 'required|trim');

        $this->form_validation->set_rules('top_activity_1', 'top_activity_1', 'required|trim');
        $this->form_validation->set_rules('top_activity_2', 'top_activity_2', 'required|trim');
        $this->form_validation->set_rules('top_activity_3', 'top_activity_3', 'required|trim');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['main_content'] = 'membership/step_2';
            $this->load->view('includes/template', $data);
        } else {

            $data = array(
                'gender' => set_value('gender'),
                'year_of_birth' => set_value('year_of_birth'),
                'current_weight' => set_value('current_weight'),
                'height' => set_value('height'),
                'my_body_fat' => set_value('my_body_fat'),
                'how_active' => set_value('how_active'),
                //'activity' => set_value('activity')
                'top_activity_1' => set_value('top_activity_1'),
                'top_activity_2' => set_value('top_activity_2'),
                'top_activity_3' => set_value('top_activity_3')
            );

            $this->session->set_userdata($data);



            var_dump($this->session->all_userdata());
            $data['main_content'] = 'membership/step_3';
            $this->load->view('includes/template', $data);
        }
        //loads the third form
         * 
         */




            //var_dump($this->session->all_userdata());
            $data['main_content'] = 'edit_membership/step_3';
            $this->load->view('includes/membership/template', $data);
    }

    public function step_4() {
/*
        $this->form_validation->set_rules('halaal', 'Halaal', 'max_length[255]');
        $this->form_validation->set_rules('kosher', 'Kosher', 'max_length[255]');
        $this->form_validation->set_rules('vegan', 'Vegan', 'max_length[255]');
        $this->form_validation->set_rules('vegetarian', 'Vegetarian', 'max_length[255]');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['main_content'] = 'membership/step_3';
            $this->load->view('includes/template', $data);
        } else {



            $data = array(
                'halaal' => @$this->input->post('halaal'),
                'kosher' => @$this->input->post('kosher'),
                'vegan' => @$this->input->post('vegan'),
                'vegetarian' => @$this->input->post('vegetarian')
            );

            $this->session->set_userdata($data);



            var_dump($this->session->all_userdata());
            $data['main_content'] = 'membership/step_4';
            $this->load->view('includes/template', $data);
        }
 * 
 */
        //loads the forth form
        
       $data['main_content'] = 'edit_membership/step_4';
            $this->load->view('includes/membership/template', $data);
    }

    public function step_5() {


        //loads the fifth form
        $data['main_content'] = 'edit_membership/step_5';
        $this->load->view('includes/membership/template', $data);
    }
    
    public function why_register() {


        //loads the fifth form
        //$data['main_content'] = 'membership/step_5';
        $this->load->view('why_register');
    }

}
