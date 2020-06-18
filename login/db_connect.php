<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "caravan";
// ("localhost", "admin", "admin", "caravan")
// ("sql3.freesqldatabase.com:3306", "sql3346942", "4Pt5Hh9qtW", "sql3346942")
$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;

