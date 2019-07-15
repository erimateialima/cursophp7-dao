<?php

require_once("config.php");

//Carrega um usuário
//$usuario = new Usuario();
//$usuario->loadById(1);
//echo $usuario;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo gonhin
//$search = Usuario::search("user");
//echo json_encode($search);

//carrega o usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;

/*
echo "<br>";
echo "<br>";

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>