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

/*$usuario = new Usuario();
$usuario->login("wellington","apocalipse17");
echo $usuario;// aqui é imprimido na tela o login que contem este usuario e a senha acima!*/ 

/* criando novo usuario
$cliente = new Usuario("emanuelle","pro555");
//$cliente->setDeslogin("Emanuelle"); <-- outa forma de fazer a inserção de login e senha
//$cliente->setDessenha("pre777"); <---

$cliente->insert();
echo $cliente;// aqui é inserido um novo usuario com senha toda vez que atualizar a pasta vai gerar novo usuario commesmo login e senha so mudando o id! teria que fazer um if pra não repetir !*/

// update com DAO
/*$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("Deivison","De321");
echo $usuario;// atualizando os dados dos usuarios*/

//DELETE APAGANDO Usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>


