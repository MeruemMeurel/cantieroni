var oggi = new Date();

var array = Array();



// Legge tutti i cantieri
fetch('http://localhost/cantieroni/API/Cantiere/read.php',{credentials: 'include'})
    .then((response) => {
         if(response.ok) {   
            return response.json();
         }
         throw new Error(response.statusText);
    })
    .then((data) => {
            // Login effettuato            
            data.data.forEach(el => {
                //console.log("cantiere",el);    
                array.push(new Cantiere(el.id, el.nome, el.indirizzo, el.citta, el.provincia, el.data_inizio, el.data_fine, el.descrizione, el.id_capocantiere));                                
            });
            creaCantieri(array);


    }).catch((err) => {
        console.log(err);
    });



//Cantieri in corso
/*
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "20/12/2022", "01/01/2024", "Descrizione1", "codice1"));
array.push(new Cantiere(2, "Cantiere 2", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione2", "codice2"));
array.push(new Cantiere(2, "Cantiere 3", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione3", "codice2"));
array.push(new Cantiere(2, "Cantiere 4", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione4", "codice2"));
array.push(new Cantiere(2, "Cantiere 5", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione5", "codice2"));
array.push(new Cantiere(2, "Cantiere 6", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione6", "codice2"));
array.push(new Cantiere(2, "Cantiere 7", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione7", "codice2"));
array.push(new Cantiere(1, "Cantiere 8", "Via a caso", "Campi Bisenzio", "Firenze", "20/12/2022", "01/01/2024", "Descrizione8", "codice1"));
array.push(new Cantiere(2, "Cantiere 9", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione9", "codice2"));
array.push(new Cantiere(2, "Cantiere 10", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione10", "codice2"));
array.push(new Cantiere(2, "Cantiere 11", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione11", "codice2"));
array.push(new Cantiere(2, "Cantiere 12", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione12", "codice2"));
array.push(new Cantiere(2, "Cantiere 13", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione13", "codice2"));

//Cantieri da iniziare
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2024", "01/01/2030", "Descrizione14", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2024", "01/01/2030", "Descrizione15", "codice1"));
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2024", "01/01/2030", "Descrizione16", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2024", "01/01/2030", "Descrizione17", "codice1"));
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2024", "01/01/2030", "Descrizione18", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2024", "01/01/2030", "Descrizione19", "codice1"));

//Cantieri conclusi
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione20", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione21", "codice1"));
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione22", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione23", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione24", "codice1"));
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione25", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "01/01/2020", "01/01/2022", "Descrizione26", "codice1"));
*/




function creaCantieri(array) {
    let cantInCorso = [];
    let cantDaIniziare = [];
    let cantConclusi = [];
    
    for(let i=0; i<array.length; i++){        
        console.log("cantiere",i,array[i]);    
        let dataInizio=new Date(2000,1,1) , dataFine=new Date(3000,12,31);

        if(array[i].data_inizio) {
            let app = array[i].data_inizio.split('-');
            dataInizio = new Date(Number(app[0]), Number(app[1]) - 1, Number(app[2]));
        }

        if(array[i].data_fine) {
            let app = array[i].data_fine.split('-');        
            dataFine = new Date(Number(app[0]), Number(app[1]) - 1, Number(app[2]));
        }

        if(dataInizio.getTime() < oggi.getTime() && dataFine.getTime() > oggi.getTime()){
            cantInCorso.push(array[i]);
        }
        else if(dataInizio.getTime() > oggi.getTime()){
            cantDaIniziare.push(array[i]);
        }
        else if(dataFine.getTime() < oggi.getTime()){
            cantConclusi.push(array[i]);
        }
    }
    console.log("cantInCorso.length",cantInCorso.length);
    console.log("cantDaIniziare.length",cantDaIniziare.length);
    console.log("cantConclusi.length",cantConclusi.length);
}

function aggiungiCantiere(){
//    console.log("AOH");
    var temp = Array()
    temp[0] = document.getElementById("idNome").value;
    temp[1] = document.getElementById("idIndirizzo").value;
    temp[2] = document.getElementById("idCitta").value;
    temp[3] = document.getElementById("idProvincia").value;
    temp[4] = document.getElementById("idDataInizio").value;
    temp[5] = document.getElementById("idDataFine").value;
    temp[6] = document.getElementById("idDescrizione").value;
    temp[7] = document.getElementById("idIdCapocantiere").value;
    var idCantiere = Math.floor(Math.random() * 1000000);
    var c = new Cantiere(idCantiere, temp[0], temp[1], temp[2], temp[3], temp[4], temp[5], temp[6], temp[7]);
    /*console.log(app[0]);
    console.log(app[1]);
    console.log(app[2]);
    console.log(app[3]);
    console.log(app[4]);
    console.log(app[5]);
    console.log(app[6]);
    console.log(app[7]);
    console.log(c.nome);*/
    var app = c.data_inizio.split('/');
    var dataInizio = new Date(Number(app[2]), Number(app[1]) - 1, Number(app[0]));
    app = c.data_fine.split('/');
    var dataFine = new Date(Number(app[2]), Number(app[1]) - 1, Number(app[0]));

    if(dataInizio.getTime() < oggi.getTime() && dataFine.getTime() > oggi.getTime()){
        document.getElementById("listaInCorso").innerHTML += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+c.descrizione+'</p></div></div>';
    }
    else if(dataInizio.getTime() > oggi.getTime()){
        document.getElementById("listaDaIniziare").innerHTML += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+c.descrizione+'</p></div></div>';
    }
    else if(dataFine.getTime() < oggi.getTime()){
        document.getElementById("listaConclusi").innerHTML += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+c.descrizione+'</p></div></div>';
    }
}
