<?php

    class Putnik{

        public $id;
        public $ime;
        public $prezime;
        public $email;
        public $username;
        public $password;

        public function __construct($ime,$prezime,$email,$username,$password){
            $this->ime=$ime;
            $this->prezime=$prezime;
            $this->email=$email;
            $this -> username = $username;
            $this -> password = $password;
        }

        public static function logInPutnik(mysqli $conn ,Putnik $putnik){
            $query = "SELECT * FROM putnici WHERE username='$putnik->username' and password='$putnik->password';";
            return $conn->query($query);
        }
        public static function registruj(mysqli $conn, Putnik $putnik){
            $q="INSERT INTO putnici(ime,prezime,email,username,password) values ('$putnik->ime','$putnik->prezime','$putnik->email','$putnik->username','$putnik->password');";
            return $conn->query($q);
        }
    }




?>