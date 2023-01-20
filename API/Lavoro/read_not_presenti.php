<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/LavoroDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio il lavoro
$lavoro = new LavoroDB($db);

//Get nome
$app = isset($_GET['id_cantiere']) ? $_GET['id_cantiere'] : die();
$lavoro->id_cantiere = $app;

$app = isset($_GET['inizio']) ? $_GET['inizio'] : die();
$lavoro->inizio = $app;

//Query Lavoro
$result = $lavoro->read_not_presenti();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
    //Array Lavoro
    $lavoro_arr = array();
    $lavoro_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $lavoro_item = array(
            'id' => $id,
            'nome' => $nome,
            'cognome' => $cognome,
            'email' => $email,
            'telefono' => $telefono,
            'indirizzo' => $indirizzo,
            'citta' => $citta,
            'provincia' => $provincia,
            'id_ruolo' => $id_ruolo,
            'id_azienda' => $id_azienda
        );

        array_push($lavoro_arr['data'],$lavoro_item);
    }

    echo json_encode($lavoro_arr);
}else {
    echo json_encode(
        array('message' => 'Nessun risultato trovato')
    );
}
