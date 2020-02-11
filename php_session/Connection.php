<?php

    class Connection{

        private $host = "localhost";
        private $user = "root";
        private $pass = "admin";
        private $db   = "users";

        public $conn;

        public function connect(){

            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

            return $this->conn;
        }

    }

   


?>