<?php
    //HEaders
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application:json');

    include_once '../auth.php'; // Supporto per l'autenticazione utente

    include_once '../../Database/Database.php';
    include_once '../../modelliDB/UtenteDB.php';

    $me=auth_checkUser(); // verifico se utente autorizzato


    //Istanzio il DB
    $database= new Database();
    $db = $database->connect();

    //Istanzio l'utente
    $utente = new UtenteDB($db);

    // GET ID
    $utente->id = $me['id'];

    //Get utente
    $utente->read_single();

    //Creo array
    $utente_arr = array(
        'id' => $utente->id,
        'username' => $utente->username,
        'password' => $utente->password,
        'email' => $utente->email,
        'telefono' => $utente->telefono,
        'id_personale' => $utente->id_personale
    );

    //Creo il JSON
    print_r(json_encode($utente_arr));


?>
