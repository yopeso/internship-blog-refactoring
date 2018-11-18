<?php

namespace jucarre\Blog\Model;

require_once("model/Manager.php");

class LoginManager extends Manager
{
    public function getLogin($username, $key)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
        $req->execute(['username' => $username]);
        $user = $req->fetch();

        return $user;
        
    }

}