<?php
    require "dbBroker.php";
    require "klase/letovi.php";

    session_start();

    $podaci = Let:: prikaziSve($conn);

    if(!$podaci){
        echo "Doslo je do greske prilikom preuzimanja podataka.";
    }
    if($podaci->num_rows == 0){
        echo "Nema unetih rezervacija letova.";
        die;
    }
    else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Aviotrans</title>
</head>
<body>
    
    <h1> Rezervacija avionskih karata </h1>

    <br> 
    <br>
    
    <table> 
        <thead class='zaglavlje'> 
            <tr>
                <th>Sifra</th>
                <th>Destinacija polaska</th>
                <th>Destinacija dolaska</th>
                <th>Aviokompanija</th>
                <th>Datum</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while($row = $podaci -> fetch_array()):
            ?>

                <tr>
                    <td><?php echo $row["sifra"] ?></td>
                    <td><?php echo $row["destinacijaPolaska"] ?></td>
                    <td><?php echo $row["destinacijaDolaska"] ?></td>
                    <td><?php echo $row["avioKompanija"] ?></td>
                    <td><?php echo $row["datum"] ?></td>
                </tr>

            <?php
                    endwhile;
                }              
            ?>
        </tbody>
    </table>

    <br>
    <br>

    <div id = "dodaj"> 
        <form id="rezervacija" method="POST">
            <label for=""> Sifra:</label>
            <input type="int" name="sifra" required>
            <label for=""> Destinacija polaska:</label>
            <input type="text" name="polazak" required>
            <label for=""> Destinacija dolaska::</label>
            <input type="text" name="dolazak" required>
            <label for="">Aviokompanija:</label>
            <input type="text" name = "aviokompanija" required>
            <label for="">Datum:</label>
            <input type="date" name = "datum" required>
            <label for="">Sati:</label>
            <input type="number" name = "sati" required>
            <label for="">Minuti:</label>
            <input type="number" name = "minuti" required>
            <button id="rezervisi1" onclick="dodajLet()"> Rezervisi </button>
            <button onclick="rezervacijaNazad()">Nazad</button>
        </form>
    </div>
    <div id="dugmici">
        <button id="rezervisi" class="btn_home" onclick="rezervacijaPrikazi()"> Rezervisi let </button>
        <button id="promeni" class="btn_home" onclick="izmenaPrikazi()"> Izmeni let </button>
        <button id="izbrisi" class="btn_home" onclick="brisanjePrikazi()"> Obrisi let </button>
    </div>
   <div id = "izmeni"> 
        <form id="izmena" method="POST" >
            <label for=""> Sifra:</label>
            <input type="int" name="sifra" required>
            <label for=""> Destinacija polaska:</label>
            <input type="text" name="polazak" required>
            <label for=""> Destinacija dolaska:</label>
            <input type="text" name="dolazak" required>
            <label for="">Aviokompanija:</label>
            <input type="text" name = "aviokompanija" required>
            <label for="">Datum:</label>
            <input type="date" name = "datum" required>
            <label for="">Sati:</label>
            <input type="number" name = "sati" required>
            <label for="">Minuti:</label>
            <input type="number" name = "minuti" required>
            <button id="zameni" onclick="izmeniLet()"> Izmeni </button>
            <button onclick="izmenaNazad()">Nazad</button>
        </form>
    </div>

    <div id = "obrisi"> 
        <form id="brisanje" method="POST" >
            <label for=""> Sifra:</label>
            <input type="int" name="sifra" id="sifra1" required>
            <button id="obrisi-btn" onclick="obrisiLet()"> Obrisi </button>
            <button onclick="brisanjeNazad()">Nazad</button>
        </form>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="home.js"></script>
</html>