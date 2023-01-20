<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '..\..\Database\Database.php';
include_once '..\..\modelliDB\LavoroDB.php';

//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'oggetto lavoro
$lavoro = new LavoroDB($db);

// Get the raw posted data
$data = json_decode(file_get_contents("php://input"));

$lavoro->id_cantiere=$data->id_cantiere;
$lavoro->id_personale=$data->id_personale;
$lavoro->inizio=$data->inizio;
$lavoro->fine=$data->fine;

if($lavoro->create()) {
	echo json_encode(
		array('message' => 'Dato inserito')
	);
} else {
	echo json_encode(
		array('message' => 'Dato non inserito')
	);
}