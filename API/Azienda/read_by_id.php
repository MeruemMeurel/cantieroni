<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/AziendaDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'azienda
$azienda = new AziendaDB($db);

//Get ID
$app = isset($_GET['id']) ? $_GET['id'] : die();
$azienda->id = $app;

//Get azienda
$azienda->read_by_id();

//Create array
$azienda_arr = array(
	'id' => $azienda->id,
	'nome' => $azienda->nome,
	'indirizzo' => $azienda->indirizzo,
	'citta' => $azienda->citta,
	'provincia' => $azienda->provincia,
	'partita_iva' => $azienda->partita_iva
);

//Make JSON
print_r(json_encode($azienda_arr));
?>