<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$root = new Usuario();

$root->loadById(3);

echo $root;




 ?>