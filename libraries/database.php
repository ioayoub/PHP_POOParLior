<?php

class Database
{
    private static $instance = null;

    static function getPdo(): PDO
    {

        /*
    * Retourne une connexion en pattern singleton
    * @return PDO
    */

        if (self::$instance === null) {
            $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', 'Pa$$w0rd', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$instance;
    }
}
