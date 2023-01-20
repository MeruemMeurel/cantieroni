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


//Aggiunta dei cantieri nel relativo html
function setDaIniziare(cantDaIniziare) {
    prevDaIniziareSetup();
    var strCards = "";
    for (let i = 0; i < cantDaIniziare.length; i++) {
        if (i == 0) {
            strCards += '<div class="card" id="card1DaIniziare"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><img class="pennaEditCantiere" src="../img/penna edit cantiere2.png onclick="mostraInserimetoEdit()"><div class="card-body"><p class="card-text">' + cantDaIniziare[i].nome + '</p></div></div>'
        } else {
            strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><img class="pennaEditCantiere" src="../img/penna edit cantiere2.png onclick="mostraInserimetoEdit()"><div class="card-body"><p class="card-text">' + cantDaIniziare[i].nome + '</p></div></div>'
        }
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
