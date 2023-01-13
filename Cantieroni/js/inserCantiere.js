//Variabile per capire se il "+" è stato premuto
var plusPremuto = false;

//Funzione per far apparire l'inserimento (chiamata da cantInCorso.js)
function mostraInserimento(){
    document.getElementById('inserCantiere').style.visibility = "visible";
    document.getElementById('inserCantiere').style.top = "50%";
}

function aggiungiCantiere(){
    var app = document.getElementsByClassName("aggCampi");
    var idCantiere = Math.floor(Math.random() * 1000000)
    var c = new Cantiere(idCantiere, app[0], app[1], app[2], app[3], app[4], app[5], app[6], app[7]);
    aggCantiere();
}

//Evento nel caso in cui venga premuto ESC durante l'inserimento del cantiere
window.addEventListener('keydown', function(e) {
    if(e.key == "Escape" && document.getElementById('inserCantiere').style.visibility == "visible"){
        plusPremuto = !plusPremuto;
        document.getElementById('inserCantiere').style.top = "150%";
        setTimeout(function(){
            document.getElementById('inserCantiere').style.visibility = "hidden";
        }, 300);
    }
});

//Evento nel caso in cui venga fatto un click fuori dal div durante l'inserimento del cantiere
window.addEventListener("click", function(e){
    if(!document.getElementById('inserCantiere').contains(e.target) && plusPremuto == true){
        plusPremuto = !plusPremuto;
        document.getElementById('inserCantiere').style.top = "150%";
        setTimeout(function(){
            document.getElementById('inserCantiere').style.visibility = "hidden";
        }, 300);
    }
    else if(document.getElementById('plusPerAgg').contains(e.target)){
        plusPremuto = !plusPremuto;
    }
});