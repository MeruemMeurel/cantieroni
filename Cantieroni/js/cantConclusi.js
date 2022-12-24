//Scroll a destra/sinistra
const prevConclusi = document.getElementById('prevConclusi');
const nextConclusi = document.getElementById('nextConclusi');

prevConclusi.onclick = () => {
    document.getElementById('listaConclusi').scrollLeft -= 1200;
};

nextConclusi.onclick = () => {
    document.getElementById('listaConclusi').scrollLeft += 1200;
};


//Aggiunta dei cantieri nel relativo html
var strCards = "";
for(let i=0; i<cantConclusi.length; i++){
    if(i == 0){
        strCards += '<div class="card" id="card1Conclusi"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantConclusi[i].descrizione+'</p></div></div>'
    }
    else{
        strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantConclusi[i].descrizione+'</p></div></div>'
    }
}
document.getElementById("listaConclusi").innerHTML += strCards;


//Cambiamento della visibilità delle frecce in caso di ridimensionamento della finestra
function changeArrowVisOnResize(){
    var element = document.querySelector('#listaConclusi');
    if((element.offsetHeight < element.scrollHeight) || (element.offsetWidth < element.scrollWidth)){
        prevConclusi.style.visibility = "visible";
        nextConclusi.style.visibility = "visible";
    }
    else{
        prevConclusi.style.visibility = "hidden";
        nextConclusi.style.visibility = "hidden";
    }
}
changeArrowVisOnResize();
window.addEventListener('resize', changeArrowVisOnResize);


