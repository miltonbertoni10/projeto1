<?php
if (isset($_POST['id'])) {
	$Id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['id'])) {
	$Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Id = 0;
}

if (isset($_POST['nome'])) {
	$Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['nome'])) {
	$Nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Nome = "";
}

if (isset($_POST['sexo'])) {
	$Sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['sexo'])) {
	$Sexo = filter_input(INPUT_GET, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Sexo = "";
}

if (isset($_POST['cidade'])) {
	$Cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['cidade'])) {
	$Cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Cidade = "";
}