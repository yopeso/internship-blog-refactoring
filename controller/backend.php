<?php

use jucarre\Blog\Model\LoginManager;
use jucarre\Blog\Model\PostManager;
use jucarre\Blog\Model\CommentManager;

// Chargement des classes
require_once('model/LoginManager.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function connect($pseudo, $pass)
{
    $loginManager = new LoginManager;

    $login = $loginManager->getLogin($pseudo, $pass);

    $isPasswordCorrect = password_verify($pass, $login['pass']);

    if (!$login)
    {
        throw new Exception('Mauvais identifiant ou mot de passe !');
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $login['id'];
            $_SESSION['pseudo'] = $pseudo;
            header('Location: admin.php?action=admin');
        } else {
            throw new Exception('Mauvais identifiant ou mot de passe !');
        }
    }

}

function interfaceAdmin()
{
    /* 
    1 (OK 20%): Boucle qui affiche un aperçu de tout les articles ( postId, Titre du post, lien modifier et supprimer )
    2 (OK 100%): Boucle qui affiche tout les commentaires en attente de validation (option valider)
    3 (OK 20%%): Button créé un article
    */

    $postPreview = new PostManager();
    $posts = $postPreview->getPostPreview();

    $commentsInvalid = new CommentManager();
    $comments = $commentsInvalid->getCommentsInvalid();

    require('view/backend/adminView.php');

}

function commentsValid($commentId)
{
    $CommentValid = new CommentManager();
    $affectedLines = $CommentValid->setCommentsValid($commentId);

    if ($affectedLines === false) {
        throw new Exception('Impossible de valider le commentaire !');
    }

    header('Location: admin.php?action=admin');

}

function addPostManager($title, $chapo, $content, $idUser)
{
    $addpost = new PostManager();
    $affectedLines = $addpost->addpost($title, $chapo, $content, $idUser);
    if ($affectedLines === false) {
        throw new Exception("Impossible d'ajouter cette article.");
    }

    header('Location: admin.php?action=admin');

}

function post()
{
    $postManager = new PostManager();

    $post = $postManager->getPost($_GET['id']);

    require('view/backend/editPostView.php');
}

function editPostManager()
{
    $postManager = new PostManager();
    $affectedLines = $postManager->setPost($postId, $title, $chapo, $content, $idUser);
    if ($affectedLines === false) {
        throw new Exception("Impossible de modifier cette article.");
    }

    header('Location: admin.php?action=admin');

}

function removePostManager()
{
    $postDelete = new PostManager();
    $affectedLines = $postDelete->removePost($_POST['postId']);
    if ($affectedLines === false) {
        throw new Exception("Impossible de suprrimer cette article.");
    }
    header('Location: admin.php?action=admin');

}