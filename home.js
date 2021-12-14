/* rezervisanje leta */

function rezervacijaPrikazi(){
    event.preventDefault();
    document.getElementById("rezervacija").style.display='flex';
}
function rezervacijaNazad(){
    event.preventDefault();
    document.getElementById("rezervacija").style.display='none';
}

function dodajLet(){

    event.preventDefault();
    var serijalizacija =$("#rezervacija").serialize();
    console.log(serijalizacija);
    var polja=$("#rezervacija").find('input');
    polja.prop('disabled',true);
    req=$.ajax({
        url:"funkcije/dodaj.php",
        type:"post",
        data:serijalizacija
    });
    req.done(function(res,textStatus, jqXHR){
        if(res=="Uspesno ste izvrsili rezervaciju."){
            alert("Uspesno ste izvrsili rezervaciju");
        }else{
            alert("Niste izvrsili rezervaciju" +res);
        }
        console.log(res);
    });
    req.fail(function(jqXHR,textStatus,errorTrown){
        console.error("Desila se greska: "+errorTrown);
    });
    polja.prop('disabled',false);

}

/* izmena leta */

function izmenaPrikazi(){
    event.preventDefault();
    console.log("Izmena je pokrenuta");
    document.getElementById("izmeni").style.display='flex';
    document.getElementById("izmena").style.display='flex';
}
function izmenaNazad(){
    event.preventDefault();
    console.log("Izmena je pokrenuta");
    document.getElementById("izmeni").style.display='none';
    document.getElementById("izmena").style.display='none';
}

function izmeniLet(){

    event.preventDefault();
    var serijalizacija =$("#izmena").serialize();
    console.log(serijalizacija);
    var polja=$("#izmena").find('input');
    polja.prop('disabled',true);
    req=$.ajax({
        url:"funkcije/izmeni.php",
        type:"post",
        data:serijalizacija
    });
    req.done(function(res,textStatus, jqXHR){
        if(res=="Uspesno ste izmenili rezervaciju."){
            alert("Uspesno ste izmenili rezervaciju");
        }else{
            alert("Niste izmenili rezervaciju" +res);
        }
        console.log(res);
    });
    req.fail(function(jqXHR,textStatus,errorTrown){
        console.error("Desila se greska: "+errorTrown);
    });
    polja.prop('disabled',false);

}


/* brisanje leta */

function brisanjePrikazi(){
    event.preventDefault();
    console.log("Brisanje je pokrenuto");
    document.getElementById("obrisi").style.display='flex';
    document.getElementById("brisanje").style.display='flex';
}
function brisanjeNazad(){
    event.preventDefault();
    console.log("Brisanje je pokrenuto");
    document.getElementById("obrisi").style.display='none';
    document.getElementById("brisanje").style.display='none';
}

function obrisiLet(){
    console.log("Pokrenuta je funkcija");
    event.preventDefault();
    document.getElementById("sifra1").disabled=false;
    
    var $serijalizacija=$("#brisanje").serialize();
    console.log($serijalizacija);
    var polja=$("#brisanje").find('input');
    polja.prop('disabled',true);
    
    req=$.ajax({
      url:"funkcije/obrisi.php",
      type:"post",
      data:$serijalizacija
    });

    req.done(function(res,textStatus, jqXHR){
        if(res=="Uspesno ste obrisali rezervaciju."){
            alert("Uspesno ste obrisali rezervaciju");
        }else{
            alert("Niste obrisali rezervaciju" + res);
        }
        console.log(res);
    });
    req.fail(function(jqXHR,textStatus,errorTrown){
        console.error("Desila se greska: "+errorTrown);
        document.getElementById("sifra1").disabled=true;
    });
    polja.prop('disabled',false);

}
    



