<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//Carrega um Usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de Usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("cri");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","123456");

//echo $usuario;

//Criando um novo aluno via sp
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun@");
//$aluno->insert();
//echo $aluno;

//Alterando um registro na tabela
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor","$$$$$$%");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);

$usuario->delete();

echo $usuario;

 ?>