<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/PersonaleDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio il membro del personale
$personale = new PersonaleDB($db);

//Get email
$app = isset($_GET['telefono']) ? $_GET['telefono'] : die();
$personale->telefono = $app;

//Get personale
$personale->read_by_phone();

//Create array
$personale_arr = array(
	'id' => $personale->id,
	'nome' => $personale->nome,
	'cognome' => $personale->cognome,
	'email' => $personale->email,
	'telefono' => $personale->telefono,
	'indirizzo' => $personale->indirizzo,
	'citta' => $personale->citta,
	'provincia' => $personale->provincia,
	'id_ruolo' => $personale->id_ruolo,
	'id_azienda' => $personale->id_azienda,
);

//Make JSON
print_r(json_encode($personale_arr));
?>