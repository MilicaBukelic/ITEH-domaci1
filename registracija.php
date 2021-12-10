<?php

    require "dbBroker.php"; 
    require "klase/putnik.php";

    session_start();

    if(isset($_POST["ime"])&&isset($_POST["prezime"])&&isset($_POST["email"])&&isset($_POST["username"])
    &&isset($_POST["password"])&&isset($_POST["password2"])){

        $ime=$_POST["ime"];
        $prezime=$_POST["prezime"];
        $email=$_POST["email"];
        $usern = $_POST['username'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];

        if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email)){
            echo "koristili ste nedozvoljene karaktere u email adresi";
            die();
        }
        if(!($pass==$pass2)){
            echo "Sifre nisu iste";
            die();
        }
        $putnik1=new Putnik($ime,$prezime,$email,$usern,$pass);
        $putnikVecPostoji=Putnik::logInPutnik($conn,$putnik1);
    
       // echo print_r($putnikVecPostoji);

        if($putnikVecPostoji->num_rows > 0){
            echo "Username i password su vec zauzeti";
            die();
        }
        $rezultatRegistracije=boolval(Putnik::registruj($conn,$putnik1));
        if($rezultatRegistracije==true){
            echo "uspesno ste se registrovali";
            $_SESSION['putnik']=$putnik1;
            die();
        }else{
            echo "Registracija se nije dobro izvrsila";
        }
    }
?>