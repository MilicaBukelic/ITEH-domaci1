function registracijaPrikazi(){
    document.getElementById("forma2").style.display='flex';
}
function registracijaNazad(){
    document.getElementById("forma2").style.display='none';
}
function registrujSe(){
    event.preventDefault();
    var serijalizacija =$("#forma2").serialize();
    console.log(serijalizacija);
    var polja=$("#forma2").find('input');
    polja.prop('disabled',true);
    req=$.ajax({
        url:"registracija.php",
        type:"post",
        data:serijalizacija
    });
    
    req.done(function(res,textStatus, jqXHR){
        if(res=="uspesno ste se registrovali"){
            alert("uspesno ste se registrovali");
        }else{
            alert("Niste se registrovali: "+res);
        }
        console.log(res);
    });
    req.fail(function(jqXHR,textStatus,errorTrown){
        console.error("Desila se greska: "+errorTrown);
    });
    polja.prop('disabled',false);
}

function UlogujSe(){
    event.preventDefault();
    var serijalizacija =$("#forma1").serialize();
    console.log(serijalizacija);
    var polja=$("#forma1").find('input');
    polja.prop('disabled',true);
    req=$.ajax({
        url:"login.php",
        type:"post",
        data:serijalizacija
    });
    req.done(function(res,textStatus, jqXHR){
        if(res=="Uspesno ste se prijavili"){
            alert("uspesno ste se prijavili");
        }else{
            alert("Niste se prijavili: "+res);
        }
        console.log(res);
    });
    req.fail(function(jqXHR,textStatus,errorTrown){
        console.error("Desila se greska: "+errorTrown);
    });
    polja.prop('disabled',false);
}


