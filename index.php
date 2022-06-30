<?php
require 'Routing.php';
require_once __DIR__.'/Security.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('index', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('main', 'BookController');
Routing::get('add', 'DefaultController');
Routing::get('register', 'DefaultController');


Routing::post('logout', 'SecurityController');
Routing::post('handleRegister', 'SecurityController');
Routing::post('handleLogin', 'SecurityController');
Routing::post('addBook', 'BookController');
Routing::post('search', 'BookController');
Routing::post('book', 'BookController');

Security::$privs = [
    'DefaultController' => [
        'index'=>null,
        'login'=>null,
        'register'=>null,
        'add'=>['user','admin']
    ],
    'BookController' => [
        'main' =>['user','admin'],
        'addBook'=>['user','admin'],
        'search'=>['user','admin'],
        'book'=>['user','admin']
    ],
    'SecurityController'=> [
        'login'=>null,
        'register'=>null,
        'logout'=>null
    ]
];

new Security();

Routing::run($path);