<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../models/Attivita.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'attività
$attivita = new AttivitaDB($db);

//Query Attività
$result = $attivita->read();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
	//Array Attività
	$attivita_arr = array();
	$attivita_arr['data'] = array();

	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$attivita_item = array(
			'id' => $id,
			'inizio' => $inizio,
			'fine' => $fine
		);

		array_push($attivita_arr['data'],$attivita_item);
	}

	echo json_encode($attivita_arr);
}else {
	echo json_encode(
		array('message' => 'Nessuna attivtià trovata')
	);
}

?>