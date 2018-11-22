<?php

namespace App\Model;

class LoginCompteManager extends Manager
{
    public function getLogin($username, $key)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
        $req->execute(['username' => $username]);
        $login = $req->fetch();

        return $login;
       
    }


    public function checkUsername()
    {
        if(empty($_POST['username']) or !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){

            return $errors['username'] = "Votre pseudo n'ai pas valide (alphanumérique)";

        } else {

            $bdd = $this->dbConnect();
            $req = $bdd->prepare('SELECT id FROM users WHERE username = ?');
            $req->execute([$_POST['username']]);
            $user = $req->fetch();
        
            if($user){

                return $errors['username'] = 'Ce pseudo est déjà pris';

            }
            
        }
    }

    public function checkEmail()
    {
        if(empty($_POST['email']) or !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            return $errors['email'] = "votre email n'est pas valide";

        } else {

            $bdd = $this->dbConnect();
            $req = $bdd->prepare('SELECT id FROM users WHERE email = ?');
            $req->execute([$_POST['email']]);
            $user = $req->fetch();
            
            if($user){

                return $errors['email'] = 'Cet email est déjà utilisé pour un autre compte.';
                
            }
            
        }
    }

    public function checkPassword()
    {
        if(empty($_POST['password']) & $_POST['password'] != $_POST['password_confirm']){

            return $errors['password'] = "vous devez rentrer un mot de passe valide";

        }
    }

    public function registerUser()
    {   
        $satuts = 2;
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("INSERT INTO users SET username = ?, password = ?, email = ?, status = ?");
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $req->execute([$_POST['username'], $password, $_POST['email'], $satuts]);

        $_SESSION['flash']['success'] = 'Votre compte a bien été créé, vous pouvez vous connecter.';

    }

}