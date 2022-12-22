var oggi = new Date();

var array = Array();

array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "20/12/2022", "22/12/2022", "Descrizione1", "codice1"));
array.push(new Cantiere(2, "Cantiere 2", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione2", "codice2"));
array.push(new Cantiere(2, "Cantiere 3", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione3", "codice2"));
array.push(new Cantiere(2, "Cantiere 4", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione4", "codice2"));
array.push(new Cantiere(2, "Cantiere 5", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione5", "codice2"));
array.push(new Cantiere(2, "Cantiere 6", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione6", "codice2"));
array.push(new Cantiere(2, "Cantiere 7", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione7", "codice2"));
array.push(new Cantiere(1, "Cantiere 8", "Via a caso", "Campi Bisenzio", "Firenze", "20/12/2022", "22/12/2022", "Descrizione8", "codice1"));
array.push(new Cantiere(2, "Cantiere 9", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione9", "codice2"));
array.push(new Cantiere(2, "Cantiere 10", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione10", "codice2"));
array.push(new Cantiere(2, "Cantiere 11", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione11", "codice2"));
array.push(new Cantiere(2, "Cantiere 12", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione12", "codice2"));
array.push(new Cantiere(2, "Cantiere 13", "Via random", "Prato", "Firenze", "20/12/2022", "22/12/2022", "Descrizione13", "codice2"));
array.push(new Cantiere(3, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "25/12/2022", "30/12/2022", "Descrizione14", "codice1"));
array.push(new Cantiere(1, "Cantiere 1", "Via a caso", "Campi Bisenzio", "Firenze", "25/12/2022", "30/12/2022", "Descrizione15", "codice1"));

var cantDaIniziare = [];
var cantInCorso = [];
var cantConclusi = [];

for(let i=0; i<array.length; i++){
    var app = array[i].data_inizio.split('/');
    var dataInizio = new Date(Number(app[2]), Number(app[1]) - 1, Number(app[0]));
    app = array[i].data_fine.split('/');
    var dataFine = new Date(Number(app[2]), Number(app[1]) - 1, Number(app[0]));
    if(dataInizio.getFullYear() >= oggi.getFullYear() && dataInizio.getMonth() >= oggi.getMonth() && dataInizio.getDate() > oggi.getDate()){
        cantDaIniziare.push(array[i]);
    }
    else if(dataFine.getFullYear() <= oggi.getFullYear() && dataFine.getMonth() <= oggi.getMonth() && dataFine.getDate() < oggi.getDate()){
        cantConclusi.push(array[i]);
    }
    else{
        cantInCorso.push(array[i]);
    }
}
console.log(cantInCorso.length);
console.log(cantDaIniziare.length);
console.log(cantConclusi.length);