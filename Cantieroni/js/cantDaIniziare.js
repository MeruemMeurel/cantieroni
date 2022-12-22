const prevDaIniziare = document.getElementById('prevDaIniziare');
const nextDaIniziare = document.getElementById('nextDaIniziare');

prevDaIniziare.onclick = () => {
    document.getElementById('listaDaIniziare').scrollLeft -= 1200;
};

nextDaIniziare.onclick = () => {
    document.getElementById('listaDaIniziare').scrollLeft += 1200;
};

var strCards = "";
if(cantDaIniziare.length <= 5){
    document.getElementById("prevDaIniziare").style.visibility = "hidden";
    document.getElementById("nextDaIniziare").style.visibility = "hidden";
}
for(let i=0; i<cantDaIniziare.length; i++){
    if(i == 0){
        strCards += '<div class="card" id="card1DaIniziare"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantDaIniziare[i].descrizione+'</p></div></div>'
    }
    else{
        strCards += '<div class="card"><img class="card-img-top" src="../img/cantiere.jpg" alt="Card image cap"><div class="card-body"><p class="card-text">'+cantDaIniziare[i].descrizione+'</p></div></div>'
    }
}
document.getElementById("listaDaIniziare").innerHTML += strCards;