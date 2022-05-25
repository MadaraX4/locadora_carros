<?php
$servername = "eyvqcfxf5reja3nv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "om21a5orqzdkyry0";
$password = "jrfspjwoqgsd07if";
$dbname = "bv2ph7m6e9xtwvr5";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO cliente (nome,email)
  VALUES ('Rafael de Sousa', 'lordtrevas1998@gmail.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Cadastro realizado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "-Erro 404:<br>" . $e->getMessage();
}

$conn = null;
?>
