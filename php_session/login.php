<?php

    class Database{
        public $conn;
        public $error;

        public function __construct(){

            $this->conn = mysqli_connect("localhost","root","admin","users");

            if(!$this->conn){
                echo "Database connection error" . mysqli_error($this->conn) ;
            }
          
        } 

        public function validate($field){
            
            $count = 0;
            foreach($field as $key => $value){

                 if(empty($value)){
                        $count++;
                        $this->error .= "<p>" . $key ." is required" . "</p>";
                 }
            }
            if($count == 0){
                return true;

            }
        }

        public function login($table_name,$table_data){

            $string = '';

            foreach($table_data as $key => $value){
                $string .= $key . "  =  '" . $value . "' AND ";
            }
            $string = substr($string,0,-5);

            $query = "SELECT * FROM $table_name WHERE $string";

            //echo $string;

            $result = mysqli_query($this->conn,$query);

           // echo $result;

                        if(mysqli_num_rows($result)){

                                return true;

                        }else{

                            $this->error = "WRONG DATA";
            
                        }

        }

        
    }
?>