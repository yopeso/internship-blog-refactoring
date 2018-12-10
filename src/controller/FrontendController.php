<?php
namespace App\Controller;

use App\Model\CommentManager;
use App\Model\FormManager;
use App\Model\LoginCompteManager;
use App\Model\PostManager;

class FrontendController extends TwigRenderer
{

    public function homeView()
    {
        $this->render('frontend/homeView');
    }

    public function loginView()
    {
        $this->render('frontend/loginView');
    }

    public function connect()
    {
        if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {

            throw new \Exception("Votre pseudo n'ai pas valide (alphanumérique)");

        }
        if (empty($_POST['password']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['password'])) {

            throw new \Exception("Votre password n'ai pas valide (alphanumérique)");

        }
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $loginManager = new LoginCompteManager;

        $user = $loginManager->getLogin($username);

        if (!$user) {
            throw new \Exception("Mauvais identifiant ou mot de passe !");
        } else {
            $isPasswordCorrect = password_verify($password, $user->password);

            if ($isPasswordCorrect != 1) {
                throw new \Exception("Mauvais identifiant ou mot de passe !");
            }

            if (session_status() == PHP_SESSION_NONE) {session_start();}

            $_SESSION['auth'] = $user;
            if ($_SESSION['auth']->status != 1) {header('Location: /admin');};
            header('Location: /user');
        }

    }

    public function register()
    {
        $registerManager = new LoginCompteManager;

        $registerManager->checkUsername();
        $registerManager->checkEmail();
        $registerManager->checkPassword();

        $registerManager->registerUser();

        header('Location: /login');

    }

    public function listPosts()
    {
        $articlesParPage = 5;
        $postsTotal = new PostManager();
        $articlesTotalesReq = $postsTotal->getPostsTotal();
        $articlesTotales = $articlesTotalesReq->rowcount();
        $pagesTotales = ceil($articlesTotales / $articlesParPage);
        $_SESSION['pagestotales'] = $pagesTotales;

        if (empty($_GET['page'])) {
            $_GET['page'] = 1;
        }
        if (!empty($_GET['page']) && ($_GET['page'] < 0 || $_GET['page'] > $pagesTotales)) {
            $_GET['page'] = 1;
        }

        $pageCourante = $_GET['page'];
        $depart = ($pageCourante - 1) * $articlesParPage;

        $postManager = new PostManager();
        $list_posts = $postManager->getPosts($depart, $articlesParPage);

        $this->render('frontend/listPostView', ['listposts' => $list_posts, 'pagestotales' => $pagesTotales, 'pagecourante' => $pageCourante]);

    }

    public function post($id)
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($id);
        $comments = $commentManager->getComments($id);

        if (isset($_SESSION['auth']->id)) {
            $user = [
                'id' => $_SESSION['auth']->id,
                'username' => $_SESSION['auth']->username,
                'status' => $_SESSION['auth']->status,
            ];
        } else { $user = ['id' => 0, 'username' => 0, 'status' => 0];}

        $this->render('frontend/postView', ['data_post' => $post, 'data_comments' => $comments, 'data_user' => $user]);

    }

    public function comment()
    {
        $commentId = "";

        if (isset($_GET['commentId']) && ($_GET['commentId'] != "")) {$commentId = $_GET['commentId'];}

        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($commentId);

        $this->render('frontend/editComment', ['data_comment' => $comment]);
    }

    public function erroView()
    {
        if (!isset($_SESSION['errorMessage'])) {$_SESSION['errorMessage'] = "Page not found.";}
        $errorMessage = $_SESSION['errorMessage'];
        $this->render('frontend/errorView', ['data_message' => $errorMessage]);
    }

    public function deco()
    {
        if (session_status() == PHP_SESSION_NONE) {session_start();}

        $_SESSION = array();
        session_destroy();
        
        header('Location: /login');
    }

    public function contactForm()
    {
        $nom = "";
        $prenom = "";
        $email = "";
        $message = "";

        if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Tous les champs ne sont pas remplis ou corrects.");
        }

        $nom = strip_tags(htmlspecialchars($_POST['nom']));
        $prenom = strip_tags(htmlspecialchars($_POST['prenom']));
        $email = strip_tags(htmlspecialchars($_POST['email']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        $contact = new FormManager();

        $contact->fromTraiment($nom, $prenom, $email, $message);

        header('Location: /');
    }
    public function cvjuju()
    {
        $file = 'public/pdf/CV_julien_carre.pdf';
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
        }
    }
}
