<?php

require_once("config.php");


//Carrega um usuário
//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();

///echo json_encode($search);

$usuario = new Usuario();
$usuario->login("root", "5sadfg") ;

echo $usuario;
?>