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
//$usuario = new Usuario();
//$usuario->login("root", "45678");
//echo $usuario;

//Inserindo registro no BD através de procedure no Banco, usando construtor
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterar um usuário
//$usuario = new Usuario();
//$usuario->loadById(4);
//$usuario->update("professor", "9999");
//echo $usuario;

//Deletando um usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>