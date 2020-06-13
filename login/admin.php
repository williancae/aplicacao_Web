<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão enviar
if (isset($_POST['btn-entrar'])) :
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if (isset($_POST['lembrar-senha'])) :
		setcookie('login', $login, time() + 3600);
		setcookie('senha', md5($senha), time() + 3600);
	endif;

	if (empty($login) or empty($senha)) :
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else :
		$sql = "SELECT login FROM admin WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if (mysqli_num_rows($resultado) > 0) :
			$senha = md5($senha);
			$sql = "SELECT * FROM admin WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);

			if (mysqli_num_rows($resultado) == 1) :
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: admin/admin.php');
			else :
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else :
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>

<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>

<body>

	<h1> Login </h1>
	<?php  // Retirar do codigo
	if (!empty($erros)) :
		foreach ($erros as $erro) :
			echo $erro;
		endforeach;
	endif;
	?>
	<hr>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Login: <input required type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
		Senha: <input required type="password" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
		Lembrar senha: <input type="checkbox" name="lembrar-senha">
		<button type="submit" name="btn-entrar"> Entrar </button>
	</form>


</body>

</html>