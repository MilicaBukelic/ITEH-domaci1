<?php

    class Let{

        public $sifra;
        public $destinacijaPolaska;
        public $destinacijaDolaska;
        public $aviokompanija;
        public $datum;

        public function __construct($sifra,$destinacijaPolaska,$destinacijaDolaska,$aviokompanija,$datum){
            $this -> sifra = $sifra;
            $this -> destinacijaPolaska = $destinacijaPolaska;
            $this -> destinacijaDolaska = $destinacijaDolaska;
            $this -> aviokompanija = $aviokompanija;
            $this -> datum = $datum;
        }

        public static function prikaziSve(mysqli $conn){
            $query = "SELECT * FROM letovi";
            return $conn->query($query);
        }

        public static function getById($sifra, mysqli $conn){
            $query = "SELECT * FROM letovi WHERE sifra=$sifra";

            $obj = array();
            if($sqlObj = $conn->query){
                while($red = $sqlObj -> fetch_array(1)){
                    $obj[]=$red;
                }
            }

            return $obj;
        }

        public static function obrisiLet(mysqli $conn,$sifra){
            $query_del = "DELETE FROM letovi WHERE sifra = '$sifra'";
            return $conn->query($query_del);
        }

        public function izmeniLet(mysqli $conn){
            $query_up = "UPDATE letovi SET destinacijaPolaska = '$this->destinacijaPolaska', destinacijaDolaska = '$this->destinacijaDolaska',aviokompanija = '$this->aviokompanija', datum = '$this->datum' WHERE sifra ='$this->sifra'";
            return $conn->query($query_up);
        }

        public static function DodajLet(mysqli $conn, Let $let){
            $query_add = "INSERT INTO letovi(sifra,destinacijaPolaska,destinacijaDolaska,aviokompanija,datum) VALUES ('$let->sifra','$let->destinacijaPolaska','$let->destinacijaDolaska','$let->aviokompanija','$let->datum');";
            return $conn->query($query_add);
        }
    }

?>