<?php
// Conexão com Banco
$mysqli = new mysqli('localhost','root','root','caravan') or die(mysqli_error($mysqli));

if(isset($_POST['adicionar'])){// Botão  Adicionar Modal
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local']; 

    $mysqli->query("INSERT INTO california (data, evento, local) VALUES('$data', '$evento', '$local')") or 
        die($mysqli->error);
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("")
}