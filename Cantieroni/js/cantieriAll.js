var oggi = new Date();

var array = Array();

//Cantieri in corso
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "20/12/2022", "01/01/2024", "Descrizione1", "codice1"));
/*array.push(new Cantiere(2, "Cantiere 2", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione2", "codice2"));
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
array.push(new Cantiere(2, "Cantiere 13", "Via random", "Prato", "Firenze", "20/12/2022", "01/01/2024", "Descrizione13", "codice2"));*/

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

var cantInCorso = [];
var cantDaIniziare = [];
var cantConclusi = [];

for(let i=0; i<array.length; i++){
    var app = array[i].data_inizio.split('/');
    var dataInizio = new Date(Number(app[2]), Number(app[1]) - 1, Number(app[0]));
    app = array[i].data_fine.split('/');
    var dataFine = new Date(Number(app[2]), Number(app[1]) - 1, Number(app[0]));

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
console.log(cantInCorso.length);
console.log(cantDaIniziare.length);
console.log(cantConclusi.length);