<?php

    require "dbBroker.php";
    require "klase\putnik.php";

    session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){
        $usern = $_POST['username'];
        $pass = $_POST['password'];
        
        $putnik = new Putnik(1, $usern, $pass);
        $rez = Putnik::logInPutnik($conn, $putnik); //pristup statickim funkcijama preko klase

        if($rez->num_rows==1){
            echo  `
            <script>
            console.log( "Uspešno ste se prijavili");
            </script>
            `;
            $_SESSION['putniklogin'] = $putnik;
            header('Location: ..\home.php');
            exit();
        }else{
            echo `
            <script>
            console.log( "Niste se prijavili!");
            </script>
            `;
        }

    }

?>