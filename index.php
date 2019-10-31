<?php

require_once("config.php");

/*$sql = new Sql();

$root = new Usuario();
$root->loadById(12);

echo $root;*/

/*$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*$lista = Usuario::getList();

echo json_encode($lista);*/

/*$search = Usuario::search('ad');

echo json_encode($search);*/

/*$usuario = new Usuario();
$usuario->login("root", "root");

echo $usuario;*/

/*$aluno = new Usuario("aluno_".rand(), md5(rand()));

$aluno->insert();

echo $aluno;*/

/*$usuario = new Usuario();
$usuario->loadById(12);
$usuario->update("professor", md5(rand()));

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(21);
$usuario->delete();

echo $usuario;

?>

<style type="text/css">
	body {
		background-color: #000000;
		color: #FFFFFF;
	}
</style>