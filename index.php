<?php

require_once("config.php");

/*CAREGA UM ÚNICO USUÁRIO*/
//$usuario = new Usuario();
//$usuario->loadById(1);
//echo $usuario;

/*CARREGA UMA LISTA DE USUÁRIOS*/
//$lista = Usuario::getList();
//echo json_encode($lista);

/*CARREGA UMA LISTRA DE USUÁRIOS BUSCANDO PELO LOGIN*/
//$search = Usuario::search("user");
//echo json_encode($search);

/*CARREGA USUÁRIO USANDO O LOGIN E SENHA*/
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

/*INSERE UM NOVO USUÁRIO*/
//$aluno = new Usuario("professor", "123456");
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("12345");
//$aluno->insert();
//echo $aluno;

/*ALTERAR USUÁRIO*/
//$usuario = new Usuario();
//$usuario->loadById(3);
//$usuario->update("professor","12345");
//echo $usuario;

/*DELETAR USUÁRIO*/
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;

/*
echo "<br>";
echo "<br>";

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>