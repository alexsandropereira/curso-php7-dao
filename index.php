<?php

require_once("config.php");

//Listando usuários em json
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//Localizando usuário por Id
$root = new Usuario();
$root->loadById(3);
echo $root;

?>