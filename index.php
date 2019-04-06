<?php
require_once("config.php");
/*$sql= new sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/*$root = new Usuario();// carrega um usuario!
$root->loadById(6); // <-no caso o sexto usuario do banco de dados
echo $root;*/


//carrega uma alista de usuarios ou seja todos os usuarios que estejam na tabela!
//$lista = usuario::getlist();
//echo json_encode($lista);

/*$search = Usuario::search("we");// faz uma busca só com os usuarios com as letras correspondentes e imprimi na tela!
echo json_encode($search);*/

$usuario = new Usuario();
$usuario->login("wellington","apocalipse17");
echo $usuario;// aqui é imprimido na tela o login que contem este usuario e a senha acima!
?>


