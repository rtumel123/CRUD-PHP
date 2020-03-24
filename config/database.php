<?php

    class Database {
        // specify database credentials
        private $host = "localhost";
        private $dbname = "php_oop_crud_level_1";
        private $username = "someuser1";
        private $password = "Hello123";
        public $conn;

        public function getConnection() {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            } catch(PDOException $exception) {
                echo "Connection Error: " . $exception->getMessage();
            }

            return $this->conn;
        }
    }

?>