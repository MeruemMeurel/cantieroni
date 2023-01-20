//Variabile per capire se il simbolo della penna (per l'edit) è stato premuto
let pennaPremuta = false;

//Funzione per far apparire l'inserimento (chiamata da cantInCorso.js)
function mostraInserimentoEdit(id){

    // 1. fetch del cantiere id
    // 2. usare i dati della fetch per riempire i campi edit
    // 3. mostrare modale edit
    // Legge tutti i cantieri in corso    
    fetch('http://localhost/cantieroni/API/Cantiere/read_by_id.php?id='+id,{credentials: 'include'})
    .then((response) => {
        if(response.ok) {   
            return response.json();
        }
        throw new Error(response.statusText);
    })
    .then((data) => {
            // Login effettuato            
            el=data.data;
            
            array.push(new Cantiere(el.id, el.nome, el.indirizzo, el.citta, el.provincia, el.data_inizio, el.data_fine, el.descrizione, el.id_capocantiere);                                
            
            


    }).catch((err) => {
        console.log("Cantieri/read_in_corso",err);
    });


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