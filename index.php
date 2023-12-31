<?php 
session_start();
include ('config.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>APTA</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="./bulma/css/bulma.min.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="assets/pers.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>


    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
</head>
<body>


<section class="hero is-fullheight">
<div class="hero-body">
<div class="container has-text-centered">


<img class="column is-2 is-offset-5" id="LogoApta"  src="assets/img/logo.png">


<div class="column is-4 is-offset-4">
 
  
<h3 class="title has-text-black">PAINEL DE GERECIAMENTO</h3>

<?php
if(isset($_SESSION['nao_autenticado'])):
?>

<div class="notification is-danger">       <p>ERRO: Usuário ou senha inválidos.</p>          </div>
<?php 
endif;
unset($_SESSION['nao_autenticado']); 
?>
<div class="box">
<form action="login.php" method="POST">
<div class="field">
<div class="control">
<input name="usuario" name="text" class="input is-large cpfOuCnpj" placeholder="Seu CPF" autofocus="">
</div>
</div>

<div class="field">
<div class="control">
<input name="senha" class="input is-large" type="password" placeholder="Sua senha">
</div>
</div>
<button type="submit" class="button is-block is-success is-large is-fullwidth">Entrar</button>
</form>
<a class="nav-link " href="<?php echo $url ?>CadastroUsuarioExterno/">Não poussuo cadastro</a>
<a class="nav-link " href="Recuperar_Senha1/recuperar_senha.php">Recuperar Senha</a>
</div>
</div>
</div>
</div>
</section>


<script>
var options = {
onKeyPress: function (cpf, ev, el, op) {
var masks = ['000.000.000-000', '00.000.000/0000-00'];
$('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
}
}

$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
</script>