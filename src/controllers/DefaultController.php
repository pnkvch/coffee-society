<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        header('Location: /login');
    }

    public function login()
    {
        $this->render('login');
    }

    public function feed()
    {
        $this->render('feed');
    }
}