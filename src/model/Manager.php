<?php

namespace App\Model;

/**
 * Manager regroupe la connexion pdo.
 */
class Manager
{
    /**
     * Connexion à la base.
     *
     * @return $bdd
     */
    protected function dbConnect()
    {
        $bdd = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
        $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

        return $bdd;
    }
}
