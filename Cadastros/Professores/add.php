<?php
require_once('../../../../db.php');
$upload_dir = './ArquivosEnviados/';


if (isset($_POST['Enviar'])) {
   


	
    $Nome = $_POST['Nome'];
    $Curso = $_POST['Curso'];
	$Especialidade = $_POST['Especialidade'];
	




	$NomeDoFotoDePerfil = $_FILES['FotoDePerfil']['name'];
	$NomeTemporarioFotoDePerfil = $_FILES['FotoDePerfil']['tmp_name'];
	$TamanhoDoFotoDePerfil = $_FILES['FotoDePerfil']['size'];



	if($NomeDoFotoDePerfil){

		$ExtensaoFotoDePerfil = strtolower(pathinfo($NomeDoFotoDePerfil, PATHINFO_EXTENSION));
		$PermitirExtensaoFotoDePerfil  = array('jpeg', 'jpg', 'png');
		$NovoNomeFotoDePerfil = time().'_'.rand(1000,9999).'.'.$ExtensaoFotoDePerfil;

		if(in_array($ExtensaoFotoDePerfil, $PermitirExtensaoFotoDePerfil)){
			if($TamanhoDoFotoDePerfil < 5000000){
	
					move_uploaded_file($NomeTemporarioFotoDePerfil ,$upload_dir.$NovoNomeFotoDePerfil); 
			}else{
				$errorMsg = 'Arquivo muito grande';
				echo $errorMsg;
			}
		}else{
			$errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	}
















		if(!isset($errorMsg)){
			$sql = "insert into Professores (Nome, Curso, Especialidade, FotoDePerfil)
					values('".$Nome."','".$Curso."', '".$Especialidade."','".$NovoNomeFotoDePerfil."' )";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'Cadastro concluído';
				header("Location: ./");
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
				echo $errorMsg;
			}
		}


	}//else entra cadastro



?>
