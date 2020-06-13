<?php
// Conexão
require_once 'login/db_connect.php';

// Sessão
session_start();

// Botão enviar
if (isset($_POST['btn-entrar'])) :
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

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




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="frontLogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="frontLogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="frontLogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="frontLogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="frontLogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	



	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/california.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login Admin
				</span>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn" name="btn-entrar">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="frontLogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="frontLogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="frontLogin/vendor/bootstrap/js/popper.js"></script>
	<script src="frontLogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="frontLogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="frontLogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="frontLogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="frontLogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="frontLogin/js/main.js"></script>

</body>
</html>
















<!-- <?php
// Conexão
// require_once 'login/db_connect.php';

// // Sessão
// session_start();

// // Botão enviar
// if (isset($_POST['btn-entrar'])) :
// 	$erros = array();
// 	$login = mysqli_escape_string($connect, $_POST['login']);
// 	$senha = mysqli_escape_string($connect, $_POST['senha']);

// 	if (empty($login) or empty($senha)) :
// 		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
// 	else :
// 		$sql = "SELECT login FROM admin WHERE login = '$login'";
// 		$resultado = mysqli_query($connect, $sql);

// 		if (mysqli_num_rows($resultado) > 0) :
// 			$senha = md5($senha);
// 			$sql = "SELECT * FROM admin WHERE login = '$login' AND senha = '$senha'";
// 			$resultado = mysqli_query($connect, $sql);

// 			if (mysqli_num_rows($resultado) == 1) :
// 				$dados = mysqli_fetch_array($resultado);
// 				mysqli_close($connect);
// 				$_SESSION['logado'] = true;
// 				$_SESSION['id_usuario'] = $dados['id'];
// 				header('Location: admin/admin.php');
// 			else :
// 				$erros[] = "<li> Usuário e senha não conferem </li>";
// 			endif;

// 		else :
// 			$erros[] = "<li> Usuário inexistente </li>";
// 		endif;

// 	endif;

// endif;
?>

<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>

<body>

	<h1> Login </h1>
	<hr>
	<form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Login: <input required type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
		Senha: <input required type="password" name="senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
		<button type="submit" name="btn-entrar"> Entrar </button>
	</form>


</body>

</html> -->