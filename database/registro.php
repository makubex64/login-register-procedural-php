<?php

if (isset($_POST['register'])) {
	error_reporting(E_ALL);
	require 'conexion.php';
	session_start();

	$user = $_POST['user'];
	$nombre_completo = $_POST['nombre_completo'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$password_hash = password_hash($password, PASSWORD_DEFAULT);

	if (empty($user) && empty($nombre_completo) && empty($email) && empty($password) && empty($password2)) {
		$_SESSION['error'] = '*Llena los campos vacíos';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=campos-vacios');
		exit();
	}elseif (!preg_match("/^[a-zA-Z0-9]*$/", $user) || strlen($user) < 4) {
		$_SESSION['error'] = '*No se permiten espacios en blanco<br>*Al menos 5 caracteres entre letras y números';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=user');
		exit();
	}elseif (!preg_match("/^[a-z A-Z a-z]*$/", $nombre_completo)) {
		$_SESSION['error'] = '*Se permiten solo letras en <strong>Nombre y Apellido</strong>';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=nombre&apellido');
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['error'] = '*Ingresa un email válido';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=email-invalid');
		exit();
	}elseif (strlen($password) < 6) {
		$_SESSION['error'] = '*Contraseña muy corta<br>*Al menos 7 caracteres<br>*Error al introducir la contraseña';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=password-invalid');
		exit();
	}
	elseif ($password2 !== $password) {
		$_SESSION['error'] = '*Las contraseñas no coinciden';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=password-no-coinciden-invalid');
		exit();
	}
	else {
		$sql = "select * from user where username = '$user' and email = '$email' ";
		$query = mysqli_query($conn, $sql);
		$result = mysqli_num_rows($query);

		if ($result > 0) {
		$_SESSION['error'] = '*Usuario y/o correo esta en uso!';
		$_SESSION['color-error'] = 'danger';
		header('location:../register_index.php?error=usuario&email-esta-en-uso');
		exit();
		}
	else{
		$sql = "insert into user (username, fullname, email, password) values ('$user', '$nombre_completo', '$email', '$password_hash')";
		$query = $conn->query($sql);
		if ($query != null) {
		echo "<script>alert('Registro satisfactoriamente, procede a loguearte');window.location='../login_index.php';</script>";
		exit();
	  }
	}
  }
}
	