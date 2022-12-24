const prevConclusi = document.getElementById('prevConclusi');
const nextConclusi = document.getElementById('nextConclusi');

prevConclusi.onclick = () => {
    document.getElementById('listaConclusi').scrollLeft -= 1200;
};

nextConclusi.onclick = () => {
    document.getElementById('listaConclusi').scrollLeft += 1200;
};

var strCards = "";
if(cantConclusi.length <= 5){
    document.getElementById("prevConclusi").style.visibility = "hidden";
    document.getElementById("nextConclusi").style.visibility = "hidden";
}
for(let i=0; i<cantConclusi.length; i++){
    if(i == 0){
        strCards += '<div class="card" id="card1Conclusi"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantConclusi[i].descrizione+'</p></div></div>'
    }
    else{
        strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantConclusi[i].descrizione+'</p></div></div>'
    }
}
document.getElementById("listaConclusi").innerHTML += strCards;