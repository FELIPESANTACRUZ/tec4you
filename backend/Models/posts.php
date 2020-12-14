
<?php

require "Connection.php";

class Solicitacoes
{
    public $id;
    public $nome;
    public $email;
    public $marca;
    public $modelo;
    public $peca;
    public $data;
   

    public static function getAll()
    {
        $connection =  Connection::getDb();

        
        
        $stmt = $connection->query("SELECT * FROM solicitacoes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function registerSolic(){
        $connection = Connection::getDb();

        $sql = $connection -> query("insert into solicitacoes (nome,email,marca,modelo,peca) values ('$this->nome','$this->email', $this->marca, $this->modelo, $this->peca)");

        if ($sql -> rowCount() > 0 ) {
            return true;
        }else {
            return false;
        }


    }
}





?>
