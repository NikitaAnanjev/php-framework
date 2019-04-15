<?php

/**
 * PDO DATABASE Class
 * Connect to Database
 * Create prepared statements
 * bind values return rows and results
 */
class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $stmt;
    private  $error;
    public function __construct()
    {

//    SET DSN


        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,


        );

    }


}