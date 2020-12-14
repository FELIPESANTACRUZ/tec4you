
<?php

require "./Models/posts.php";




$solicitacoes = new Solicitacoes;

$solicitacoes -> nome = $_POST['nome'];
$solicitacoes -> msg = $_POST['email'];
$solicitacoes -> msg = $_POST['marca'];
$solicitacoes -> msg = $_POST['modelo'];
$solicitacoes -> msg = $_POST['peca'];


$validate = $solicitacoes -> registerSolic();


if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}



// echo json_encode($comentarios);

