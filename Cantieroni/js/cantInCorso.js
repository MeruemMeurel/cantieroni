//Scroll a destra/sinistra
const prevInCorso = document.getElementById('prevInCorso');
const nextInCorso = document.getElementById('nextInCorso');

prevInCorso.onclick = () => {
    document.getElementById('listaInCorso').scrollLeft -= 1200;
};

nextInCorso.onclick = () => {
    document.getElementById('listaInCorso').scrollLeft += 1200;
};


//Aggiunta dei cantieri nel relativo html
var strCards = "";
for(let i=0; i<cantInCorso.length; i++){
    if(i == 0){
        strCards += '<div class="card bg-light" id="card1InCorso"><button id="plusPerAgg"><img class="card-img" src="../img/plus.png" alt="Card image cap" onclick="mostraInserimento()"></button></div>'
    }
    strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantInCorso[i].descrizione+'</p></div></div>'
}
document.getElementById("listaInCorso").innerHTML += strCards;


//Cambiamento della visibilità delle frecce in caso di ridimensionamento della finestra
function changeArrowVisOnResize(){
    var element = document.querySelector('#listaInCorso');
    if((element.offsetHeight < element.scrollHeight) || (element.offsetWidth < element.scrollWidth)){
        prevInCorso.style.visibility = "visible";
        nextInCorso.style.visibility = "visible";
    }
    else{
        prevInCorso.style.visibility = "hidden";
        nextInCorso.style.visibility = "hidden";
    }
}
changeArrowVisOnResize();
window.addEventListener('resize', changeArrowVisOnResize);