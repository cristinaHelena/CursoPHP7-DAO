<?php

//foreach(PDO::getAvailableDrivers() as $driver) {
//  echo $driver . "<br>";
//}

//phpinfo();

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$conn->beginTransaction();

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES ('user','gfdgs')");
$stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "delete OK!";

//var_dump($results);

?>
