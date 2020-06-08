<?php


if($_POST['california'] == "inserir"){
    eventoCalifornia();
}
if($_POST['paris'] == "inserir"){
    eventoParis();
}
if($_POST['dublin'] == "inserir"){
    eventoDublin();
}
// 
function abrirBanco(){
    $conexao = new mysqli("localhost","root","root","caravan");
    return $conexao;
}



function eventoCalifornia(){
    $banco = abrirBanco();

    // echo "Conexão realizada com sucesso";
    $sql = "INSERT INTO california(data, evento, local)".
        "VALUES ('{$_POST["data"]}', '{$_POST["evento"]}', '{$_POST["local"]}')";
    $banco->query($sql);
    $banco->close();
    header("Location:adminCalifornia.php");
    
}
function eventoParis(){
    $banco = abrirBanco();

    // echo "Conexão realizada com sucesso";
    $sql = "INSERT INTO paris(data, evento, local)".
        "VALUES ('{$_POST["data"]}', '{$_POST["evento"]}', '{$_POST["local"]}')";
    $banco->query($sql);
    $banco->close();
    header("Location:adminParis.php");
}
function eventoDublin(){
    $banco = abrirBanco();

    // echo "Conexão realizada com sucesso";
    $sql = "INSERT INTO dublin(data, evento, local)".
        "VALUES ('{$_POST["data"]}', '{$_POST["evento"]}', '{$_POST["local"]}')";
    $banco->query($sql);
    $banco->close();
    header("Location:adminDublin.php");  
}

function selectParis(){
    $banco = abrirBanco();
    $sql = "SELECT  * FROM paris ORDER BY id desc";
    $resultado = $banco->query($sql);
    while($row = mysqli_fetch_array($resultado)){
        $paris [] = $row;
    }
    return $paris;
}
function selectCalifornia(){
    $banco = abrirBanco();
    $sql = "SELECT  * FROM california ORDER BY id desc";
    $resultado = $banco->query($sql);
    while($row = mysqli_fetch_array($resultado)){
        $california [] = $row;
    }
    return $california;
}
function selectDublin(){
    $banco = abrirBanco();
    $sql = "SELECT  * FROM dublin ORDER BY id desc";
    $resultado = $banco->query($sql);
    while($row = mysqli_fetch_array($resultado)){
        $dublin [] = $row;
    }
    return $dublin;
}

// Verificar conexão com banco
    // if ($banco->connect_error) {
    //     die("Conexão falhou: " . $banco->connect_error."<br>");
    // }else{
    //     echo "Tudo certo";
    // }
