<?php


//Default
App::get('/');
App::get('/default/index', false);
App::get('/default/detail/([\d]+)', true);
App::get('/default/login', false);

App::get('/user/index', false);



?>