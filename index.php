<?php

require_once("config.php");
//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Jo");

//echo json_encode($search);

//carrega um usuario usando o login e a senha

$usuario = new Usuario();
$usuario->login("root", "123");

echo $usuario;

?>