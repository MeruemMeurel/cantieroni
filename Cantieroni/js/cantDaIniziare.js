//Scroll a destra/sinistra
const prevDaIniziare = document.getElementById('prevDaIniziare');
const nextDaIniziare = document.getElementById('nextDaIniziare');

prevDaIniziare.onclick = () => {
    document.getElementById('listaDaIniziare').scrollLeft -= 1200;
};

nextDaIniziare.onclick = () => {
    document.getElementById('listaDaIniziare').scrollLeft += 1200;
};


//Aggiunta dei cantieri nel relativo html
var strCards = "";
for(let i=0; i<cantDaIniziare.length; i++){
    if(i == 0){
        strCards += '<div class="card" id="card1DaIniziare"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantDaIniziare[i].descrizione+'</p></div></div>'
    }
    else{
        strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantDaIniziare[i].descrizione+'</p></div></div>'
    }
}
document.getElementById("listaDaIniziare").innerHTML += strCards;


//Cambiamento della visibilità delle frecce in caso di ridimensionamento della finestra
function changeArrowVisOnResize(){
    var element = document.querySelector('#listaDaIniziare');
    if((element.offsetHeight < element.scrollHeight) || (element.offsetWidth < element.scrollWidth)){
        prevDaIniziare.style.visibility = "visible";
        nextDaIniziare.style.visibility = "visible";
    }
    else{
        prevDaIniziare.style.visibility = "hidden";
        nextDaIniziare.style.visibility = "hidden";
    }
}
changeArrowVisOnResize();
window.addEventListener('resize', changeArrowVisOnResize);


