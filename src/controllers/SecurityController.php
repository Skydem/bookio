<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/user.php';

class SecurityController extends AppController {
    public function handleLogin() {
        $user = new User('test@test.pl','test123','John','Doe');

        if(!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['user not found']]);
        }
        if($user->getPassword() !== $password) {
            return $this->render('login', ['messages'=>['invalid password']]);
        }
//        return $this->render('main');

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/main");
    }
}