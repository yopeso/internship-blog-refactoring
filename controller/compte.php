<?php

use jucarre\Blog\Model\LoginCompteManager;


// Chargement des classes
require_once('model/LoginCompteManager.php');


class compteController extends TwigRenderer {

    public function loginView()
    {
        $this->render('compte/loginView');
    }

    public function connect()
    {
        $loginManager = new LoginCompteManager;

        $user = $loginManager->getLogin($_POST['username'], $_POST['password']);

        $key=$_POST['password'];
        
        $isPasswordCorrect = password_verify($key, $user->password);

        if (!$user)
        {
            throw new Exception('Mauvais identifiant ou mot de passe !');
        }
        else
        {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['auth'] = $user;
                header('Location: ?index.php?action=compteView');
                exit;
            } 
            
            throw new Exception('Mauvais identifiant ou mot de passe !');
        }

    }

    public function interfaceCompte()
    {

        /**
         * $_SESSION['auth]
         *  $commentsInvalid = new CommentManager();
         *  $data_comments = $commentsInvalid->getCommentsInvalid();
         */

        $this->render('compte/compteView', ["data_comments" => $data_comments]);

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
            throw new Exception('Erreur, inscription impossible !');
        }
        header('Location: compte.php?action=loginView');

    }

    public function erroView($errorMessage)
    {
        $this->render('frontend/errorView', ["data_message" => $errorMessage]);
    }


}