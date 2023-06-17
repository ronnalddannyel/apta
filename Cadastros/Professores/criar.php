
<!DOCTYPE html>
<html lang="pt-br">
<?php include "../../header.php";
require_once('../../../../db.php');
?>
</header>
<body>
<?php include "../../menu.php"; ?>


<main id="main" class="main">



<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Adicionar Professor</h5>
              

              <!-- General Form Elements -->
              <form method="POST"  action="./add.php"    enctype="multipart/form-data">
                
              
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nome</label>
               
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Nome"  placeholder="Nome do Professor"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Curso</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control" name="Curso"  placeholder="Curso"  value="">
                  </div>
                </div>


                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Especialidade</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Especialidade"  placeholder="Especialidade"  value="" >
                  </div>
                </div>


          <!--Campo Comprovante 1º Parecela-->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-3 col-form-label">Foto de Pefil</label>
                  <div class="col-sm-6">
                    <input  class="form-control" type="file"  name="FotoDePerfil"   value="">
                  </div>
                </div>
          <!--Final Campo Comprovante 1º Parecela-->





                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cadastro</label>
                  <div class="col-sm-3">
                    <button type="submit" name="Enviar" class="btn btn-primary">Cadastrar</button>
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