<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application:json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include_once '..\..\Database\Database.php';
include_once '..\..\modelliDB\PostDB.php';

//Istanzio il DB
$database = new Database();
$db = $database->connect();

//Istanzio l'oggetto Post
$post = new PostDB($db);

// Get the raw posted data
$data = json_decode(file_get_contents("php://input"));


$post->id_utente = $data->id_utente;
$post->ora_post =  (empty($data->ora_post)?Date('Y-m-d H:i:s'):$data->ora_post);
$post->id_cantiere = $data->id_cantiere;
$post->descrizione = $data->descrizione;


if ($post->create()) {
    echo json_encode(
        array('message' => 'Post creato')
    );
} else {
    echo json_encode(
        array('message' => 'Post non creato')
    );
}
