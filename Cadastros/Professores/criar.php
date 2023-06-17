
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
              <h5 class="card-title">Reposição Concluídas 100%</h5>
              

              <!-- General Form Elements -->
              <form method="POST"  action="./add.php"    enctype="multipart/form-data">
                
              
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Numero da Autex</label>
               
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="NumeroAutex"  placeholder="Número da Autex"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nome Detentor</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control" name="Detentor"  placeholder="Nome do Detentor"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">CPF/CNPJ Detentor</label>
                  <div class="col-sm-7">
                    <input name="CpfCnpj"  class="form-control cpfOuCnpj" type="text"   autocomplete="off" maxlength="14"   placeholder="CPF/CNPJ Detentor"  value="" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Tipo</label>
                  <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example" name="Tipo">
                      <option>Savana</option>
                      <option>Floresta</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Imovel Vinculado</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="ImovelVinculado"  placeholder="Imóvel Vinculado"  value="" >
                  </div>
                </div>


                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Empresa Vinculada</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="EmpresaVinculada"  placeholder="Empresa Vinculada"  value="" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Licença</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Licenca"  placeholder="Licença"  value="" >
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Fomentadora</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Fomentadora"  placeholder="Fomentadora"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Saldo Existente M³ Dof</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="SaldoExistenteMetrosQuadradosDof"  placeholder="Saldo Existente M² Dof"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Volumetria Liberada M³</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="VolumetriaLiberadaMetrosQuadrados"  placeholder="Volumetria Liberada M²"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Total M³</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="TotalMetrosQuadrados"  placeholder="Total M²"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número do Processo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="NumeroProcesso"  placeholder="Digite número do processo"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">1ª Parcela</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="ParcelaUm"  placeholder="Digite sua 1ª Parcela"  value="">
                  </div>
                </div>

          <!--Campo Comprovante 1º Parecela-->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-3 col-form-label">1º Comprovação Anexo</label>
                  <div class="col-sm-6">
                    <input  class="form-control" type="file" placeholder="Comprovante 1ºParcela" name="ComprovanteUm"   value="">
                  </div>
                </div>
          <!--Final Campo Comprovante 1º Parecela-->

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data de Liberacao</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="DataLiberacao"   value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data de Vencimento</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="DataVencimento"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Observação</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Obs"  placeholder="Digite uma Observação"  value="">
                  </div>
                </div>





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
<?php include "../../../footer.php"; ?>
</html>