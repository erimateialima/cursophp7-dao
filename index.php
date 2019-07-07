<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(1);

echo $usuario;
/*
echo "<br>";
echo "<br>";

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>