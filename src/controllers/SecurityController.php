<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    public function login() {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ["The user doesn't exist"]]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        setcookie('userId', $user->getId(), time() + (86400 * 30), "/");
        $_SESSION['userId'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/feed");
    }

    public function register() {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $userRepository = new UserRepository();

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        $user = $userRepository->getUser($email);

        if ($user) {
            return $this->render('register', ['messages' => ["This email is already used"]]);
        }

        $userRepository->addUser($name, $surname, $email, $password);
        $user = $userRepository->getUser($email);

        setcookie('userId', $user->getId(), time() + (86400 * 30), "/");
        $_SESSION['userId'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/feed");

    }

    public function logout() {
        unset($_SESSION['userId']);
        setcookie("userId", "", time() - 3600);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url");
    }

}