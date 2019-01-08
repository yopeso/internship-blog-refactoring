<?php

namespace App\Service;

abstract class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=blog;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = 'root';

    private $connection;

    private function checkConnection()
    {
        if ($this->connection === null) {
            return $this->getConnection();
        }

        return $this->connection;
    }

    /**
     * Connexion à la base, ancienne méthode.
     *
     * @return object $bdd
     */
    protected function dbConnect()
    {
        $bdd = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
        $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        //$bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

        return $bdd;
    }

    private function getConnection()
    {
        try {
            $this->connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $this->connection;
        } catch (\Exception $errorConnection) {
            die('Erreur de connection :'.$errorConnection->getMessage());
        }
    }

    protected function sql($sql, $parameters = null, $bind = null)
    {
        if ($parameters || $bind) {
            $result = $this->getConnection()->prepare($sql);
            if ($bind) {
                $n = count($bind);
                foreach ($bind as $n) {
                    $bind_end = str_replace('"', '', $bind);
                    $result->bindParam($bind_end);
                    ++$n;
                }
                $result->execute();
            } else {
                $result->execute($parameters);
            }

            return $result;
        } else {
            $result = $this->getConnection()->query($sql);

            return $result;
        }
    }
}
