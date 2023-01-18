<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '..\..\Database\Database.php';
include_once '..\..\modelliDB\PersonaleDB.php';

//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'oggetto Personale
$personale = new PersonaleDB($db);

// Get the raw posted data
$data = json_decode(file_get_contents("php://input"));

$personale->nome = $data->nome;
$personale->cognome = $data->cognome;
$personale->email = $data->email;
$personale->telefono = $data->telefono;
$personale->indirizzo = $data->indirizzo;
$personale->citta = $data->citta;
$personale->provincia = $data->provincia;
$personale->id_ruolo = $data->id_ruolo;
$personale->id_azienda = $data->id_azienda;

//Create personale
if($personale->create()) {
	echo json_encode(
		array('message' => 'Personale creato')
	);
} else {
	echo json_encode(
		array('message' => 'Personale non creato')
	);
}