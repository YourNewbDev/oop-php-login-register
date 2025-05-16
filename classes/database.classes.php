<?php 

class DatabaseConnection {
    private $host = "localhost";
    private $db_name = "dbuser";
    private $user = "root";
    private $password = "";
    private $dbh;

    protected function connect() {
        try {

            $this->dbh = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->user, $this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->dbh;

        } catch (PDOException $err) {
            
            echo "Error :" . $err->getMessage();
            die();
        }
    }
}