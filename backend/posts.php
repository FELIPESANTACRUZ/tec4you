  
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tecfouryou";

//criando a conexão

$conn = mysqli_connect($servername, $username, $password, $database);

// verfificando a conexão
if (!$conn) {
  die("A conexão ao BD falhou: " . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['peca'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $peca = $_POST['peca'];
 

  // echo $nome . $msg; //Testando meu BD do formulário

  // $sql = "insert into comentarios(nome,msg) values ("beto","Olá como vai?")"; //exemplo de inserção explicita de values

  $sql = "insert into solicitacoes(nome,email,marca,modelo,peca) values ('$nome',' $email', '  $marca', '$modelo', ' $peca')";
  $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="stylesheet" href="./CSS/estilo.css">
  <script src="./JS/funcoes.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

  
  <div class="container">
    <header>
      <h2>Contato</h2>
      <hr>
    </header>
  </div>

  <!-- <div class="contato">
    <p><img width="70px" src="./Image/email.jpg" alt="webmaster" width="40px"><br>
      contato@Fullstackeletro.com</p>
    <p><img src="./Image/whatsapp_logo_png_transparente.png" width="120px"><br>
      (11) 99999-9999</p>
  </div> -->

  <div class="container">
  <div class="row">
    <div class="col">
      <div class="imagememail">
    <img src="./Image/imagem_certa_contatos.png" alt="contatos">
    
      <div class="col">
    <div class="row">
    <b>contato@Fullstackeletro.com</b>
    </div>
    <div class="row">
    <b>(11) 99999-9999</b>
    </div>
    </div>
  </div>
  </div>
  <br><br>

 <!--FAZENDO NOVO FORMULÁRIO -->
 <div class="container">
  <form action="" method="post">
  <h3>Dúvidas,Elogios ou Sugestões:</h3><br>
<div class="form-group">
    Nome :<br>
    <input type="text" name="nome" class="form-control" aria-describedby="nome" placeholder="Digite seu nome">
    <small id="nome" class="form-text text-muted">Identificação não obrigatória.</small><br>
    Deixe sua mensagem :
    <input type="text" class="form-control" name="msg" placeholder="Dúvidas,Elogios ou Sugestões"><br>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Autorizo a publicação de meu comentário no site da Full Stack Eletro LTDA.</label><br><br>
    <input type="submit" name="submit" value="Enviar"><br>
  </div>
</form>
  
  

<br><br><hr>

  <?php

  // consultando tabela banco de dados
  $sql = "select * from comentarios";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
      echo "Data: ", $rows['data'], "<br>";
      echo "Nome: ", $rows['nome'], "<br>";
      echo "Mensagem: ", $rows['msg'], "<br>";
      echo "<hr>";
    }
  } else {
    echo "Nenhum comentário ainda!";
  }

  ?>
</div>

  <br><br><br><br><br>
  <br><br><br><br><br>

  <div class="container">
  <footer id="rodape">
    <p id="formas_pagamento">Formas de pagamento</p>
    <img src="./Image/formasdepagamento.jpeg" alt="formas de pagamento" width="300px">
    <p>&copy;Recode Pro</p>
  </footer>
  </div>
</body>

</html>