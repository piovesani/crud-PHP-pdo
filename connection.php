<?php 

$dbName = "pdo";
$host = "localhost";
$user = "root";
$pass = "";

$pdo = new PDO("mysql:dbname=".$dbName.";host=".$host, $user, $pass);

$sql = $pdo->query('SELECT * FROM usuarios');
$dados = $sql->fetchAll( PDO::FETCH_ASSOC );

?>
