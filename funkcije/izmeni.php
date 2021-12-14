<?php

    require "../dbBroker.php";
    require "../klase/letovi.php";

    if(isset($_POST["sifra"]) && isset($_POST["polazak"]) && isset($_POST["dolazak"]) &&
    isset($_POST["aviokompanija"]) && isset($_POST["datum"]) && isset($_POST["sati"])  && 
    isset($_POST["minuti"])){

        if($_POST["sati"]<10)
            $_POST["sati"]="0".$_POST["sati"];
        if($_POST["minuti"]<10)
            $_POST["minuti"]="0".$_POST["minuti"];

        $datum=strval($_POST["datum"]);
        $sati=strval($_POST["sati"]);
        $minuti=strval($_POST["minuti"]);
        $datumIVreme="$datum $sati:$minuti:00";
        $let = new Let($_POST["sifra"],$_POST["polazak"],$_POST["dolazak"],$_POST["aviokompanija"],$datumIVreme);

        $rez = $let->izmeniLet($conn);

        if($rez == TRUE){
            echo "Uspesno ste izmenili rezervaciju.";
        }
        else{
            echo $rez;
            echo "Niste izmenili rezervaciju.";
        }


    }




?>