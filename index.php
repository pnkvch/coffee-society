<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('feed', 'DefaultController');
Router::get('recipies', 'ArticleController');
Router::get('people', 'UserController');
Router::get('explore', 'DefaultController');
Router::get('logout', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path);