<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '..\..\Database\Database.php';
include_once '..\..\modelliDB\AziendaDB.php';

//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'oggetto Azienda
$azienda = new AziendaDB($db);

// Get the raw posted data
$data = json_decode(file_get_contents("php://input"));

$azienda->nome = $data->nome;
$azienda->indirizzo = $data->indirizzo;
$azienda->citta = $data->citta;
$azienda->provincia = $data->provincia;
$azienda->partita_iva = $data->partita_iva;

if($azienda->create()) {
	echo json_encode(
		array('message' => 'Azienda creata')
	);
} else {
	echo json_encode(
		array('message' => 'Azienda non creata')
	);
}