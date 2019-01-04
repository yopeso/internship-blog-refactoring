<?php

namespace App\Model;

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

    protected function sql($sql, $parameters = null)
    {
        if ($parameters) {
            $result = $this->getConnection()->prepare($sql);
            $n = count($parameters);
            foreach ($parameters as $n) {
                $tab = array('[' => '', ']' => '');
                $param = str_replace_assoce($tab, $parameters);
                $result->bindParam($param);
                ++$n;
            }
            $result->execute();

            return $result;
        } else {
            $result = $this->getConnection()->query($sql);

            return $result;
        }
    }
}
