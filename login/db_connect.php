<?php
// Conexão com banco de dados
$servername = "sql3.freesqldatabase.com:3306";
$username = "sql3346942";
$password = "4Pt5Hh9qtW";
$db_name = "sql3346942";
// ("sql3.freesqldatabase.com:3306", "sql3346942", "4Pt5Hh9qtW", "sql3346942")
$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;

