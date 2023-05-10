<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
</head>
<?php

require_once('Cadastro.php');
$objeto1 = new Banco();
$nome = $_POST['nome'];
$cpf = $_POST['rg'];
$telefone = $_POST['telefone'];
$esc= $_POST['escola'];



if ($objeto1->inserir_candidato($nome ,$cpf,$telefone, $escola)){

};


unset($objeto1);
$objeto1 = new Banco();

?>
<body>
    <form action="Cadastro.php" method="post">
        <label for="nome"> nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg"><br><br>
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>
        
        <select name="escola" id="escola">
         <option value="Publica">Publica</option>
         <option value="Particular">Particular</option>
        </select>

        <button type="submit" value="Enviar">Cadastrar</button>
    </form>
</body>
</html>
