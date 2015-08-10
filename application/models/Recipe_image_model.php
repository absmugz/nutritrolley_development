<?php

class Recipe_image_model extends MY_Model
{
public $_table = 'recipe_images';
public $primary_key = 'id';


//public $belongs_to = array('recipes');
public $belongs_to = array( 'recipes' => array( 'model' => 'recipe_model','primary_key'=>'id') );
//public $belongs_to = array('recipes');
//public $belongs_to = array( 'recipes' => array( 'model' => 'recipe_model') );
//public $belongs_to = array( 'recipes' => array( 'model' => 'recipe_model','primary_key'=>'id') );

}
