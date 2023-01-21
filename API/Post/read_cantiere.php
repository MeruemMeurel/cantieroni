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
$app = isset($_GET['id_cantiere']) ? $_GET['id_cantiere'] : die();
$post->id_cantiere = $app;


//Query cantiere
$result = $post->read_from_cantiere();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
    //Array Cantiere
    $post_arr = array();
    $post_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        // var_dump($row);
        $post_item = array(
            'id' => $id,
            'id_utente' => $id_utente,
            'ora_post' => $ora_post,
            'descrizione' => $descrizione,
            'id_cantiere' => $id_cantiere,
            'username' => $username,
        );

        array_push($post_arr['data'],$post_item);
    }

    echo json_encode($post_arr);
}else {
    echo json_encode(
        array('data' =>[],
            'message' => 'Nessun post trovato')
    );
}
