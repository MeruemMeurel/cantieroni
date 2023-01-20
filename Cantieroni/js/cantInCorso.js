//Scroll a destra/sinistra
let prevInCorso=null; 
let nextInCorso=null; 


function prevInCorso_setup() {
    if(!prevInCorso) {
        prevInCorso = document.getElementById('prevInCorso');
        nextInCorso = document.getElementById('nextInCorso');

        
        prevInCorso.onclick = () => {
            document.getElementById('listaInCorso').scrollLeft -= 1200;
        };

        
        nextInCorso.onclick = () => {
            document.getElementById('listaInCorso').scrollLeft += 1200;
        };
    }
}




//Aggiunta dei cantieri nel relativo html
function setInCorso(cantInCorso) {
    prevInCorso_setup();

    var strCards = "";
    for(let i=0; i<cantInCorso.length; i++){
        if(i == 0){
            strCards += '<div class="card bg-light" id="card1InCorso"><button id="plusPerAgg"><img class="card-img" src="../img/plus.png" alt="Card image cap" onclick="mostraInserimento()"></button></div>'
        }
        strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><img class="pennaEditCantiere" src="../img/penna edit cantiere2.png"><div class="card-body"><p class="card-text">'+cantInCorso[i].nome+'</p></div></div>'
    }
    document.getElementById("listaInCorso").innerHTML += strCards;    
}



//Cambiamento della visibilità delle frecce in caso di ridimensionamento della finestra
function changeArrowVisOnResize(){

    //let element = document.querySelector('#listaInCorso');    
    let element = document.getElementById('listaInCorso'); 
    if(element) {   
        if(element && (element.offsetHeight < element.scrollHeight) || (element.offsetWidth < element.scrollWidth)) {
            prevInCorso.style.visibility = "visible";
            nextInCorso.style.visibility = "visible";
        }
        else{
            prevInCorso.style.visibility = "hidden";
            nextInCorso.style.visibility = "hidden";
        }
    }
}

$( document ).ready(function() {
    
    // Legge tutti i cantieri in corso    
    fetch('http://localhost/cantieroni/API/Cantiere/read_in_corso.php',{credentials: 'include'})
    .then((response) => {
        if(response.ok) {   
            return response.json();
        }
        throw new Error(response.statusText);
    })
    .then((data) => {
            let array=[];
            // Login effettuato            
            data.data.forEach(el => {
                //console.log("cantiere",el);    
                array.push(new Cantiere(el.id, el.nome, el.indirizzo, el.citta, el.provincia, el.data_inizio, el.data_fine, el.descrizione, el.id_capocantiere));                                
            });
            setInCorso(array);


    }).catch((err) => {
        console.log("Cantieri/read_in_corso",err);
    });

    changeArrowVisOnResize();    
    window.addEventListener('resize', changeArrowVisOnResize);
    

});


