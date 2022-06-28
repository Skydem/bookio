<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('main', 'DefaultController');
Routing::get('add', 'DefaultController');

Routing::post('handleLogin', 'SecurityController');

Routing::run($path);