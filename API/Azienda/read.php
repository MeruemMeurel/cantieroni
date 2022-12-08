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

//Query Azienda
$result = $azienda->read();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
	//Array Attività
	$azienda_arr = array();
	$azienda_arr['data'] = array();

	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$azienda_item = array(
			'id' => $id,
			'nome' => $nome,
			'indirizzo' => $indirizzo,
			'citta' => $citta,
			'provincia' => $provincia,
			'partita_iva' => $partita_iva
		);

		array_push($azienda_arr['data'],$azienda_item);
	}

	echo json_encode($azienda_arr);
}else {
	echo json_encode(
		array('message' => 'Nessuna azienda trovata')
	);
}

?>