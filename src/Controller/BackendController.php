<?php

namespace App\Controller;

use App\Service\TwigRenderer;
use App\Manager\CommentManager;
use App\Manager\PostManager;
use App\Validator\FunctionValidator;

/**
 * class BackendController le controller de la parti Admin.
 */
class BackendController
{
    private $renderer;
    private $verif;
    private $postManager;
    private $commentManager;

    public function __construct()
    {
        $this->verif = new FunctionValidator();
        $this->renderer = new TwigRenderer();
        $this->postManager = new PostManager();
        $this->commentManager = new CommentManager();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['auth'])) {
            $_SESSION['flash']['danger'] = 'Vous n\'avez pas le droit d\'accéder à cette page';
            header('Location: /login');
        }
        if (isset($_SESSION['auth'])) {
            if ($_SESSION['auth']->getStatus() != 1) {
                $_SESSION['flash']['danger'] = 'Vous n\'avez pas le droit d\'accéder à cette page';
                header('Location: /user');
            }
        }
    }

    public function interfaceAdmin()
    {
        if (isset($_SESSION['auth'])) {
            $data_posts = $this->postManager->getPostPreview();

            $data_comments = $this->commentManager->getCommentsInvalid();

            $this->renderer->render('backend/adminView', ['data_posts' => $data_posts, 'data_comments' => $data_comments]);
            $_SESSION['flash'] = array();
        }
    }

    public function commentValid()
    {
        $id = $this->verif->check($_POST['id']);

        $affectedLines = $this->commentManager->setCommentValid($id);

        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de valider le commentaire !';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été valider.';
        }
        header('Location: /admin');
    }

    public function viewAddPost()
    {
        $data_authors = $this->postManager->getAllAuthors();

        $this->renderer->render('backend/addPostView', ['data_authors' => $data_authors]);
    }

    public function addPostManager()
    {
        $title = $this->verif->check($_POST['title']);

        $chapo = $this->verif->checkForContent($_POST['chapo']);

        $idAuthor = $this->verif->check($_POST['id_author']);

        $content = $this->verif->checkForContent($_POST['content']);

        $idUser = $this->verif->check($_SESSION['auth']->getId());

        $affectedLines = $this->postManager->addpost($title, $idAuthor, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible d\'ajouter cette article.';
        } else {
            $_SESSION['flash']['success'] = 'Votre article a bien été ajouter.';
        }
        header('Location: /admin');
    }

    public function post($id)
    {
        $data_post = $this->postManager->getPost($id);
        $data_authors = $this->postManager->getAllAuthors();

        $this->renderer->render('backend/editPostView', ['data_post' => $data_post, 'data_authors' => $data_authors]);
        $_SESSION['flash'] = array();
    }

    public function editPostManager($id)
    {
        $title = $this->verif->check($_POST['title']);

        $chapo = $this->verif->checkForContent($_POST['chapo']);

        $idAuthor = $this->verif->check($_POST['id_author']);

        $content = $this->verif->checkForContent($_POST['content']);

        $idUser = $this->verif->check($_SESSION['auth']->getId());

        $affectedLines = $this->postManager->setPost($id, $title, $idAuthor, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de modifier cette article.';
        } else {
            $_SESSION['flash']['success'] = 'Votre article a bien été modifier.';
        }
        header('Location: /admin');
    }

    public function removePostManager()
    {
        $postId = $this->verif->check($_POST['postId']);

        $affectedLines = $this->postManager->removePost($postId);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de suprrimer cette article.';
        } else {
            $_SESSION['flash']['success'] = 'Votre article a bien été supprimer.';
        }
        header('Location: /admin');
    }

    public function comment($id)
    {
        $comment = $this->commentManager->getComment($id);

        $this->renderer->render('backend/editComment', ['data_comment' => $comment]);
        $_SESSION['flash'] = array();
    }

    public function editComment($id)
    {
        $author = $this->verif->check($_POST['author']);

        $comment = $this->verif->check($_POST['comment']);

        $affectedLines = $this->commentManager->updateComment($id, $author, $comment);

        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de modifier le commentaire !';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été modifier.';
        }

        header('Location: /admin');
    }

    public function removeCommentManager($id)
    {
        $affectedLines = $this->commentManager->removeComment($id);
        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible de suprrimer ce commentaire.';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été supprimer.';
        }
        header('Location: /admin');
    }

    public function erroView($errorMessage)
    {
        $this->renderer->render('frontend/errorView', ['data_message' => $errorMessage]);
        $_SESSION['flash'] = array();
    }
}
