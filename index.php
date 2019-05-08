<?php 

	require_once("config.php");

	//Retorna um unico usuário

	// $root = new Usuario();

	// $root->loadById(2);

	// echo $root;

	//Retorna uma lista de usuários

	//$lista = Usuario::getList();

	//echo json_encode($lista);

	//Carrega uma lista de usuarios através de um campo de busca

	//$search = Usuario::search("al");
	//echo json_encode($search);

	//Carrega um usuário autenticado

	//$user = new Usuario();
	/*$user->login("Paloma", "654321");
	echo $user;*/

	/*Comando inserir no database*/


	/*
		Insere novos usuários no Banco de Dados
	$aluno = new Usuario("lombra", "marleyBrown321");

	$aluno->insert();
	echo $aluno;*/

	/*
	Altera um usuario na tablea
	$usuario = new Usuario();
	$usuario->loadById(4);
	$usuario->update("Professor", "!@#$%");

	echo $usuario;*/

	$usuario = new Usuario();;
	$usuario->loadById(3);
	$usuario->delete();
	echo $usuario;



 ?>