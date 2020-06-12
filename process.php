<?php

session_start();
// Conexão com Banco
$mysqli = new mysqli('localhost','root','root','caravan') or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$data = "";
$evento = "";
$local = "";

// ============================== California
if(isset($_POST['adicionar'])){// Botão  Adicionar Modal
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];

    $mysqli->query("INSERT INTO california (data, evento, local) VALUES('$data', '$evento', '$local')") or 
        die($mysqli->error);
    
    $_SESSION['message'] = "Cadastro Realizado com Sucesso";
    $_SESSION['msg_type'] = "success";
    header("location: adminDublin.php");
}

if(isset($_GET['delete'])){ //Deletar Do Banco
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM california WHERE id=$id") or die($mysqli->error);
    
    $_SESSION['message'] = "Evento Deletado";
    $_SESSION['msg_type'] = "danger";
    header("location: adminDublin.php");
}

if(isset($_GET['edit'])){ // pegando o ID
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM california WHERE id=$id ") or die($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $data = $row['data'];
        $evento = $row['evento'];
        $local = $row['local'];
    }
}

if (isset($_POST['update'])){ //alterando Formulario
    $id = $_POST['id'];
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];
    
    $mysqli->query("UPDATE  california SET data='$data', evento='$evento', local='$local' WHERE id=$id") or die($mysqli->error);
    var_dump($local);
    $_SESSION['message'] = "Alteração feita";
    $_SESSION['msg_type'] = "success";
    header("location: adminDublin.php");
}
// ============================== California


// ##################################   Dublin     #############################'

// ============================== Dublin
if(isset($_POST['adicionar'])){// Botão  Adicionar Modal
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];

    $mysqli->query("INSERT INTO dublin (data, evento, local) VALUES('$data', '$evento', '$local')") or 
        die($mysqli->error);
    
    $_SESSION['message'] = "Cadastro Realizado com Sucesso";
    $_SESSION['msg_type'] = "success";
    header("location: adminDublin.php");
}

if(isset($_GET['delete'])){ //Deletar Do Banco
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM dublin WHERE id=$id") or die($mysqli->error);
    
    $_SESSION['message'] = "Evento Deletado";
    $_SESSION['msg_type'] = "danger";
    header("location: adminDublin.php");
}

if(isset($_GET['edit'])){ // pegando o ID
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM dublin WHERE id=$id ") or die($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $data = $row['data'];
        $evento = $row['evento'];
        $local = $row['local'];
    }
}

if (isset($_POST['update'])){ //alterando Formulario
    $id = $_POST['id'];
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];
    
    $mysqli->query("UPDATE  dublin SET data='$data', evento='$evento', local='$local' WHERE id=$id") or die($mysqli->error);
    var_dump($local);
    $_SESSION['message'] = "Alteração feita";
    $_SESSION['msg_type'] = "success";
    header("location: adminDublin.php");
}
// ============================== California



// ##################################   Paris     #############################'



// ============================== Paris
if(isset($_POST['adicionar'])){// Botão  Adicionar Modal
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];

    $mysqli->query("INSERT INTO paris (data, evento, local) VALUES('$data', '$evento', '$local')") or 
        die($mysqli->error);
    
    $_SESSION['message'] = "Cadastro Realizado com Sucesso";
    $_SESSION['msg_type'] = "success";
    header("location: adminParis.php");
}

if(isset($_GET['delete'])){ //Deletar Do Banco
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM paris WHERE id=$id") or die($mysqli->error);
    
    $_SESSION['message'] = "Evento Deletado";
    $_SESSION['msg_type'] = "danger";
    header("location: adminParis.php");
}

if(isset($_GET['edit'])){ // pegando o ID
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM paris WHERE id=$id ") or die($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $data = $row['data'];
        $evento = $row['evento'];
        $local = $row['local'];
    }
}

if (isset($_POST['update'])){ //alterando Formulario
    $id = $_POST['id'];
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    $local = $_POST['local'];
    
    $mysqli->query("UPDATE  paris SET data='$data', evento='$evento', local='$local' WHERE id=$id") or die($mysqli->error);
    var_dump($local);
    $_SESSION['message'] = "Alteração feita";
    $_SESSION['msg_type'] = "success";
    header("location: adminParis.php");
}
// ============================== California


