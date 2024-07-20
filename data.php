<?php

require_once 'config.php';
class db
{
    static  public $pdo;

    static function connectY()
    {
        try {
            self::$pdo=  new PDO( "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                DB_USER,
                DB_PASS);
        }catch (PDOException $e){
            return $e->getMessage();
        }
        return self::$pdo;
    }

    static function papaerone($sql)
    {
        return self::connectY()->prepare($sql);
    }
}