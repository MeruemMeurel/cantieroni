//Scroll a destra/sinistra
let prevConclusi = null;
let nextConclusi = null;

function prevConclusiSetup() {    
    if(!prevConclusi) {
        prevConclusi = document.getElementById('prevConclusi');
        nextConclusi = document.getElementById('nextConclusi');

        prevConclusi.onclick = () => {
            document.getElementById('listaConclusi').scrollLeft -= 1200;
        };

        nextConclusi.onclick = () => {
            document.getElementById('listaConclusi').scrollLeft += 1200;
        };
    }
}



//Aggiunta dei cantieri nel relativo html
function setConclusi(cantConclusi) {
    prevConclusiSetup();
    var strCards = "";
    for (let i = 0; i < cantConclusi.length; i++) {
        if (i == 0) {
            strCards += '<div class="card" id="card1Conclusi"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">' + cantConclusi[i].descrizione + '</p></div></div>'
        } else {
            strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">' + cantConclusi[i].descrizione + '</p></div></div>'
        }
    }
    document.getElementById("listaConclusi").innerHTML += strCards;
}


$( document ).ready(function() {

    // Legge tutti i cantieri conclusi
    fetch('http://localhost/cantieroni/API/Cantiere/read_conclusi.php',{credentials: 'include'})
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
            setConclusi(array);


        }).catch((err) => {
        console.log("Cantieri/read_conclusi",err);
    });


});
