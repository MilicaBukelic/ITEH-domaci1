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

        public function deleteById(mysqli $conn){
            $query = "DELETE FROM letovi WHERE sifra = $this->sifra";
            return $conn->query($query);
        }

        public function update($sifra, mysqli $conn){
            $query = "UPDATE letovi SET destinacijPolaska = $this->destinacijaPolaska,
            destinacijDolaska = $this->destinacijaDolaska,aviokompanija = $this -> aviokompanija, 
            datum = $this->datum";
            return $conn->query($query);
        }

        public static function add (Let $let, mysqli $conn){
            $query = "INSERT INTO rezervacije(destinacijaPolaska, destinacijaDolaska, aviokompanija, datum) 
                      VALUES ('$let->destinacijaPolaska', '$let-> destinacijaDolaska', 
                       '$let->aviokompanija','$let->datum')";
        }
    }

?>