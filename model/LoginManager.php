<?php

namespace jucarre\Blog\Model;

require_once("model/Manager.php");

class LoginManager extends ManagerFetchModeOff
{
    public function getLogin($username, $key)
    {
        $bdd= $this->dbConnect();
        $req = $bdd->prepare('SELECT id, password FROM users WHERE username = :username');
        $req->execute(array(
            'username' => $username));
        $login = $req->fetch();

        return $login;
        
    }

}