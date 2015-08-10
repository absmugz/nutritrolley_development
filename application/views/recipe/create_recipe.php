<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo validation_errors(); 

echo form_open('recipe/create');?>

 <input type="input" name="title" />
  <input type="input" name="description" />
  <input type="file" name="thumbnail" size="20" />

<?php echo form_submit('', 'Create');

echo form_close(); 