<?php
require_once('Cadastro.php');

$objeto1 = new Banco(); 
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$escola= $_POST['escola'];

if ($objeto1->inserir_aluno($nome ,$rg,$telefone, $escola)){
    print("Cadastrado com sucesso ! ...");
};

unset($objeto1);

$objeto1 = new Banco(); 
?>
