<?php
    //Headers
    header('Access-Controll-Allow-Origin: *');
    header('Content-Type: application:json');

    include_once '../../Database/Database.php';
    include_once '../../models/Cantiere.php';


    //Istanzio il DB
    $database= new Database();
    $db = $database->connect();

    //Istanzio il cantiere
    $cantiere = new CantiereDB($db);

    //Query Cantiere
    $result = $cantiere->read();

    $num = $result->rowCount();

    //Controllo i risultati della query
    if($num > 0){
        //Array Cantiere
        $cantiere_arr = array();
        $cantiere_arr['data'] = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $cantiere_item = array(
                'id' => $id,
                'nome' => $nome,
                'indirizzo' => $indirizzo,
                'citta' => $citta,
                'provincia' => $provincia,
                'descrizione' => $descrizione,
                'dataInizio' => $dataInizio,
                'dataFine' => $dataFine
            );

            array_push($cantiere_arr['data'],$cantiere_item);
        }

        echo json_encode($cantiere_arr);
    }else {
        echo json_encode(
            array('message' => 'Nessun cantiere trovato')
        );
    }

?>