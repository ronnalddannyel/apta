<?php $upload_dir = '../Cadastros/Professores/ArquivosEnviados/';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Apta</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">
  <meta name="theme-name" content="educenter" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start 
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="tel:+55 95 90000-00000"><strong>Ligar</strong> +55 95 90000-00000</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://facebook.com/#/"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://twitter.com/#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://github.com/#"><i class="ti-github"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://instagram.com/#/"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">avisos</a></li>

            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal" data-toggle="modal" data-target="#loginModal">Entrar</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal" data-toggle="modal" data-target="#signupModal">registrar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" style="height:100px;width: 200px;"></a>
    
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Início</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="#">Cursos</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="#">Eventos</a>
            </li>

            <li class="nav-item @@blog">
              <a class="nav-link" href="#">BLOG</a>
            </li>

            <li class="nav-item @@contact">
              <a class="nav-link" href="#">CONTATO</a>
            </li>


          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registrar</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Seu futuro brilhante é a nossa missão</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Ver cursos</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Seu futuro brilhante é a nossa missão</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Ver cursos</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/banner/qtd.png" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Missão</h3>
            <p>Perceber e analisar necessidades, planejar estratégias com criatividade, possibilitar soluções inovadoras, viáveis e eficazes, para promover resultados positivos a empresas e instituições públicas e privadas.</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Visão</h3>
            <p>Ser uma empresa referência na promoção de comunicação, consultoria e conhecimento, sempre disposta a se aperfeiçoar e comprometida com a satisfação de clientes, através da busca pela excelência na prestação de serviços.

</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Valores</h3>
            <p>Honestidade em nossas ações;
Ética na atuação dos colaboradores e na relação com nossos parceiros e clientes;
Compromisso com a inovação, criatividade e qualidade em nossos serviços;
Respeito com as pessoas, crenças e valores; 
Credibilidade em zelar pela honestidade e pela transparência dos serviços prestados.</p>
          </div>
          <!----
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Título</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>

--->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">Sobre</h2>
        <p>A APTA iniciou as atividades em 2006, prestando serviços de produção audiovisual a empresas públicas e privadas, para complementar as atividades da ANAPAM COMUNICAÇÃO E MARKETING, que atuava como agência de publicidade e propaganda nos diversos segmentos de mídia.</p>
        <p>Desde 2010 a APTA realizou mais de 1.500 consultorias empresariais em parceria com o SEBRAE/RR, por meio do projeto SEBRAETEC, oferecendo atendimento personalizado com especialistas nas mais diversas áreas. Apresentando soluções estratégicas para que empresas inovassem e aumentassem seus desempenhos.</p>
        <!---<a href="#" class="btn btn-outline-primary">Ver mais</a>-->
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/17anos.png" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Clique e veja nossos cursos</h6>
        <h2 class="section-title text-white">Título</h2>
        <a href="#" class="btn btn-light">Inscreva-se</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/FotosAlunos.png">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://www.youtube.com/watch?v=EZ4sFas3Xk8" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">AULAS EXTRACURRICULARES ALERR </h2>
          <p>Explicar sobre</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Eventos</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="#" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">Ver tudo</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>12</span><br>Maio</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Local</p>
        <a href="#"><h4 class="card-title">Nome do evento</h4></a>
      </div>
    </div>
  </div>
  
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="#" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">Ver tudo</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- Professores -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Professores</h2>
      </div>
<?php
              
$sql = "SELECT * FROM Professores";
         require_once('../../../db.php');             
                      $result = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){

?>

     
      <!-- Professor -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php echo $upload_dir.$row['FotoDePerfil'] ?>" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title"><?php echo $row['Nome']; ?></h4>
            </a>
            <p>Professor</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <?php
                              }
                            }
                          
                          ?>

<!-- blog -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Avisos</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">Maio 28, 2023</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">Por Autor</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">Ler mais</a>
      </div>
    </div>
  </article>
   <!-- blog post -->
   <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">Maio 28, 2023</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">Por Autor</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">Ler mais</a>
      </div>
    </div>
  </article>
    <!-- blog post -->
    <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
      <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
        <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
        <div class="card-body">
          <!-- post meta -->
          <ul class="list-inline mb-3">
            <!-- post date -->
            <li class="list-inline-item mr-3 ml-0">Maio 28, 2023</li>
            <!-- author -->
            <li class="list-inline-item mr-3 ml-0">Por Autor</li>
          </ul>
          <a href="blog-single.html">
            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
          </a>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
          <a href="blog-single.html" class="btn btn-primary btn-sm">Ler mais</a>
        </div>
      </div>
    </article>

    </div>
  </section>
  </div>

<!-- footer -->
<footer>
  <!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Receber avisos por whatsapp</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Nome">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Whatsapp">
              <button type="submit" value="send" class="btn btn-primary">Receber</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
     <div class="container">
       <div class="row">
         <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
           <!-- logo -->
           <a class="navbar-brand" href="index.html">APTA</a>
           <ul class="list-unstyled">
             <li class="mb-2">Endereço</li>
             <li class="mb-2">+55 (95) 00000-0000</li>
             <li class="mb-2">+55 (95) 00000-0000</li>
             <li class="mb-2">email@email.com</li>
           </ul>
         </div>
         <!-- company -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">Empresa</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Curos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Polos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Professores</a></li>
             <li class="mb-3"><a class="text-color" href="#">Eventos</a></li>
           </ul>
         </div>
         <!-- links -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">LINKS</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Curos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Polos</a></li>
             <li class="mb-3"><a class="text-color" href="#">Professores</a></li>
             <li class="mb-3"><a class="text-color" href="#">Eventos</a></li>
           </ul>
         </div>
         <!-- support -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">Opção</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#!">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#!">Opção</a></li>
           </ul>
         </div>
         <!-- support -->
         <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
           <h4 class="text-white mb-5">Opção</h4>
           <ul class="list-unstyled">
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="#">Opção</a></li>
             <li class="mb-3"><a class="text-color" href="h#">Opção</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- copyright -->
   <div class="copyright py-4 bg-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-7 text-sm-left text-center">
           <p class="mb-0">Copyright &copy;
             <script>
               var CurrentYear = new Date().getFullYear()
               document.write(CurrentYear)
             </script> 
             , design & desenvolvido por <a href="#" class="text-muted">RYFOX SOLUÇÕES TECNOLÓGICAS </a>
           </p>
         </div>
         <div class="col-sm-5 text-sm-right text-center">
           <ul class="list-inline">
             <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
             <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
             <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!-- /footer -->
 



<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- Main Script -->
<script src="js/script.js"></script>
</body>
</html>
