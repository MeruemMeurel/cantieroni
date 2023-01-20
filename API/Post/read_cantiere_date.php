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
$id_cantiere = isset($_GET['id_cantiere']) ? $_GET['id_cantiere'] : die();
$ora_post = isset($_GET['ora_post']) ? $_GET['ora_post'] : die();
$post->id_cantiere = $id_cantiere;
$post->ora_post = $ora_post;

//Query cantiere
$result = $post->read_from_cantiere_date();

$num = $result->rowCount();

//Controllo i risultati della query
if($num > 0){
    //Array Cantiere
    $post_arr = array();
    $post_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $post_item = array(
            'id' => $id,
            'id_utente' => $id_utente,
            'ora_post' => $ora_post,
            'descrizione' => $descrizione,
            'id_cantiere' => $id_cantiere
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
