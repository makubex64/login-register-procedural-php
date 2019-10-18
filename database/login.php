<?php

if (isset($_POST['submit']) || isset($_POST['submit_login'])) {
	error_reporting(E_ALL);
	include 'conexion.php';
	session_start();

	
	$user = $_POST['user'];
	$password = $_POST['password'];
	// $password_hash = password_hash($password, PASSWORD_DEFAULT);

	if (empty($user) && empty($password)) {
		$_SESSION['error_login'] = '*Los campos no pueden estar vacíos';
		$_SESSION['color-error'] = 'danger';
		header('location:../login_index.php?error=empty-field-campos-vacios');
		 exit();
	}elseif (empty($user)) {
		$_SESSION['error_login'] = 'El campo usuario no puede estar vacío';
		$_SESSION['color-error'] = 'danger';
		header('location:../login_index.php?error=empty-user-invalid');
		exit();
	}elseif (empty($password)) {
		$_SESSION['error_login'] = 'La contraseña no puede estar vacía';
		$_SESSION['color-error'] = 'danger';
		header('location:../login_index.php?error=empty-password-invalid');
		exit();
	}else{
		$sql = "select * from user where username = ? or email = ? ";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "<script>alert('Error en la conexion de la base de datos');window.location:'../login_index.php';</script>";
			exit();
		}
		else{
		mysqli_stmt_bind_param($stmt, "ss", $user, $user);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if ($row = mysqli_fetch_assoc($result)) {
			$password_check = password_verify($password, $row['password']);
		if ($password_check == false) {
		$_SESSION['error_login'] = 'Error al ingresar la contraseña';
		$_SESSION['color-error'] = 'danger';
		header('location:../login_index.php?error=password-invalid-database-error');
			exit();

		}elseif ($password_check == true) {
		$_SESSION['user_id'] = $row['username'];
		// $_SESSION['nombre_usuario'] = $row['username'];
		echo "<script>alert('Iniciando sesión :)');window.location='../portal.php';</script>";
		exit(); 

		}
	  }
	}
  }
}
	

