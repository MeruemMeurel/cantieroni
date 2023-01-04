<?php
    //Headers
    header('Access-Controll-Allow-Origin: *');
    header('Content-Type: application:json');

    include_once '../../Database/Database.php';
    include_once '../../modelliDB/UtenteDB.php';


    //Istanzio il DB
    $database= new Database();
    $db = $database->connect();

    //Istanzio l'attività
    $utente = new UtenteDB($db);

    //Query attività
    $result = $utente->read();

    $num = $result->rowCount();

    //Controllo i risultati della query
    if($num > 0){
        //Array Attività
        $utente_arr = array();
        $utente_arr['data'] = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $utente_item = array(
                'id' => $id,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'telefono' => $telefono,
                'id_personale' => $id_personale
            );

            array_push($utente_arr['data'],$utente_item);
        }

        echo json_encode($utente_arr);
    }else {
        echo json_encode(
            array('message' => 'Nessun utente trovato')
        );
    }



?>
