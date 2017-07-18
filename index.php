<?php

require_once("config.php");

//Listando usuários em json
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//Localizando usuário por Id loadById
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha (deve ser válido)
$usuario = new Usuario();
$usuario->login("root", "45678");
echo $usuario;



?>