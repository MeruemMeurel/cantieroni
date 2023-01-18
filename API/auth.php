<?php


/**
 * Metodo comune di controllo dell'autenticazione
 * 
 * 
 */

session_start();



function auth_checkUser() {
    if(!empty($_SESSION['currentUser'])) {
        return $_SESSION['currentUser'];
    }

    header('Unauthorized - must login',true,401);
    die();
}



function auth_loginUser($currentUser) {
    $_SESSION['currentUser']=$currentUser;
    return true;
}

function auth_logoutUser() {
    $_SESSION['currentUser']=null;
    return true;
}
