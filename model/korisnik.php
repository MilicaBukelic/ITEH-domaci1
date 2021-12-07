<?php

    class Korisnik{

        public $id;
        public $username;
        public $password;

        public function __construct($id,$username,$passwrd){
            $this -> id = $id;
            $this -> username = $username;
            $this -> password = $password;
        }

        public static function logInUser(){
            $query = "SELECT * FROM user WHERE username='$usr->username' and password='$usr->password'";
            return $conn->query($query);
        }
    }




?>