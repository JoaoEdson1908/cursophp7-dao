<?php 

	require_once("config.php");

//Carrega 1 usuario
	//$root = new Usuario()
	//$root->loadById(5);
	//echo $root;

//Carrega lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

//Carrega lista buscada de logins
	//$search = Usuario::search("o");
	//echo json_encode($search);

//Carregando usuario autenticado
	$usuarios = new Usuario();
	$usuarios->login("test", "123456");

	echo $usuarios;
 ?> 