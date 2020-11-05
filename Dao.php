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

        public function getUsers (){
            $conn = $this->getConnection();
            return $conn->query("select * from user", PDO::FETCH_ASSOC);
        }

        public function 
    }
   
$dao = new Dao();
$usertable = $dao->getUsers();
echo print_r($usertable, 1);
echo "done\n";