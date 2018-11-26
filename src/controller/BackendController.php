<?php
namespace App\Controller;

use App\Model\CommentManager;
use App\Model\PostManager;
use Twig_Environment;
use Twig_Loader_Filesystem;

class BackendController
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

        if ($_SESSION['auth']->status != 1) {
            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
            header('Location: /user');
        }
    }

    protected function render($view, array $prams = [])
    {
        echo $this->twig->render($view . '.twig', $prams);
    }

    public function interfaceAdmin()
    {

        $postPreview = new PostManager();
        $data_posts = $postPreview->getPostPreview();

        $commentsInvalid = new CommentManager();
        $data_comments = $commentsInvalid->getCommentsInvalid();

        $this->render('backend/adminView', ["data_posts" => $data_posts, "data_comments" => $data_comments]);

    }

    public function commentsValid()
    {
        $id = $_POST['id'];
        $CommentValid = new CommentManager();
        $affectedLines = $CommentValid->setCommentsValid($id);

        if ($affectedLines === false) {
            throw new \Exception('Impossible de valider le commentaire !');
        }

        header('Location: /admin');

    }

    public function viewAddPost()
    {
        $this->render('backend/addPostView');
    }

    public function addPostManager()
    {
        $title = $_POST['title'];
        $chapo = $_POST['chapo'];
        $content = $_POST['content'];
        $idUser = $_SESSION['id'];

        $addpost = new PostManager();
        $affectedLines = $addpost->addpost($title, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            throw new \Exception("Impossible d'ajouter cette article.");
        }

        header('Location: /admin');

    }

    public function post($id)
    {
        $postManager = new PostManager();
        $data_post = $postManager->getPost($id);

        $this->render('backend/editPostView', ["data_post" => $data_post]);

    }

    public function editPostManager($id)
    {
        $postManager = new PostManager();
        $affectedLines = $postManager->setPost($id, $_POST['title'], $_POST['chapo'], $_POST['content'], $_SESSION['auth']->id);
        if ($affectedLines === false) {
            throw new \Exception("Impossible de modifier cette article.");
        }

        header('Location: /admin');

    }

    public function removePostManager()
    {
        $postDelete = new PostManager();
        $affectedLines = $postDelete->removePost($_POST['postId']);
        if ($affectedLines === false) {
            throw new \Exception("Impossible de suprrimer cette article.");
        }
        header('Location: /admin');

    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ["data_message" => $errorMessage]);
    }
}
