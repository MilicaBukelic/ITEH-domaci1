<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Aviotrans</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="naslov">Dobrodosli</h1>
    <form id="forma1">
        <label for="">Korisnicko ime:</label>
        <input type="text" placeholder="korisnicko ime" required>
        <label for="">Sifra:</label>
        <input type="password" reqired>
        <button>Uloguj se</button>
        <label id="nemateNalog" onclick="registracijaPrikazi()">Nemate nalog ?</label>
    </form>
    <form id="forma2">
        <label for="">Ime:</label>
        <input type="text" required>
        <label for="">Prezime:</label>
        <input type="text" required>
        <label for="">e-mail:</label>
        <input type="email" required>
        <label for="">Korisnicko ime:</label>
        <input type="text" required>
        <label for="">sifra:</label>
        <input type="password" required>
        <label for="">potvrdi sifru:</label>
        <input type="password" required>
        <button>Registruj se</button>
        <button onclick="registracijaNazad()">Nazad</button>
    </form>
</body>
<script src="index.js"></script>
</html>