<?php
    
//Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application:json');
    
    include_once '../auth.php'; // Supporto per l'autenticazione utente

    include_once '../../Database/Database.php';
    include_once '../../modelliDB/UtenteDB.php';


    //Istanzio il DB
    $database= new Database();
    $db = $database->connect();

    //Istanzio l'attività
    $utente = new UtenteDB($db);


    //Get credenziali
    $username = isset($_GET['username']) ? $_GET['username'] : die();
    $password = isset($_GET['password']) ? $_GET['password'] : die();


    $utente->username = $username;

    //Get utente
    if(!$utente->read_by_username()) {
        header("Unauthorized 1",false,401);
        die(); 
    }


    //Create array
    $utente_arr = array(
        'id' => $utente->id,
        'username' => $utente->username,
        'password' => $utente->password,
        'email' => $utente->email,
        'telefono' => $utente->telefono,
        'id_personale' => $utente->id_personale,
        'token' => $utente->token
    );
    if($utente_arr['password']!=$password) {
        header("Unauthorized 2",false,401);
        die();
    }

    // Crea la sessione per l'utente
    auth_loginUser($utente_arr);

    die(json_encode($utente_arr));

