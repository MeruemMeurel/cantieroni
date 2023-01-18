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

//Make JSON
print_r(json_encode($post->read_author_user()));
?>