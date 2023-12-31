<?php
require_once './autoload.php';
use App\Controller\UtilisateurController;
$userController = new UtilisateurController();
//Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/mvc/':
            include './home.php';
            break;
        case '/mvc/useradd':
            $userController->addUser();
            break;
        default:
            include './error.php';
            break;
    }