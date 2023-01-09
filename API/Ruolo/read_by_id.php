<?php
    //Headers
    header('Access-Controll-Allow-Origin: *');
    header('Content-Type: application:json');

    include_once '../../Database/Database.php';
    include_once '../../modelliDB/RuoloDB.php';


    //Istanzio il DB
    $database= new Database();
    $db = $database->connect();

    //Istanzio il ruolo
    $ruolo = new RuoloDB($db);

    //Get ID
    $app = isset($_GET['id']) ? $_GET['id'] : die();
    $ruolo->id = $app;

    //Get ruolo
    $ruolo->read_by_id();

    //Create array
    $ruolo_arr = array(
        'id' => $ruolo->id,
        'descrizione' => $ruolo->descrizione,
        'is_admin' => $ruolo->is_admin,
        'gestione_cantieri' => $ruolo->gestione_cantieri
    );

    //Make JSON
    print_r(json_encode($ruolo_arr));
?>