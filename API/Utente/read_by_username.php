<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/UtenteDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'utente
$utente = new UtenteDB($db);

//Get username
$app = isset($_GET['username']) ? $_GET['username'] : die();
$utente->username = $app;

//Get utente
$utente->read_by_username();

//Create array
$utente_arr = array(
	'id' => $utente->id,
	'username' => $utente->username,
	'password' => $utente->password,
	'email' => $utente->email,
	'telefono' => $utente->telefono,
	'id_personale' => $utente->id_personale
);

//Make JSON
print_r(json_encode($utente_arr));
?>