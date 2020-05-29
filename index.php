<?php

require_once("config.php");


//Carrega um usuário
//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();

///echo json_encode($search);

/*$aluno = new Usuario();

$aluno-> setDeslogin("aluno");
$aluno->setDessenha("@luno");

$aluno-> insert();

echo $aluno;*/
$usuario = new Usuario();

$usuario ->loadbyId(8);

$usuario-> update("professor", "paunocu");

echo "objeto";
?>