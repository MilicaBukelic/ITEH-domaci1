<?php

    require "../dbBroker.php";
    require "../klase/letovi.php";

    if(isset($_POST["sifra"])){

        $sifra=$_POST["sifra"];
        $rezultat=Let::obrisiLet($conn,$sifra);
        if($rezultat==false){
            echo "Niste obrisali rezervaciju.";
        }else{
            echo "Uspesno ste obrisali rezervaciju.";
        }
    }
?>