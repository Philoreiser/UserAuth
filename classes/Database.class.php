<?php

/**
 * Database class
 */

class Database {

    private static $_db;
    
    private function __construct() {}  // disallow creating a new object of the class with new Database()

    private function __clone() {}  // disallow cloning the class

    /**
     * Get the instance of the PDO connection
     * 
     * @return DB - PDO connection
     */
    public static function getInstance() {

        if (static::$_db === NULL) {
            $host = Config::DB_HOST;
            $dbname = Config::DB_NAME;
            $charset = 'utf8';

            $dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";
            static::$_db = new PDO($dsn, Config::DB_USER, Config::DB_PASS);
            
            // Raise exception when a database exception occurs
            static::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $_db;
    }




 }