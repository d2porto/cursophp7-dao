<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);

 ?>