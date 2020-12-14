
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tecfouryou";

$tabela = $_GET['table'];
//criando a conexão

$conn = mysqli_connect($servername, $username, $password, $database);

// verfificando a conexão
if (!$conn) {
  die("A conexão ao BD falhou: " . mysqli_connect_error());
}

setlocale(LC_MONETARY, 'pt-BR');

 // consultando tabela banco de dados
 $sql = "select * from $tabela";
 $result = $conn->query($sql);


// echo $result->fetch_all();


print_r (json_encode( $result->fetch_all(MYSQLI_ASSOC) ));

mysqli_close($conn);


?>