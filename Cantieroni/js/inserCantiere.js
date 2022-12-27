var plusPremuto = false;

function nascondiInserimento(){
    document.getElementById('inserCantiere').style.top = "100%";
    document.getElementById('inserCantiere').style.visibility = "hidden";
}

window.addEventListener("click", function(e){
    if(!document.getElementById('inserCantiere').contains(e.target) && plusPremuto == true){
        plusPremuto = !plusPremuto;
        document.getElementById('inserCantiere').style.top = "150%";
        setTimeout(function(){
            document.getElementById('inserCantiere').style.visibility = "hidden";
        }, 300);
    }
    else if(document.getElementById('plusPerAgg').contains(e.target)){
        plusPremuto = !plusPremuto;
    }
});