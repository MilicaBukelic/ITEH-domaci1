<?php
    require "dbBroker.php";
    require "klase/letovi.php";

    session_start();

    $podaci = Let:: prikaziSve($conn);

    if(!$podaci){
        echo "Doslo je do greske prilikom prezimanja podataka.";
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




</body>
</html>