<?php

session_start();
// Conexão com Banco
$mysqli = new mysqli('localhost','root','root','caravan') or die(mysqli_error($mysqli));
$update = false;
$id = 0;
$data = "";
$evento = "";
$local = "";


if(isset($_POST['adicionar'])){// Botão  Adicionar Modal
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];

    $mysqli->query("INSERT INTO california (data, evento, local) VALUES('$data', '$evento', '$local')") or 
        die($mysqli->error);
    
    $_SESSION['message'] = "Cadastro Realizado com Sucesso";
    $_SESSION['msg_type'] = "success";

    header("location: adminCalifornia1.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM california WHERE id=$id") or die($mysqli->error);
    
    $_SESSION['message'] = "Evento Deletado";
    $_SESSION['msg_type'] = "danger";
    header("location: adminCalifornia1.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM california WHERE id=$id") or die($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $data = $row['data'];
        $evento = $row['evento'];
        $local = $row['local'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];

    $mysqli->query("UPDATE california SET data='$data', evento='$evento', local='$local' WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = "Alterado com sucesso";
    $_SESSION['msg_type'] = "Erro ao alterar";

    header("location:adminCalifornia1.php");
}

// if(isset($_POST['update'])){
//     $id = $_POST['id'];
//     $data = $_POST['data'];
//     $local = $_POST['local'];
//     $evento = $_POST['evento'];

//     $result = $mysqli->query("UPDATE california SET (data, evento, local) VALUES('$data', '$evento', '$local') WHERE id = $id") or die($mysqli->error);
//     header("location: adminCalifornia1.php");

// }
