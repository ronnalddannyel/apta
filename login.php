<?php
session_start();
include('../../db.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select usuario_id, CpfCnpj, NivelDeAcesso from usuario where CpfCnpj= '$usuario' and senha = '$senha' "; 



$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
$row2  = mysqli_fetch_assoc($result);

$NivelDeAcesso = $row2['NivelDeAcesso'];


if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['NivelDeAcesso'] = $NivelDeAcesso;
	header('Location: ./PainelAptaInterno/index.php');
	exit();

} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}



