<!-- Início painel de declarações -->
<div class="col-12">
              <div class="card recent-sales overflow-auto">


               <div class="card-body">
                  <h5 class="card-title">Professores</h5>
                  <a class="btn btn-success" href="./criar.php">Adicionar</a>
                <!--  <a href="#" class="btn btn-success">Baixar Excell</a>  -->
               
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>

                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Especialidade</th>
  
                    
                      </tr>
                    </thead>
                    <tbody>

                    <?php





                      
                        $sql = "SELECT * FROM Professores";
                      
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                          while($row = mysqli_fetch_assoc($result)){

/*
                                  
                                    if ($row['Status'] == "Aprovado") {
                                    $sigla = "badge bg-success";
                                    } elseif ($row['Status'] == "Pendente") {
                                    $sigla = "badge bg-warning";
                                    }elseif ($row['Status'] == "Rejeitado") {
                                    $sigla = "badge bg-danger";
                                    }


*/
                      ?>


                      <tr>
                   
                   <?php //$DataAi =  date('d/m/Y',strtotime($row["DataSaida"]));?>

                      
 
                      
                      
                      <td>

       
                       
                      <?php echo $row['id'] ?>

                                  </td>
                      <td><?php echo $row['Nome'] ?></td>
                      <td><?php echo $row['Curso'] ?></td>
                      <td><?php echo $row['Especialidade'] ?></td>

                    
                      <td>


      
                          
                      <!--Enviar ID--->
                      <form action="./Editar.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="IdEstoque"  value="<?php echo base64_encode($row['id']); ?>" >
                      <button type="submit" name="Ret"  class="btn btn-info"><i class="bx bxs-pencil"></i></button>   
                      <!--Fim enviar ID--->     
                      </form>      
                      <form action="./Deletar.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="IdEstoque"  value="<?php echo base64_encode($row['id']); ?>" >
                      <button type="submit" name="Ret"  class="btn btn-danger"><i class="bx bxs-trash"></i></button>   
                      <!--Fim enviar ID--->     
                      </form> 
                      </td>


     
              </tr>



                      <?php
                              }
                            }
                          
                          ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!--Final painel de declarações -->






           







</main>


</body>
<?php include "../../footer.php"; ?>
</html>