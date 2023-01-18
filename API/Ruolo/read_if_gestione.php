<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/RuoloDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio il ruolo
$ruolo = new RuoloDB($db);

//Query Cantiere
$result = $ruolo->read_if_gestione();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
	//Array Cantiere
	$ruolo_arr = array();
	$ruolo_arr['data'] = array();

	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$ruolo_item = array(
			'id' => $id,
			'descrizione' => $descrizione,
			'is_admin' => $is_admin,
			'gestione_cantieri' => $gestione_cantieri
		);

		array_push($ruolo_arr['data'],$ruolo_item);
	}

	echo json_encode($ruolo_arr);
}else {
	echo json_encode(
		array('message' => 'Nessun ruolo trovato')
	);
}

?>