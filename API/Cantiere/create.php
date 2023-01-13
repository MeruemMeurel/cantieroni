<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '..\..\Database\Database.php';
include_once '..\..\modelliDB\CantiereDB.php';

//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'oggetto Cantiere
$cantiere = new CantiereDB($db);

// Get the raw posted data
$data = json_decode(file_get_contents("php://input"));

$cantiere->nome = $data->nome;
$cantiere->indirizzo = $data->indirizzo;
$cantiere->citta = $data->citta;
$cantiere->provincia = $data->provincia;
$cantiere->descrizione = $data->descrizione;
$cantiere->id_capocantiere = $data->id_capocantiere;

if($cantiere->create()) {
	echo json_encode(
		array('message' => 'Cantiere creato')
	);
} else {
	echo json_encode(
		array('message' => 'Cantiere non creato')
	);
}