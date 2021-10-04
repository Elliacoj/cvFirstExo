<?php

namespace App\Model\Classes;

use PDO;
use PDOException;

class DB {
    private string $dbName = "exoPhp";
    private string $host = "localhost";
    private string $userName = "root";
    private string $password = "";
    private static ?PDO $dbInstance = null;

    /**
     * DB constructor.
     */
    public function __construct() {
        try {
            self::$dbInstance = new PDO("mysql:dbName=$this->dbName;host=$this->host;chartset=utf8",$this->userName, $this->password);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Instance the session
     * @return PDO
     */
    public static function getInstance():PDO {
        if(self::$dbInstance = null) {
            new self();
        }
        return self::$dbInstance;
    }

    /**
     * For not clone this class
     */
    public function __clone() {}
}