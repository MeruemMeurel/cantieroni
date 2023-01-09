<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/CantiereDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio il cantiere
$cantiere = new CantiereDB($db);

//Get ID
$app = isset($_GET['id']) ? $_GET['id'] : die();
$cantiere->setId($app);

//Get cantiere
$cantiere->read_by_id();

//Create array
$cantiere_arr = array(
	'id' => $cantiere->id,
	'nome' => $cantiere->nome,
	'indirizzo' => $cantiere->indirizzo,
	'citta' => $cantiere->citta,
	'provincia' => $cantiere->provincia,
	'descrizione' => $cantiere->descrizione,
	'id_capocantiere' => $cantiere->id_capocantiere
);

//Make JSON
print_r(json_encode($cantiere_arr));
?>