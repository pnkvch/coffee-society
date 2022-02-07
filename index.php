<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);
$method = trim($_SERVER['REQUEST_URI'], '/');

Router::get('', 'DefaultController');
Router::get('feed', 'ArticleController');
Router::get('recipies', 'ArticleController');
Router::get('people', 'UserController');
Router::get('recipie', 'ArticleController');
Router::get('logout', 'SecurityController');
Router::get('explore', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path, $method);