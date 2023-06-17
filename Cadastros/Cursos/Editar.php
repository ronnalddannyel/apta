<?php
include "../../header.php";
require_once('../../../../db.php');
$upload_dir = 'ArquivosEnviados/';

if (isset($_POST['Ret'])) {
    $id =  base64_decode($_POST['IdEstoque']);
  
    $sql = "select * from ReposicoesConcluidasCemPorCento WHERE id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
         }else {
     echo $errorMsg = 'Could not Find Any Record';
    }
  }



  if(isset($_POST['Enviar'])){
    

    
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
  $id = $_POST['id'];


  $sql3 = "SELECT * FROM ReposicoesConcluidasCemPorCento WHERE id=".$id;
  $result3 = mysqli_query($conn, $sql3);
      if(mysqli_num_rows($result3)){
          $row2 = mysqli_fetch_assoc($result3);
         

      }
 
	$NomeDoComprovanteUm = $_FILES['ComprovanteUm']['name'];
	$NomeTemporarioComprovanteUm = $_FILES['ComprovanteUm']['tmp_name'];
	$TamanhoDoComprovanteUm = $_FILES['ComprovanteUm']['size'];



	if($NomeDoComprovanteUm){

		$ExtensaoComprovanteUm = strtolower(pathinfo($NomeDoComprovanteUm, PATHINFO_EXTENSION));
		$PermitirExtensaoComprovanteUm  = array('pdf');
		$NovoNomeComprovanteUm = time().'_'.rand(1000,9999).'.'.$ExtensaoComprovanteUm;

		if(in_array($ExtensaoComprovanteUm, $PermitirExtensaoComprovanteUm)){
			if($TamanhoDoComprovanteUm < 5000000){
        unlink($upload_dir.$row2['ComprovanteUm']); //nome coluna
					move_uploaded_file($NomeTemporarioComprovanteUm ,$upload_dir.$NovoNomeComprovanteUm); 
			}else{
			$errorMsg = 'Arquivo muito grande';
		echo $errorMsg;
			}
		}else{
		  $errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	}else{

   $NovoNomeComprovanteUm = $row2['ComprovanteUm']; //nome coluna
     
  }


   
   

   


//Envio para o banco de dados

    if(!isset($errorMsg)){        

    $sql = "SELECT * FROM ReposicoesConcluidasCemPorCento WHERE id LIKE '%$id%'";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);

        }
                            
    $sql = "update ReposicoesConcluidasCemPorCento 
            set 
            NumeroAutex = '".$NumeroAutex."',
            Detentor = '".$Detentor."',
            CpfCnpj = '".$CpfCnpj."',
            Tipo ='".$Tipo."',
            ImovelVinculado = '".$ImovelVinculado."',
            EmpresaVinculada = '".$EmpresaVinculada."',
            Licenca = '".$Licenca."',
            Fomentadora = '".$Fomentadora."',
            SaldoExistenteMetrosQuadradosDof = '".$SaldoExistenteMetrosQuadradosDof."',
            VolumetriaLiberadaMetrosQuadrados = '".$VolumetriaLiberadaMetrosQuadrados."',
            TotalMetrosQuadrados = '".$TotalMetrosQuadrados."',
            NumeroProcesso = '".$NumeroProcesso."',
            ParcelaUm = '".$ParcelaUm."',
            DataLiberacao = '".$DataLiberacao."',
            DataVencimento = '".$DataVencimento."',
            Obs = '".$Obs."',
            ComprovanteUm = '".$NovoNomeComprovanteUm."' 
            
            
            WHERE id=".$id;


            $result2 = mysqli_query($conn, $sql);
			
            if($result2){
				 $successMsg = 'Retificado';       
         header("Location: ./");
         ?>
            
			<?php
			}else{
				echo $errorMsg = 'Error '.mysqli_error($conn);
			}
		}

	}


