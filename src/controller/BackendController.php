<?php

namespace App\Controller;

use App\Model\CommentManager;
use App\Model\PostManager;

class BackendController extends TwigRenderer
{
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['auth'])) {
            $_SESSION['flash']['danger'] = 'Vous n\'avez pas le droit d\'accéder à cette page';
            header('Location: /login');
        }
        if (isset($_SESSION['auth'])) {
            if ($_SESSION['auth']->status != 1) {
                $_SESSION['flash']['danger'] = 'Vous n\'avez pas le droit d\'accéder à cette page';
                header('Location: /user');
            }
        }
    }

    public function interfaceAdmin()
    {
        $postPreview = new PostManager();
        $data_posts = $postPreview->getPostPreview();

        $commentsInvalid = new CommentManager();
        $data_comments = $commentsInvalid->getCommentsInvalid();

        $this->render('backend/adminView', ['data_posts' => $data_posts, 'data_comments' => $data_comments]);
        $_SESSION['flash'] = array();
    }

    public function commentValid()
    {
        $id = InterfaceController::tchek($_POST['id']);

        $CommentValid = new CommentManager();
        $affectedLines = $CommentValid->setCommentValid($id);

        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de valider le commentaire !';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été valider.';
        }
        header('Location: /admin');
    }

    public function viewAddPost()
    {
        $this->render('backend/addPostView');
    }

    public function addPostManager()
    {
        $title = InterfaceController::tchek($_POST['title']);

        $chapo = InterfaceController::tchek($_POST['chapo']);

        $content = InterfaceController::tchek($_POST['content']);

        $idUser = InterfaceController::tchek($_SESSION['auth']->id);

        $addpost = new PostManager();
        $affectedLines = $addpost->addpost($title, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible d\'ajouter cette article.';
        } else {
            $_SESSION['flash']['success'] = 'Votre article a bien été ajouter.';
        }
        header('Location: /admin');
    }

    public function post($id)
    {
        $postManager = new PostManager();
        $data_post = $postManager->getPost($id);

        $this->render('backend/editPostView', ['data_post' => $data_post]);
        $_SESSION['flash'] = array();
    }

    public function editPostManager($id)
    {
        $title = InterfaceController::tchek($_POST['title']);

        $chapo = InterfaceController::tchek($_POST['chapo']);

        $content = InterfaceController::tchek($_POST['content']);

        $idUser = InterfaceController::tchek($_SESSION['auth']->id);

        $postManager = new PostManager();
        $affectedLines = $postManager->setPost($id, $title, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de modifier cette article.';
        } else {
            $_SESSION['flash']['success'] = 'Votre article à bien été modifier.';
        }
        header('Location: /admin');
    }

    public function removePostManager()
    {
        $postId = InterfaceController::tchek($_POST['postId']);

        $postDelete = new PostManager();
        $affectedLines = $postDelete->removePost($postId);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de suprrimer cette article.';
        } else {
            $_SESSION['flash']['success'] = 'Votre article à bien été supprimer.';
        }
        header('Location: /admin');
    }

    public function comment($id)
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($id);

        $this->render('backend/editComment', ['data_comment' => $comment]);
        $_SESSION['flash'] = array();
    }

    public function editComment($id)
    {
        $author = InterfaceController::tchek($_POST['author']);

        $comment = InterfaceController::tchek($_POST['comment']);

        $commentManager = new CommentManager();

        $affectedLines = $commentManager->updateComment($id, $author, $comment);

        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de modifier le commentaire !';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire à bien été modifier.';
        }

        header('Location: /admin');
    }

    public function removeCommentManager($id)
    {
        $postDelete = new CommentManager();
        $affectedLines = $postDelete->removeComment($id);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de suprrimer ce commentaire.';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été supprimer.';
        }
        header('Location: /admin');
    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ['data_message' => $errorMessage]);
        $_SESSION['flash'] = array();
    }
}
