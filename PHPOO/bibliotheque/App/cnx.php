<?php
namespace App;

// Singleton
class Cnx
{
    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = '';
    const DB_NAME = 'bibliotheque';

    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {

        //echo '<p>Appel à getInstance()</p>';

        if(is_null(self::$instance)) {
            //echo '<p>instanciation de PDO</p>';
            self::$instance = new \PDO(
                'mysql:dbname=' . self::DB_NAME . ';host=' . self::HOST,
                self::USER,
                self::PASSWORD,
                [
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION

                ]
            );
        }
        
        return self::$instance;
    }
}