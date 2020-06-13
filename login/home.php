<?php
// Conexão
require_once 'db_connect.php';
// Sessão
session_start();
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;
?>

<html>
<head>
	<title>Página restrita</title>
	<meta charset="utf-8">
</head>
<body>
<h1> Pagina Administrativa</h1>
<a href="logout.php">Sair</a>
</body>
</html>