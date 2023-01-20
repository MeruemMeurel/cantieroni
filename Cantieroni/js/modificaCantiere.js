//Variabile per capire se il simbolo della penna (per l'edit) è stato premuto
let pennaPremuta = false;

//Funzione per far apparire l'inserimento (chiamata da cantInCorso.js)
function mostraInserimentoEdit(){
    document.getElementById('modificaCantiere').style.visibility = "visible";
    document.getElementById('modificaCantiere').style.top = "0";
}

//Evento nel caso in cui venga premuto ESC durante l'inserimento del cantiere
window.addEventListener('keydown', function(e) {
    if(e.key == "Escape" && document.getElementById('modificaCantiere').style.visibility == "visible"){
        pennaPremuta = !pennaPremuta;
        document.getElementById('modificaCantiere').style.top = "150%";
        setTimeout(function(){
            document.getElementById('modificaCantiere').style.visibility = "hidden";
        }, 300);
    }
});

//Evento nel caso in cui venga fatto un click fuori dal div durante l'inserimento del cantiere
window.addEventListener("click", function(e){
    if(!document.getElementById('formContent').contains(e.target) && pennaPremuta == true){
        pennaPremuta = !pennaPremuta;
        document.getElementById('modificaCantiere').style.top = "150%";
        setTimeout(function(){
            document.getElementById('modificaCantiere').style.visibility = "hidden";
        }, 300);
    }
    else if(document.getElementById('pennaPerEdit').contains(e.target)){
        pennaPremuta = !pennaPremuta;
    }
});