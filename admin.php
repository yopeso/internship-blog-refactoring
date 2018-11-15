<?php
session_start();
require 'vendor/autoload.php';
require 'controller/TwigRenderer.php';
require 'controller/backend.php';

$_SESSION['init'] = 1;
$controller = new backendController();

try { // On essaie de faire des choses
    if ($_GET['action'] == 'admin') {
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
            $controller->interfaceAdmin();
        } else {
            $controller->loginView();
        }
    } 
    elseif ($_GET['action'] == 'login') {
        if (!empty($_POST['pseudo']) && !empty($_POST['pass'])) {
            $controller->connect($_POST['pseudo'], $_POST['pass']);
        } else {
            throw new Exception('Tous les champs ne sont pas remplis !');
        }
    }
    elseif ($_GET['action'] == 'commentValid'){
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
            if (!empty($_POST['id'])) {
                $controller->commentsValid($_POST['id']);
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        else{
            $controller->loginView();
        }
    }
    elseif ($_GET['action'] == 'post'){
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
            require('view/backend/addPostView.php');
        } else{
            $controller->loginView();
        }
    }
    elseif ($_GET['action'] == 'addPost'){
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['chapo'])) {
                $controller->addPostManager($_POST['title'], $_POST['chapo'], $_POST['content'], $_SESSION['id']);
            } else {
                // Autre exception
                throw new Exception('Tous les champs ne sont pas remplis !(commentaire)');
            }
        } else {
            $controller->loginView();
        }
    }
    elseif ($_GET['action'] == 'previewPost'){
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
            if (!empty($_GET['id'])) {
                $controller->post($_GET['id']);
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } else {
            $controller->loginView();
        }
    }
    elseif ($_GET['action'] == 'editPost'){
        if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
            if (!empty($_GET['postId']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['chapo'])) {
                $controller->editPostManager($_GET['postId'], $_POST['title'], $_POST['chapo'], $_POST['content'], $_SESSION['id']);
            } else {
                // Autre exception
                throw new Exception('Tous les champs ne sont pas remplis !(commentaire)');
            }
        } else {
            $controller->loginView();
        }
    }
    elseif (($_GET['action'] == 'delete') && isset($_SESSION['id']) && isset($_SESSION['pseudo']) && ($_POST['postId'])){
        $controller->removePostManager($_POST['postId']); 
    }
    
    else {
        $controller->loginView();
    }

}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
    $controller->erroView($errorMessage);
}
    