<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('feed', 'DefaultController');
Router::get('recipies', 'DefaultController');
Router::get('people', 'DefaultController');
Router::post('register', 'SecurityController');
Router::post('login', 'SecurityController');

Router::run($path);