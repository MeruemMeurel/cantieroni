<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '..\..\Database\Database.php';
include_once '..\..\modelliDB\UtenteDB.php';

//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'oggetto Utente
$utente = new UtenteDB($db);

// Get the raw posted data
$data = json_decode(file_get_contents("php://input"));

$utente->username = $data->username;
$utente->password = $data->password;
$utente->email = $data->email;
$utente->telefono = $data->telefono;
$utente->id_personale = $data->id_personale;
$utente->token = md5(uniqid()); // Creo un token random per il login

if($utente->create()) {
	echo json_encode(
		array('message' => 'Utente creato')
	);
} else {
	echo json_encode(
		array('message' => 'Utente non creato')
	);
}