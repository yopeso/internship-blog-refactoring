<?php
use jucarre\Blog\Model\LoginCompteManager;
require 'vendor/autoload.php';
require 'controller/TwigRenderer.php';
require 'controller/compte.php';

$_SESSION['init'] = 1;
$controller = new compteController();
$verifConnect = new LoginCompteManager();

$page = 'loginView';

if(isset($_GET['action'])) {
    $page = $_GET['action'];
}

switch ($page) {
    case 'loginView':
        $controller->loginView();
        break;

    case 'compteView':
        $verifConnect->logged_only();
        $controller->interfaceCompte();
        break;

    case 'comment':
        $controller->comment($_GET['commentId']);
        break;


    case 'editComment':
        $controller->editComment($_GET['commentId'], $_POST['author'], $_POST['comment']);
        break;
    
    case 'connect':
        $controller->connect();
        break;
    
    case 'register':
        $controller->register();
        break;
    

    default:
        header('HTTP/1.0 404 Not Found');
        $controller->erroView($errorMessage);
        break;

}