<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Aviotrans</title>
</head>
<body>
    <h1 id="naslov">Dobrodosli</h1>
    <form id="forma1" method="POST" action="home.php">
        <label for="">Korisnicko ime:</label>
        <input type="text" placeholder="korisnicko ime" name = "username" required>
        <label for="">Sifra:</label>
        <input type="password" name = "password" reqired>
        <button>Uloguj se</button>
        <label id="nemateNalog" onclick="registracijaPrikazi()">Nemate nalog ?</label>
    </form>
   <form id="forma2" method="POST" action = "registracija.php">
        <label for="">Ime:</label>
        <input type="text" name="ime" required>
        <label for="">Prezime:</label>
        <input type="text" name="prezime" required>
        <label for="">e-mail:</label>
        <input type="email" name="email" required>
        <label for="">Korisnicko ime:</label>
        <input type="text" name = "username" required>
        <label for="">Sifra:</label>
        <input type="password" name = "password" required>
        <label for="">potvrdi sifru:</label>
        <input type="password" name="password2" required>
        <button onclick="registrujSe()">Registruj se</button>
        <button onclick="registracijaNazad()">Nazad</button>
    </form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="index.js"></script>
</html>