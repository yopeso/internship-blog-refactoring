<?php

namespace App\Controller;

use App\Model\CommentManager;

/**
 * CompteController est le controller de l'espace utilisateur.
 */
class CompteController extends TwigRenderer
{
    public function __construct()
    {
        if (empty($_SESSION)) {
            $_SESSION['init'] = 1;
        }

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['auth'])) {
            $_SESSION['flash']['danger'] = 'Vous n\'avez pas le droit d\'accéder à cette page';
            header('Location: /login');
        }
    }

    public function interfaceCompte()
    {
        $userId = InterfaceController::tchek($_SESSION['auth']->id);

        $commentsUser = new CommentManager();
        $comments = $commentsUser->getUserComment($userId);
        $this->render('compte/compteView', ['data_comments' => $comments]);
        $_SESSION['flash'] = array();
    }

    public function comment($id)
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($id);

        if ($_SESSION['auth']->status != 1 && $_SESSION['auth']->id != $comment->id_user) {
            $_SESSION['flash']['danger'] = 'Vous n\'avez pas les droits pour modifier ce commentaire';
            header('Location: /user');
        } else {
            $this->render('compte/editComment', ['data_comment' => $comment]);
            $_SESSION['flash'] = array();
        }
    }

    public function addComment($id)
    {
        $author = InterfaceController::tchek($_POST['author']);

        $comment = InterfaceController::tchek($_POST['comment']);

        $idUser = InterfaceController::tchek($_SESSION['auth']->id);

        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($id, $userId, $author, $comment);

        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible d\'ajouter le commentaire !';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été ajouter.';
        }
        header('Location: /user');
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
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été modifier.';
        }
        header('Location: /user');
    }

    public function removeCommentManager($id)
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($id);

        if ($_SESSION['auth']->status != 1 && $_SESSION['auth']->id != $comment->id_user) {
            $_SESSION['flash']['danger'] = 'Vous n\'avez pas les droits pour supprimer ce commentaire';
        } else {
            $affectedLines = $commentManager->removeComment($id);

            if ($affectedLines === false) {
                $_SESSION['flash']['danger'] = 'Impossible de suprrimer ce commentaire.';
            } else {
                $_SESSION['flash']['success'] = 'Votre commentaire a bien été supprimer.';
            }
        }
        header('Location: /user');
    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ['data_message' => $errorMessage]);
        $_SESSION['flash'] = array();
    }
}
