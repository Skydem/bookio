<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/user.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    private $userRepository;

    public function __construct() {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function handleLogin() {

        if($this->isPost()) {

            $email = $_POST['email'];
            $password = $_POST['password'];

//            if(!$email || !$password) {
//                return $this->render('login', ['messages' => ['Wypełnij najpierw wszystkie pola.']]);
//            }

            $user = $this->userRepository->getUser($email);

            if(!$user) {
                return $this->render('login', ['messages' => ['Nie znaleziono użytkownika']]);
            }

            if ($user->getEmail() !== $email) {
                return $this->render('login', ['messages' => ['Nie znaleziono użytkownika']]);
            }
            if($user->getPassword() !== $password) {
                return $this->render('login', ['messages'=>['Niepoprawne hasło!']]);
            }

            $_SESSION['email'] = $user->getEmail();
            $_SESSION['userId'] = $user->getId();
            $_SESSION['logged_in'] = true;
            Security::$user = $user;


            $url = "http://$_SERVER[HTTP_HOST]";
            if ($user->getRole() === 'admin') {
                header("Location: {$url}/adminpage");
            } else {
                header("Location: {$url}/main");
            }
        } elseif ($_SESSION['logged_in']) {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/main");
        }
        else {
            return $this->render('login');
        }

    }

    public function handleRegister() {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        if(strlen($email)>50) {
            return $this->render('register', ['messages'=>['Email jest zbyt długi.']]);
        }
        if(strlen($password)>100) {
            return $this->render('register', ['messages'=>['Hasło jest za długie']]);
        }
//        if(!preg_match('/\S+@\S+\.\S+/', $email)) {
//            return $this->render('register', ['messages'=>['Wprowadź prawidłowy e-mail']]);
//        }
//        if($confirmPass !== $password) {
//            return $this->render('register', ['messages'=>['Hasła nie zgadzają się ze sobą.']]);
//        }
        $login_validation = $this->userRepository->getUser($email);
        if($login_validation) {
            return $this->render('register', ['messages'=>['Użytkownik z podanym e-mailem już istnieje.']]);
        }

        $user = new User(
            $email, $password, $name, $surname
        );
        $this->userRepository->addUser($user);

        return $this->render('login');


    }

    public function logout() {
            session_unset();
            unset($_SESSION['email']);
            unset($_SESSION['userId']);
            unset($_SESSION['logged_in']);
            session_destroy();
            Security::$user=null;

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/index");
    }
}