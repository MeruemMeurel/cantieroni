<?php
//Headers
header('Access-Controll-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/PostDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio il post
$post = new PostDB($db);

//Query Post
$result = $post->read();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
	//Array Post
	$post_arr = array();
	$post_arr['data'] = array();

	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$post_item = array(
			'id' => $id,
			'id_utente' => $id_utente,
			'ora_post' => $ora_post,
			'id_attivita' => $id_attivita
		);

		array_push($post_arr['data'],$post_item);
	}

	echo json_encode($post_arr);
}else {
	echo json_encode(
		array('message' => 'Nessun post trovato')
	);
}

?>