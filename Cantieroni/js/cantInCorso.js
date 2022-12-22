const prevInCorso = document.getElementById('prevInCorso');
const nextInCorso = document.getElementById('nextInCorso');

prevInCorso.onclick = () => {
    document.getElementById('listaInCorso').scrollLeft -= 1200;
};

nextInCorso.onclick = () => {
    document.getElementById('listaInCorso').scrollLeft += 1200;
};

var strCards = "";
if(cantInCorso.length <= 5){
    document.getElementById("prevInCorso").style.visibility = "hidden";
    document.getElementById("nextInCorso").style.visibility = "hidden";
}
for(let i=0; i<cantInCorso.length; i++){
    if(i == 0){
        strCards += '<div class="card" id="card1InCorso"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantInCorso[i].descrizione+'</p></div></div>'
    }
    else{
        strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantInCorso[i].descrizione+'</p></div></div>'
    }
}
document.getElementById("listaInCorso").innerHTML += strCards;

