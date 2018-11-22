<?php
namespace App\Controller;

use App\Model\PostManager;
use App\Model\CommentManager;
use App\Model\FormManager;
use App\Model\LoginCompteManager;

class FrontendController extends TwigRenderer {

    public function homeView() {
        
        $this->render('frontend/homeView');

    }

    public function loginView()
    {
        $this->render('frontend/loginView');
    }


    public function connect()
    {
        $loginManager = new LoginCompteManager;

        $user = $loginManager->getLogin($_POST['username'], $_POST['password']);

        if (!$user)
        {
            throw new ControllerException('Mauvais identifiant ou mot de passe !');
        }
        else
        {   
            $isPasswordCorrect = password_verify($_POST['password'], $user->password);
            
            if($isPasswordCorrect){
                session_start();
                $_SESSION['auth'] = $user;
                if($_SESSION['auth']->status != 1){header('Location: /blog/admin');};
                header('Location: /blog/user');
            } else {
                throw new ControllerException('Mauvais identifiant ou mot de passe !');
            }
        }

    }

    public function register()
    {
        $registerManager = new LoginCompteManager;

        $resultat = $registerManager->checkUsername();
        if(empty($resultat)){$resultat = $registerManager->checkEmail();}
        if(empty($resultat)){$resultat = $registerManager->checkPassword();}
        if(!empty($resultat)){
            return $resultat;
        }
        $affectedLines = $registerManager->registerUser();

        if ($affectedLines === false) {
            throw new ControllerException('Erreur, inscription impossible !');
        }
        header('Location: /blog/login');

    }

    public function listPosts()
    {   
        $articlesParPage = 5;
        $postsTotal = new PostManager();
        $articlesTotalesReq = $postsTotal->getPostsTotal();
        $articlesTotales = $articlesTotalesReq->rowcount();
        $pagesTotales = ceil($articlesTotales/$articlesParPage);
        $_SESSION['pagestotales'] = $pagesTotales;

        if(empty($_GET['page']))
        {
            $_GET['page']=1;
        }
        if(!empty($_GET['page']) AND $_GET['page'] < 0 OR $_GET['page'] > $pagesTotales)
        {
            $_GET['page']=1;
        }
        
        $pageCourante = $_GET['page'];
        $depart = ($pageCourante-1)*$articlesParPage;

        $postManager = new PostManager(); // Création d'un objet
        $list_posts = $postManager->getPosts($depart, $articlesParPage); // Appel d'une fonction de cet objet
        
        $this->render('frontend/listPostView', ["listposts" => $list_posts, "pagestotales"=>$pagesTotales, "pagecourante"=>$pageCourante]);

    }

    public function post($id)
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($id);
        $comments = $commentManager->getComments($id);

        if(isset($_SESSION['auth']->id)){ $idUser = $_SESSION['auth']->id;} else { $idUser = 0;}   

        $this->render('frontend/postView', ["data_post" => $post, "data_comments" => $comments, "idUser" => $idUser]);

        
    }

    public function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new ControllerException('Impossible d\'ajouter le commentaire !');
        } 

        header('Location: ?action=post&id=' . $postId);
        exit;

    }

    public function comment()
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($_GET['commentId']);

        $this->render('frontend/editComment', ["data_comment" => $comment]);
    }

    public function editComment($commentId, $author, $comment, $postId)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->updateComment($commentId, $author, $comment);

        if ($affectedLines === false) {
            throw new ControllerException('Impossible de modifier le commentaire !');
        }

        header('Location: ?action=post&id=' . $postId);
        exit;

    }

    public function erroView()
    {   
        if(!isset($_SESSION['errorMessage'])){$_SESSION['errorMessage']= "Page not found.";}
        $errorMessage = $_SESSION['errorMessage'];
        $this->render('frontend/errorView', ["data_message" => $errorMessage]);
    }

    public function deco()
    {
        session_start();

        // Suppression des variables de session et de la session
        $_SESSION = array();
        session_destroy();

        // Suppression des cookies de connexion automatique
        setcookie('login', '');
        setcookie('pass_hache', '');
        header('Location: /blog/login');
    }

    public function contactForm($nom, $prenom, $email, $message)
    {
        $contact = new FormManager();

        $reponse = $contact->fromTraiment($nom, $prenom, $email, $message);

        header('Location: /blog/');
    }
    public function cvjuju()
    {
        $file = 'public/pdf/CV_julien_carre.pdf';
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }


}