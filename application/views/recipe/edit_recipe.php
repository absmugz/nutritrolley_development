<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo form_open('recipe/update/' . $recipe->id);
echo form_input('title', $recipe->title);
echo form_input('description', $recipe->description);
echo form_submit('', 'Update');
echo form_close(); 

