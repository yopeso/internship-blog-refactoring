<?php
namespace App\Controller;

use App\Model\CommentManager;
use Twig_Environment;
use Twig_Loader_Filesystem;

class CompteController
{

    private $twig;
    private $loader;

    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem('public/view');
        $this->twig = new Twig_Environment($this->loader, [
            'cache' => false, // __DIR__ . /tmp',
        ]);

        if (empty($_SESSION)) {$_SESSION['init'] = 1;}

        $this->twig->addGlobal('_session', $_SESSION);
        $this->twig->addGlobal('_post', $_POST);
        $this->twig->addGlobal('_get', $_GET);

        if (session_status() == PHP_SESSION_NONE) {

            session_start();

        }

        if (!isset($_SESSION['auth'])) {
            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
            header('Location: /login');

        }
    }

    protected function render($view, array $prams = [])
    {
        echo $this->twig->render($view . '.twig', $prams);
    }

    public function interfaceCompte()
    {
        
        if (isset($_SESSION['auth']->id) && ($_SESSION['auth']->id != "")) {
            
        $idUser = $_SESSION['auth']->id;
        $commentsUser = new CommentManager();
        $comments = $commentsUser->getUserComment($idUser);
        $this->render('compte/compteView', ["data_comments" => $comments]);
        }
    }

    public function comment($id)
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($id);

        $this->render('compte/editComment', ["data_comment" => $comment]);
    }

    public function addComment($id)
    {
        if (isset($_SESSION['auth']->id) && ($_SESSION['auth']->id != "")) {$idUser = $_SESSION['auth']->id;}

        if (isset($_POST['author']) && ($_POST['author'] != "")) {$author = $_POST['author'];}

        if (isset($_POST['comment']) && ($_POST['comment'] != "")) {$comment = $_POST['comment'];}

        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($id, $userId, $author, $comment);

        if ($affectedLines === false) {
            throw new \Exception('Impossible d\'ajouter le commentaire !');
        }

        header('Location: /user');

    }

    public function editComment($id)
    {
        if (isset($_POST['author']) && ($_POST['author'] != "")) {$author = $_POST['author'];}

        if (isset($_POST['comment']) && ($_POST['comment'] != "")) {$comment = $_POST['comment'];}
        
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->updateComment($id, $author, $comment);

        if ($affectedLines === false) {
            throw new \Exception('Impossible de modifier le commentaire !');
        }

        header('Location: /user');

    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ["data_message" => $errorMessage]);
    }

}
