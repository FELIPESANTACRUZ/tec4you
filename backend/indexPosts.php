  
<?php


require "./Models/posts.php";


header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a API
header("Content-type: application/json");   //Indicação de arquivo JSON 

$solicitacoes = Solicitacoes::getAll();


echo json_encode($solicitacoes);

?>