<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        if (isset($_SESSION['userId'])) {
            header('Location: /feed');
        } else {
            header('Location: /login');
        }
    }

    public function feed()
    {
        $this->render('feed');
    }

    public function explore()
    {
        $this->render('explore');
    }
}