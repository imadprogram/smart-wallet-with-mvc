<?php
namespace App\Core;

use PDOException;
use PDO;

class Database {
    private static $instance;
    private $connection;


    private function __construct() {
        try{
            $dsn = 'pgsql:host='.DB_HOST.';dbname='.DB_NAME;
            $this->connection = new PDO($dsn, DB_USER, DB_PASS);
        }catch(PDOException $e){
            die('there was a connection error' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}