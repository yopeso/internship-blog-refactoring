<?php

use jucarre\Blog\Model\PostManager;
use jucarre\Blog\Model\CommentManager;
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class frontendController extends TwigRenderer {

    function homeView() {
        
        $this->render('frontend/homeView');

    }

    function listPosts()
    {
        $postManager = new PostManager(); // Création d'un objet
        $list_posts = $postManager->getPosts(); // Appel d'une fonction de cet objet
        
        $this->render('frontend/listPostView', ["listposts" => $list_posts]);
    }

    function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        $this->render('frontend/postView', ["data_post" => $post, "data_comments" => $comments]);

    }

    function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        } 

        header('Location: index.php?action=post&id=' . $postId);

    }

    function comment()
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($_GET['commentId']);

        $this->render('frontend/editComment', ["data_comment" => $comment]);
    }

    function editComment($commentId, $author, $comment, $postId)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->updateComment($commentId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible de modifier le commentaire !');
        }

        header('Location: index.php?action=post&id=' . $postId);

    }

    function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ["data_message" => $errorMessage]);
    }
}