<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/AziendaDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'azienda
$azienda = new AziendaDB($db);

//Get iva
$app = isset($_GET['partita_iva']) ? $_GET['partita_iva'] : die();
$azienda->partita_iva = $app;

//Get azienda
$azienda->read_by_iva();

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