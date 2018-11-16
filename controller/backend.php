<?php

use jucarre\Blog\Model\LoginManager;
use jucarre\Blog\Model\PostManager;
use jucarre\Blog\Model\CommentManager;

// Chargement des classes
require_once('model/LoginManager.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class backendController extends TwigRenderer {

    public function loginView()
    {
        $this->render('backend/loginView');
    }

    public function connectAdmin($username, $key)
    {
        $loginManager = new LoginManager;

        $login = $loginManager->getLogin($username, $key);

        $isPasswordCorrect = password_verify($key, $login['password']);

        if (!$login)
        {
            throw new Exception('Mauvais identifiant ou mot de passe !');
        }
        else
        {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['admin'] = 1;
                $_SESSION['id'] = $login['id'];
                $_SESSION['username'] = $username;
                header('Location: admin.php?action=admin');
            } else {
                throw new Exception('Mauvais identifiant ou mot de passe !');
            }
        }

    }

    public function interfaceAdmin()
    {
    
        $postPreview = new PostManager();
        $data_posts = $postPreview->getPostPreview();

        $commentsInvalid = new CommentManager();
        $data_comments = $commentsInvalid->getCommentsInvalid();

        $this->render('backend/adminView', ["data_posts" => $data_posts, "data_comments" => $data_comments]);

    }

    public function commentsValid($commentId)
    {
        $CommentValid = new CommentManager();
        $affectedLines = $CommentValid->setCommentsValid($commentId);

        if ($affectedLines === false) {
            throw new Exception('Impossible de valider le commentaire !');
        }

        header('Location: admin.php?action=admin');
        exit;

    }

    public function addPostManager($title, $chapo, $content, $idUser)
    {
        $addpost = new PostManager();
        $affectedLines = $addpost->addpost($title, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            throw new Exception("Impossible d'ajouter cette article.");
        }

        header('Location: admin.php?action=admin');
        exit;

    }

    public function post()
    {
        $postManager = new PostManager();
        $data_post = $postManager->getPost($_GET['id']);

        $this->render('backend/editPostView', ["data_post" => $data_post]);

    }

    public function editPostManager()
    {
        $postManager = new PostManager();
        $affectedLines = $postManager->setPost($_GET['postId'], $_POST['title'], $_POST['chapo'], $_POST['content'], $_SESSION['id']);
        if ($affectedLines === false) {
            throw new Exception("Impossible de modifier cette article.");
        }

        header('Location: admin.php?action=admin');
        exit;

    }

    public function removePostManager()
    {
        $postDelete = new PostManager();
        $affectedLines = $postDelete->removePost($_POST['postId']);
        if ($affectedLines === false) {
            throw new Exception("Impossible de suprrimer cette article.");
        }
        header('Location: admin.php?action=admin');
        exit;

    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ["data_message" => $errorMessage]);
    }
}