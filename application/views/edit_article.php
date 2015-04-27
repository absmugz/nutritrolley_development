<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo form_open('article/update/' . $article->id);
echo form_input('title', $article->title);
echo form_input('body', $article->body);
echo form_submit('', 'Update');
echo form_close(); 

