<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo validation_errors(); 

echo form_open('article/create');?>

 <input type="input" name="title" />
  <input type="input" name="body" />

<?php echo form_submit('', 'Create');

echo form_close(); 