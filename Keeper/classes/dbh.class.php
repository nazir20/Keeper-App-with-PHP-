<?php
/*
*
* creating the connectoin
*
*/
abstract class Dbh{
    /*
    */
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'googleKeeps';
    /*
    */
    protected function connect(){
        try {
            /*
         * $dsn -> data source name
         * it describes which type of database we're using 
         * it describes what sort of host we're using
         * it describes the database name
        */
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->dbName;
        /*
         * creating a new pdo connection
        */
        $pdo = new PDO($dsn, $this->username, $this->password);
        /*
         * How we want to pull out the data from database:
         * fetch_assoc || fetch_optx
        */
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
        return $pdo;
        } catch (PDOException $e) {
            print 'Error!: ' . $e->getMessage() . '<br>';
            die();
        }
    }

}