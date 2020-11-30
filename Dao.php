<?php
    class Dao {
        private $host = "us-cdbr-east-02.cleardb.com";
        private $db = "heroku_d300fb3e8def612";
        private $user = "b65ca9e515b5e7";
        private $pass = "e4d413dc";
        
        public function getConnection () {
            try {
                $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
                return $conn;
            } catch (Exception $e) {
                echo print_r($e, 1);
                exit;
            }
        }

        public function addUser($username, $password, $name){
            $conn = $this->getConnection();
            $saveQuery = "insert into user(username, password, name) values (:username, :password, :name);";
            $q = $conn->prepare($saveQuery);
            $q->bindParam(":username", $username);
            $q->bindParam(":password", $password);
            $q->bindParam(":name", $name);
            $q->execute();
        }

        public function login ($username, $password){
            $conn = $this->getConnection();
            $checkQuery = "select username from user where username = :username and password = :password;";
            $q = $conn->prepare($checkQuery);
            $q->bindParam(":username", $username);
            $q->bindParam(":password", $password);
            $q->execute();
            $login = $q->fetchAll(PDO::FETCH_OBJ);
            return $login;
        }

        public function checkUser ($username){
            $conn = $this->getConnection();
            $checkQuery = "select username from user where username = :username;";
            $q = $conn->prepare($checkQuery);
            $q->bindParam(":username", $username);
            $q->execute();
            $checkUser = $q->fetchAll(PDO::FETCH_OBJ);
            return $checkUser;
        }

        public function getLeagues(){
            $conn = $this->getConnection();
            return $conn->query("SELECT * FROM series_list");
        }
        
        public function getDrivers(){
            $conn = $this->getConnection();
            return $conn->query("SELECT * FROM drivers");
        }

        public function getTracks(){
            $conn = $this->getConnection();
            return $conn->query("SELECT * FROM tracks");
        }
    }

    ?>