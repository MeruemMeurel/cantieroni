<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../models/Personale.php.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio l'oggetto Personale
$personale = new PersonaleDB($db);

//Query Personale
$result = $personale->read();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
	//Array Personale
	$personale_arr = array();
	$personale_arr['data'] = array();

	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$personale_item = array(
			'id' => $id,
			'nome' => $nome,
			'cognome' => $cognome,
			'email' => $email,
			'telefono' => $telefono,
			'indirizzo' => $indirizzo,
			'citta' => $citta,
			'provincia' => $provincia,
			'id_ruolo' => $id_ruolo,
			'id_azienda' => $id_azienda
		);

		array_push($personale_arr['data'],$personale_item);
	}

	echo json_encode($personale_arr);
}else {
	echo json_encode(
		array('message' => 'Nessun membro del personale trovato')
	);
}

?>