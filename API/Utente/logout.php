<?php
    
//Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application:json');
    
    include_once '../auth.php'; // Supporto per l'autenticazione utente

    auth_logoutUser();
