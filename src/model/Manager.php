<?php
namespace App\Model;

class Manager
{
    protected function dbConnect()
    {
        $bdd = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
        $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        return $bdd;
    }
}
