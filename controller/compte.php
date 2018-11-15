<?php

use jucarre\Blog\Model\LoginManager;
use jucarre\Blog\Model\PostManager;
use jucarre\Blog\Model\CommentManager;

// Chargement des classes
require_once('model/LoginManager.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class compteController extends TwigRenderer {

    function loginView()
    {
        $this->render('compte/loginView');
    }

    function connect($pseudo, $key)
    {
        $loginManager = new LoginManager;

        $login = $loginManager->getLogin($pseudo, $key);

        $isPasswordCorrect = password_verify($key, $login['pass']);

        if (!$login)
        {
            throw new Exception('Mauvais identifiant ou mot de passe !');
        }
        else
        {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['admin'] = 1;
                $_SESSION['id'] = $login['id'];
                $_SESSION['pseudo'] = $pseudo;
                header('Location: admin.php?action=admin');
                exit;
            } 
            
            throw new Exception('Mauvais identifiant ou mot de passe !');
        }

    }
}