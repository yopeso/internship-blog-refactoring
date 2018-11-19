<?php
session_start();
require 'vendor/autoload.php';
require 'controller/TwigRenderer.php';
require 'controller/frontend.php';

$_SESSION['init'] = 1;
$controller = new frontendController();

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page']) {
                $_GET['page'] = intval($_GET['page']);
                $pageCourante = $_GET['page'];
            } else {
                $pageCourante = 1;
            }
            $controller->listPosts($pageCourante);
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $controller->post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $controller->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'comment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                $controller->comment();
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'editComment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $controller->editComment($_GET['commentId'], $_POST['author'], $_POST['comment'], $_GET['postId']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !(commentaire)');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'contactform') {
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                $controller->contactForm($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']);
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        $controller->homeView();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
    $controller->erroView($errorMessage);
}
