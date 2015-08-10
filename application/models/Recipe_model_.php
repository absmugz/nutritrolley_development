<?php

class Recipe_model extends MY_Model
{

 //public $has_many = array( 'recipe_images' );
  public $has_many = array( 'recipe_images' => array( 'model' => 'Recipe_image_model','primary_key'=>'id') );


}
