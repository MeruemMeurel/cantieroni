
/**
 * 
 * Funzioni di utilità generale
 * 
 */


function setInputFieldValue(id,val) {
    let el = document.getElementById(id);
    if(el) {
        el.value=val;
        return true;
    }
    return false;
}

function getInputFieldValue(id,val) {
    let el = document.getElementById(id);
    if(el) {        
        return el.value;
    }
    return null;
}
