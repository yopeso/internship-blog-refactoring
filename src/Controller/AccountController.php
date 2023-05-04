<?php

namespace App\Controller;

use App\Manager\SessionManager;
use App\Service\TwigRenderer;
use App\Manager\CommentManager;
use App\Validator\FunctionValidator;

/**
 * AccountController est le controller de l'espace utilisateur.
 */
class AccountController
{
    private $renderer;
    private $verif;
    private $commentManager;
    private $sessionManager;

    public function __construct(CommentManager $commentManager, SessionManager $sessionManager)
    {
        $this->verif = new FunctionValidator();
        $this->renderer = new TwigRenderer();
        $this->commentManager = $commentManager;
        $this->sessionManager = $sessionManager;

        $this->sessionManager->initSession();
    }

    public function interfaceAccount()
    {
        if (isset($_SESSION['auth'])) {
            $userId = $this->verif->check($_SESSION['auth']->getId());

            $comments = $this->commentManager->getUserComment($userId);
            $this->renderer->render('account/accountView', ['data_comments' => $comments]);
            $_SESSION['flash'] = array();
        }
    }

    public function comment($id)
    {
        $comment = $this->commentManager->getComment($id);
        $authenticatedUser = $this->sessionManager->getAuthenticatedUser();

        if ($authenticatedUser->getStatus() != 1 && $authenticatedUser->getId() != $comment->getIdUser()) {
            $this->sessionManager->addFlashMessage(
                'Vous n\'avez pas les droits pour modifier ce commentaire',
                'danger'
            );
            $this->sessionManager->redirectTo('/user');
        } else {
            $this->renderer->render('account/editComment', ['data_comment' => $comment]);
            $_SESSION['flash'] = array();
        }
    }

    public function addComment($id)
    {
        $author = $this->verif->check($_POST['author']);

        $comment = $this->verif->check($_POST['comment']);

        $idUser = $this->verif->check($_SESSION['auth']->getId());

        $affectedLines = $this->commentManager->postComment($id, $idUser, $author, $comment);

        if ($affectedLines === false) {
            $_SESSION['flash']['danger'] = 'Impossible d\'ajouter le commentaire !';
        } else {
            $_SESSION['flash']['success'] = 'Votre commentaire a bien été ajouter.';
        }
        header('Location: /user');
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
        header('Location: /user');
    }

    public function removeCommentManager($id)
    {
        $comment = $this->commentManager->getComment($id);

        if ($_SESSION['auth']->getStatus() != 1 && $_SESSION['auth']->getId() != $comment->getIdUser()) {
            $_SESSION['flash']['danger'] = 'Vous n\'avez pas les droits pour supprimer ce commentaire';
        } else {
            $affectedLines = $this->commentManager->removeComment($id);

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
        $this->renderer->render('frontend/errorView', ['data_message' => $errorMessage]);
        $_SESSION['flash'] = array();
    }
}
