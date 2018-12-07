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

        if (session_status() == PHP_SESSION_NONE) {session_start();}

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

        $this->render('backend/adminView', ['data_posts' => $data_posts, 'data_comments' => $data_comments]);

    }

    public function commentsValid()
    {
        $id = "";

        if (isset($_POST['id']) && ($_POST['id'] != "")) {$id = $_POST['id'];}

        $CommentValid = new CommentManager();
        $affectedLines = $CommentValid->setCommentsValid($id);

        if ($affectedLines === false) {
            throw new \Exception("Impossible de valider le commentaire !");
        }

        header('Location: /admin');

    }

    public function viewAddPost()
    {
        $this->render('backend/addPostView');
    }

    public function addPostManager()
    {
        $title = "";
        $chapo = "";
        $content = "";
        $idUser = "";

        if (isset($_POST['title']) && ($_POST['title'] != "")) {$title = $_POST['title'];}

        if (isset($_POST['chapo']) && ($_POST['chapo'] != "")) {$chapo = $_POST['chapo'];}

        if (isset($_POST['content']) && ($_POST['content'] != "")) {$content = $_POST['content'];}

        if (isset($_SESSION['id']) && ($_SESSION['id'] != "")) {$idUser = $_SESSION['id'];}

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

        $this->render('backend/editPostView', ['data_post' => $data_post]);

    }

    public function editPostManager($id)
    {
        $title = "";
        $chapo = "";
        $content = "";
        $idUser = "";

        if (isset($_POST['title']) && ($_POST['title'] != "")) {$title = $_POST['title'];}

        if (isset($_POST['chapo']) && ($_POST['chapo'] != "")) {$chapo = $_POST['chapo'];}

        if (isset($_POST['content']) && ($_POST['content'] != "")) {$content = $_POST['content'];}

        if (isset($_SESSION['auth']->id) && ($_SESSION['auth']->id != "")) {$idUser = $_SESSION['auth']->id;}

        $postManager = new PostManager();
        $affectedLines = $postManager->setPost($id, $title, $chapo, $content, $idUser);
        if ($affectedLines === false) {
            throw new \Exception("Impossible de modifier cette article.");
        }

        header('Location: /admin');

    }

    public function removePostManager()
    {
        $postId = "";

        if (isset($_POST['postId']) && ($_POST['postId'] != "")) {$postId = $_POST['postId'];}

        $postDelete = new PostManager();
        $affectedLines = $postDelete->removePost($postId);
        if ($affectedLines === false) {
            throw new \Exception("Impossible de suprrimer cette article.");
        }
        header('Location: /admin');

    }
    public function comment($id)
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($id);

        $this->render('backend/editComment', ['data_comment' => $comment]);
    }

    public function editComment($id)
    {
        $author = $_POST['author'];
        $comment = $_POST['comment'];
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->updateComment($id, $author, $comment);

        if ($affectedLines === false) {
            throw new \Exception("Impossible de modifier le commentaire !");
        }

        header('Location: /admin');

    }

    public function removeCommentManager($id)
    {
        $postDelete = new CommentManager();
        $affectedLines = $postDelete->removeComment($id);
        if ($affectedLines === false) {
            throw new \Exception("Impossible de suprrimer ce commentaire.");
        }
        header('Location: /admin');

    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ['data_message' => $errorMessage]);
    }
}
