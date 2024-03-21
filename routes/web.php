<?php
require_once 'app/Controller/UserController.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/pages/home.php';
        break;
    case '/users' :
        $controller = new UserController();
        $controller->index();
        break;
    // ajoutez ici d'autres routes
    default:
        require __DIR__ . '/views/pages/404.php';
        break;
}