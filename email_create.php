<?php 

// CONECTANDO COM O BANCO DE DADOS
$dbname = "ocau"; // nome do banco de dados
$dbhost = "localhost"; // local onde está o banco de dados
$dbuser = "root"; // nome do usuário do bando de dados
$dbpass = ""; // senha do usuário do bando de dados

$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

$email = $_REQUEST['email'];
		
// INSERINDO DADOS NO BANCO DE DADOS
$pdo->query("INSERT INTO `lista_emails` (email) VALUES ('$email')"); 
   
header("Location: index.php") 


?>