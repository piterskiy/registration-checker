<?php
/**
 * Created by PhpStorm.
 * User: onur
 * Date: 06/06/2017
 * Time: 22:27
 */

namespace Registration;


class Database
{
    public static function getPdo()
    {
        $pdo = new \PDO("mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_DATABASE'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}