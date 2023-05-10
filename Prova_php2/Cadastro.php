<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem dos Cadastros</title>
</head>
<body>
<?php
class Banco {
private $servername = "127.0.0.1";
private $username = "root";private $password = "";
private $dbname="cadastro";
private $conn;
public function __construct() {
try {

$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

 print_r($this->conn);

 $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $e){

 echo $sql . "<br>" . $e->getMessage();

}

}


 public function inserir_aluno($nome, $rg, $telefone, $escola){

 try {
 $sql = "INSERT INTO aluno (nome, rg, telefone, escola )

VALUES ('$nome', '$rg', '$telefone' , '$escola')";

 $this->conn->exec($sql);

 }catch(PDOException $e){

 echo $sql . "<br>" . $e->getMessage();

 }

return True;

 }
  
public function delete_aluno($delete){
    try {
        $sql = "DELETE FROM aluno WHERE $delete=  id";
        
        $this->conn->exec($sql);
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    return True;
}


public function __destruct() {

 $this->fechar_conexao();
 print "DESTRUÍDO: Objeto {$this->conn}\n";

 }



 private function fechar_conexao(){
$this->conn = null;

}

}
?>
</body>
</html>
