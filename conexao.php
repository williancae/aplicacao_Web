<?php	
// >>>>>>>>>>>>>>>>>>>>>>>>>>> Estabelecendo conexao banco	
function abrirBanco()	
{
    //  Local
    $conexao = mysqli_connect("localhost", "root", "root", "caravan");
    return $conexao;
}
// >>>>>>>>>>>>>>>>>>>>>>>>>>> Estabelecendo conexao banco	

// 	
// 	
// 	

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Banco Paris	
if ($_POST['paris'] == "inserir") {	
    eventoParis();	
}	
function eventoParis()	
{	
    $banco = abrirBanco();	

    // echo "Conexão realizada com sucesso";	
    $sql = "INSERT INTO paris(data, evento, local)" .	
        "VALUES ('{$_POST["data"]}', '{$_POST["evento"]}', '{$_POST["local"]}')";	
    $banco->query($sql);	
    $banco->close();	
    header("Location:admin/adminParis.php");	
}	


function selectParis()	
{	
    $banco = abrirBanco();	
    $sql = "SELECT  * FROM paris ORDER BY id desc";	
    $resultado = $banco->query($sql);	
    while ($row = mysqli_fetch_array($resultado)) {	
        $paris[] = $row;	
    }	
    return $paris;	
}	
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Conecatar Banco Paris	

// 	
// 	
// 	

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Conectar Banco Dublin	
function eventoDublin()	
{	
    $banco = abrirBanco();	

    // echo "Conexão realizada com sucesso";	
    $sql = "INSERT INTO dublin(data, evento, local)" .	
        "VALUES ('{$_POST["data"]}', '{$_POST["evento"]}', '{$_POST["local"]}')";	
    $banco->query($sql);	
    $banco->close();	
    header("Location:admin/adminDublin.php");	
}	

function selectDublin()	
{	
    $banco = abrirBanco();	
    $sql = "SELECT  * FROM dublin ORDER BY id desc";	
    $resultado = $banco->query($sql);	
    while ($row = mysqli_fetch_array($resultado)) {	
        $dublin[] = $row;	
    }	
    return $dublin;	
}	
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Conectar Banco Dublin	

// 	
//	
//	

//  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Conectar Banco California	
if (isset($_POST["california"])) {	
    if ($_POST['california'] == "alterar") {	
        alteraCalifornia();	
    }	
    if ($_POST['california'] == "inserir") {	
        eventoCalifornia();	
    }	
}	

function eventoCalifornia()	
{	
    $banco = abrirBanco(); // --->>-->> Estabelecer conexao com o Banco da TABELA CALIFORNIA	
    $sql = "INSERT INTO california(data, evento, local)" .	
        "VALUES ('{$_POST["data"]}', '{$_POST["evento"]}', '{$_POST["local"]}')";	
    $banco->query($sql);	
    $banco->close();	
    header("Location:admin/adminCalifornia.php");	
}	
function selectCalifornia() // --->>-->> Selecionar toda tabela do banco e trazer seus valores	
{	
    $banco = abrirBanco();	
    $sql = "SELECT  * FROM california ORDER BY id desc";	
    $resultado = $banco->query($sql);	
    while ($row = mysqli_fetch_array($resultado)) {	
        $california[] = $row;	
    }	
    return $california;	
}	
function selectIdCalifornia($id) // -->>--->> Trazer todos os elementos relacionados ao ID	
{	
    $banco = abrirBanco();	
    $sql = "SELECT  * FROM california WHERE id =" . $id;	
    $resultado = $banco->query($sql);	
    $banco->close();	
    $editarCalifornia = mysqli_fetch_assoc($resultado);	
    return $editarCalifornia;	
}	

function alteraCalifornia() // -->>-->> Alterações Realizadas no MODAL De ATUALIZAÇÃO	
{	
    $banco = abrirBanco();	
    $sql = "UPDATE california SET data='{$_POST["data"]}',evento='{$_POST["evento"]}',local='{$_POST["local"]}' WHERE id='{$_POST["id"]}' ";	
    $banco->query($sql);	
    $banco->close();	
    header("Location:admin/adminCalifornia.php");	
}	
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Conectar Banco 

// 
// 

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Login



