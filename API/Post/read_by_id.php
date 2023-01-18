<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');

include_once '../../Database/Database.php';
include_once '../../modelliDB/PostDB.php';


//Istanzio il DB
$database= new Database();
$db = $database->connect();

//Istanzio il post
$post = new PostDB($db);

//Get ID
$app = isset($_GET['id']) ? $_GET['id'] : die();
$post->id = $app;

//Get post
$post->read_by_id();

//Create array
$post_arr = array(
	'id' => $post->id,
	'id_utente' => $post->id_utente,
	//'ora_post' => $post->ora_post,
	'descrizione' => $post->descrizione,
	'id_cantiere' => $post->id_cantiere
);

//Make JSON
print_r(json_encode($post_arr));
?>