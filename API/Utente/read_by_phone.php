<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/UtenteDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'utente
$utente = new UtenteDB($db);

//Get telefono
$app = isset($_GET['telefono']) ? $_GET['telefono'] : die();
$utente->telefono = $app;

//Get utente
$utente->read_by_phone();

//Create array
$utente_arr = array(
	'id' => $utente->id,
	'username' => $utente->username,
	'password' => $utente->password,
	'email' => $utente->email,
	'telefono' => $utente->telefono,
);

//Make JSON
print_r(json_encode($utente_arr));
?>