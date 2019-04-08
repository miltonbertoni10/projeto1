<?php
include("../Includes/variaveis.php");
include("../Class/ClassConexao.php");

$crud = new ClassCrud();
$crud->insertDB("cadastro", "?,?,?,?",array($Id,$Nome,$Sexo,$Cidade));
echo "Cadastro realizado com sucesso!";