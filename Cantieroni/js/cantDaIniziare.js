//Scroll a destra/sinistra

let prevDaIniziare = null;
let nextDaIniziare = null;

function prevDaIniziareSetup() {    
    if(!prevDaIniziare) {
        prevDaIniziare = document.getElementById('prevDaIniziare');
        nextDaIniziare = document.getElementById('nextDaIniziare');

        prevDaIniziare.onclick = () => {
            document.getElementById('listaDaIniziare').scrollLeft -= 1200;
        };

        nextDaIniziare.onclick = () => {
            document.getElementById('listaDaIniziare').scrollLeft += 1200;
        };
    }
}

function openCantiere(id) {
    window.location = '/cantieroni-1/Cantieroni/interfacce/cantiere.html?id='+id;
    return false;
}

//Aggiunta dei cantieri nel relativo html
function setDaIniziare(cantDaIniziare) {
    prevDaIniziareSetup();
    var strCards = "";
    for (let i = 0; i < cantDaIniziare.length; i++) {        
        let cantiere=cantDaIniziare[i];        
        strCards += '<div class="card"><img class="card-img-top" onclick="openCantiere('+cantiere.id+')" src="../img/cantiere.jpg" alt="Card image cap"><button id="pennaPerEdit"><div class="figlioProva"><img class="pennaEditCantiere" src="../img/penna edit cantiere2.png" onclick="mostraInserimentoEdit('+cantiere.id+')"></button><div class="card-body"><p class="card-text">'+cantiere.nome+'</p></div></div>';
    }
    document.getElementById("listaDaIniziare").innerHTML += strCards;
}


$( document ).ready(function() {

    // Legge tutti i cantieri DaIniziare
    fetch('http://localhost/cantieroni/API/Cantiere/read_da_iniziare.php',{credentials: 'include'})
        .then((response) => {
            if(response.ok) {
                return response.json();
            }
            throw new Error(response.statusText);
        })
        .then((data) => {
            let array=[];
            // Login effettuato
            if(data.data) {
                data.data.forEach(el => {
                    //console.log("cantiere",el);
                    array.push(new Cantiere(el.id, el.nome, el.indirizzo, el.citta, el.provincia, el.data_inizio, el.data_fine, el.descrizione, el.id_capocantiere));
                });
            }
            setDaIniziare(array);


        }).catch((err) => {
        console.log("Cantieri/read_DaIniziare",err);
    });


});