?>

    <html lang="pt-br">
    <header>
   
 

    </header>
    <body>
    <?php include "../../../menu.php"; ?>
    
    
    <main id="main" class="main">
    
  
    
   
<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Reposição Concluídas 100%</h5>
              

              <!-- General Form Elements -->
              <form method="POST"  action=""    enctype="multipart/form-data">
                
              
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Numero da Autex</label>
               
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="NumeroAutex"  placeholder="Número da Autex"  value=" <?php echo $row['NumeroAutex']; ?> ">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nome Detentor</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control" name="Detentor"  placeholder="Nome do Detentor"  value="<?php echo $row['Detentor']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">CPF/CNPJ Detentor</label>
                  <div class="col-sm-7">
                    <input name="CpfCnpj"  class="form-control cpfOuCnpj" type="text"   autocomplete="off" maxlength="14"   placeholder="CPF/CNPJ Detentor"  value="<?php echo $row['CpfCnpj']; ?>" >
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Tipo</label>
                  <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example" name="Tipo">
                      <option selected><?php echo $row['Tipo']; ?></option>
                      <option>Savana</option>
                      <option>Floresta</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Imovel Vinculado</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="ImovelVinculado"  placeholder="Imovel Vinculado"  value="<?php echo $row['ImovelVinculado']; ?>" >
                  </div>
                </div>


                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Empresa Vinculada</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="EmpresaVinculada"  placeholder="Empresa Vinculada"  value="<?php echo $row['EmpresaVinculada']; ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Licença</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Licenca"  placeholder="Licença"  value="<?php echo $row['Licenca']; ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Fomentadora</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Fomentadora"  placeholder="Fomentadora"  value="<?php echo $row['Fomentadora']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Saldo Existente M² Dof</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="SaldoExistenteMetrosQuadradosDof"  placeholder="Saldo Existente M² Dof"  value="<?php echo $row['SaldoExistenteMetrosQuadradosDof']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Volumetria Liberada M²</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="VolumetriaLiberadaMetrosQuadrados"  placeholder="Volumetria Liberada M²"  value="<?php echo $row['VolumetriaLiberadaMetrosQuadrados']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Total M²</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="TotalMetrosQuadrados"  placeholder="Total M²"  value="<?php echo $row['TotalMetrosQuadrados']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número do Processo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="NumeroProcesso"  placeholder="Digite número do processo"  value="<?php echo $row['NumeroProcesso']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">1ª Parcela</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="ParcelaUm"  placeholder="Digite sua 1ª Parcela"  value="<?php echo $row['ParcelaUm']; ?>">
                  </div>
                </div>


          <!--Campo Comprovante 1º Parecela-->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">1º Comprovação Anexo</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="file" placeholder="Comprovante 1ºParcela" name="ComprovanteUm"   value="">
                    <a href="<?php echo $upload_dir.$row['ComprovanteUm'] ?>" >Ver documento</a>
                  </div>
              </div>
          <!--Final Campo Comprovante 1º Parecela-->

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data de Liberacao</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="DataLiberacao"   value="<?php echo $row['DataLiberacao']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data de Vencimento</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="DataVencimento"  value="<?php echo $row['DataVencimento']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Observação</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Obs"  placeholder="Digite uma Observação"  value="<?php echo $row['Obs']; ?>">
                  </div>
                </div>
    
             
    
                    <input type="hidden" class="form-control" name="id"  value="<?php echo $row['id']; ?>" >
    
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Editar</label>
                      <div class="col-sm-3">
                        <button type="submit" name="Enviar" class="btn btn-primary">Editar</button>
                      </div>
                    </div>
    
                  </form><!-- Finalização formulário Estoque de Peixe -->
    
                </div>
              </div>
    
            </div>
    
    
    
    </main>
    
    
    </body>
    
    <script>
    var options = {
    onKeyPress: function (cpf, ev, el, op) {
    var masks = ['000.000.000-000', '00.000.000/0000-00'];
    $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
    }
    
    $('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <?php include "../../../footer.php"; ?>
    </html>