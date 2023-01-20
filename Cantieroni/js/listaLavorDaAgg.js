//Variabile per capire se il "+" è stato premuto
var plusPremutoLavor = false;

//Funzione per far apparire l'inserimento (chiamata da cantInCorso.js)
function mostraAggiungiLavCant(){
    document.getElementById('listaLavorDaAgg').style.visibility = "visible";
    document.getElementById('listaLavorDaAgg').style.top = "0";
}

//Evento nel caso in cui venga premuto ESC durante l'inserimento del cantiere
window.addEventListener('keydown', function(e) {
    if(e.key == "Escape" && document.getElementById('listaLavorDaAgg').style.visibility == "visible"){
        plusPremutoLavor = !plusPremutoLavor;
        document.getElementById('listaLavorDaAgg').style.top = "150%";
        setTimeout(function(){
            document.getElementById('listaLavorDaAgg').style.visibility = "hidden";
        }, 300);
    }
});

//Evento nel caso in cui venga fatto un click fuori dal div durante l'inserimento del cantiere
window.addEventListener("click", function(e){
    if(!document.getElementById('formContentLavor').contains(e.target) && plusPremutoLavor == true){
        plusPremutoLavor = !plusPremutoLavor;
        document.getElementById('listaLavorDaAgg').style.top = "150%";
        setTimeout(function(){
            document.getElementById('listaLavorDaAgg').style.visibility = "hidden";
        }, 300);
    }
    else if(document.getElementById('bottPerAggLav').contains(e.target)){
        plusPremutoLavor = !plusPremutoLavor;
    }
});