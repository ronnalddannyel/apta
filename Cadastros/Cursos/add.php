<?php
require_once('../../../../db.php');
$upload_dir = './ArquivosEnviados/';


if (isset($_POST['Enviar'])) {
   


	
    $NumeroAutex = $_POST['NumeroAutex'];
    $Detentor = $_POST['Detentor'];
	$CpfCnpj = $_POST['CpfCnpj'];
	$Tipo = $_POST['Tipo'];
	$ImovelVinculado = $_POST['ImovelVinculado'];
	$EmpresaVinculada = $_POST['EmpresaVinculada'];
	$Licenca = $_POST['Licenca'];
	$Fomentadora = $_POST['Fomentadora'];
	$SaldoExistenteMetrosQuadradosDof = $_POST['SaldoExistenteMetrosQuadradosDof'];
	$VolumetriaLiberadaMetrosQuadrados = $_POST['VolumetriaLiberadaMetrosQuadrados'];
	$TotalMetrosQuadrados = $_POST['TotalMetrosQuadrados'];
	$NumeroProcesso = $_POST['NumeroProcesso'];
	$ParcelaUm = $_POST['ParcelaUm'];
	$DataLiberacao = $_POST['DataLiberacao'];
	$DataVencimento = $_POST['DataVencimento'];
	$Obs = $_POST['Obs'];




	$NomeDoComprovanteUm = $_FILES['ComprovanteUm']['name'];
	$NomeTemporarioComprovanteUm = $_FILES['ComprovanteUm']['tmp_name'];
	$TamanhoDoComprovanteUm = $_FILES['ComprovanteUm']['size'];



	if($NomeDoComprovanteUm){

		$ExtensaoComprovanteUm = strtolower(pathinfo($NomeDoComprovanteUm, PATHINFO_EXTENSION));
		$PermitirExtensaoComprovanteUm  = array('pdf');
		$NovoNomeComprovanteUm = time().'_'.rand(1000,9999).'.'.$ExtensaoComprovanteUm;

		if(in_array($ExtensaoComprovanteUm, $PermitirExtensaoComprovanteUm)){
			if($TamanhoDoComprovanteUm < 5000000){
	
					move_uploaded_file($NomeTemporarioComprovanteUm ,$upload_dir.$NovoNomeComprovanteUm); 
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
			$sql = "insert into ReposicoesConcluidasCemPorCento (NumeroAutex, Detentor, CpfCnpj, Tipo, ImovelVinculado, EmpresaVinculada, Licenca, Fomentadora,SaldoExistenteMetrosQuadradosDof, VolumetriaLiberadaMetrosQuadrados, TotalMetrosQuadrados, NumeroProcesso, ParcelaUm, DataLiberacao, DataVencimento, Obs, ComprovanteUm)
					values('".$NumeroAutex."','".$Detentor."', '".$CpfCnpj."','".$Tipo."', '".$ImovelVinculado."','".$EmpresaVinculada."','".$Licenca."', '".$Fomentadora."', '".$SaldoExistenteMetrosQuadradosDof."', '".$VolumetriaLiberadaMetrosQuadrados."', '".$TotalMetrosQuadrados."', '".$NumeroProcesso."', '".$ParcelaUm."', '".$DataLiberacao."', '".$DataVencimento."', '".$Obs."', '".$NovoNomeComprovanteUm."' )";
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
