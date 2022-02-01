<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/ArticleController.php';
require_once 'src/controllers/UserController.php';

class Router {

  public static $routes;

  public static function get($url, $controller) {
    self::$routes[$url] = $controller;
  }

  public static function post($url, $controller) {
    self::$routes[$url] = $controller;
  }

  public static function run($url) {
    $params = explode("/", $url);
    $action = $params[0];
    if (!array_key_exists($action, self::$routes)) {
      die("Wrong url!");
    }

    $controller = self::$routes[$action];
    $object = new $controller;
    $action = $action ?: 'index';

    if ($action == 'recipie') {
      $payload = $params[1];
      $object->$action(intval($payload));
    } else {
      $object->$action();
    }
  }
}