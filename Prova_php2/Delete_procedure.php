<?php
require_once('Cadastro.php');

$objeto1 = new Banco(); 
$delete = $_POST['id'];



if ($objeto1-> delete_aluno($delete)){
    print("Apagado com sucesso ! ...");
};

unset($objeto1);

$objeto1 = new Banco(); 