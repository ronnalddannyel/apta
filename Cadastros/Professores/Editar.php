<?php
include "../../header.php";
require_once('../../../../db.php');
$upload_dir = 'ArquivosEnviados/';

if (isset($_POST['Ret'])) {
    $id =  base64_decode($_POST['IdEstoque']);
  
    $sql = "select * from Professores WHERE id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
         }else {
     echo $errorMsg = 'Could not Find Any Record';
    }
  }



  if(isset($_POST['Enviar'])){
    

    
  $Nome = $_POST['Nome'];
  $Curso = $_POST['Curso'];
  $Especialidade = $_POST['Especialidade'];

  $id = $_POST['id'];


  $sql3 = "SELECT * FROM Professores WHERE id=".$id;
  $result3 = mysqli_query($conn, $sql3);
      if(mysqli_num_rows($result3)){
          $row2 = mysqli_fetch_assoc($result3);
         

      }
 
	$NomeDoFotoDePerfil = $_FILES['FotoDePerfil']['name'];
	$NomeTemporarioFotoDePerfil = $_FILES['FotoDePerfil']['tmp_name'];
	$TamanhoDoFotoDePerfil = $_FILES['FotoDePerfil']['size'];



	if($NomeDoFotoDePerfil){

		$ExtensaoFotoDePerfil = strtolower(pathinfo($NomeDoFotoDePerfil, PATHINFO_EXTENSION));
		$PermitirExtensaoFotoDePerfil  = array('jpeg', 'jpg', 'png');
		$NovoNomeFotoDePerfil = time().'_'.rand(1000,9999).'.'.$ExtensaoFotoDePerfil;

		if(in_array($ExtensaoFotoDePerfil, $PermitirExtensaoFotoDePerfil)){
			if($TamanhoDoFotoDePerfil < 5000000){
        unlink($upload_dir.$row2['FotoDePerfil']); //nome coluna
					move_uploaded_file($NomeTemporarioFotoDePerfil ,$upload_dir.$NovoNomeFotoDePerfil); 
			}else{
			$errorMsg = 'Arquivo muito grande';
		echo $errorMsg;
			}
		}else{
		  $errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	}else{

   $NovoNomeFotoDePerfil = $row2['FotoDePerfil']; //nome coluna
     
  }


   
   

   


//Envio para o banco de dados

    if(!isset($errorMsg)){        

    $sql = "SELECT * FROM Professores WHERE id LIKE '%$id%'";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);

        }
                            
    $sql = "update Professores 
            set 
            Nome = '".$Nome."',
            Curso = '".$Curso."',
            Especialidade = '".$Especialidade."',
            FotoDePerfil = '".$NovoNomeFotoDePerfil."' 
            
            
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
    <?php include "../../menu.php"; ?>
    
    
    <main id="main" class="main">
    
  
    
   
<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Editar professor</h5>
              

              <!-- General Form Elements -->
              <form method="POST"  action=""    enctype="multipart/form-data">
                
              
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
               
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Nome"  placeholder="Nome completo"  value=" <?php echo $row['Nome']; ?> ">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Curso</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control" name="Curso"  placeholder="Nome do Curso"  value="<?php echo $row['Curso']; ?>">
                  </div>
                </div>


                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Especialidade</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Especialidade"  placeholder="Imovel Vinculado"  value="<?php echo $row['Especialidade']; ?>" >
                  </div>
                </div>


          <!--Campo Comprovante 1º Parecela-->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Foto de Perfil</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="file" placeholder="Foto de perfil" name="FotoDePerfil"   value="">
                    <a href="<?php echo $upload_dir.$row['FotoDePerfil'] ?>" >Ver foto</a>
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
    <?php include "../../footer.php"; ?>
    </html>