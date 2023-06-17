<? include ('config.php'); ?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="#" alt="">
    <span class="d-none d-lg-block">APTA</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->
<a class="btn btn-outline-success" href="<?php echo $url ?>logout.php"><strong>Logout</strong></a>
<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">

  </form>
</div><!-- End Search Bar -->



  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar - menu ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?php echo $url ?>PainelFemarhExterno/">
      <i class="bi bi-grid"></i>
      <span>Minha Conta</span>
    </a>
  </li><!-- Final minha conta teste-->
<!--
  <li class="nav-item">
    <a class="nav-link " href="<?php //echo $url ?>PainelDeAssinaturas/">
      <i class="bi bi-grid"></i>
      <span>Painel de assinaturas</span>
    </a>
  </li> Final minha conta teste-->

  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>GERECIAMENTO</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#icons-nav1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Cadastros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav1" class="nav-content collapse " >
          



          <!-- Reposição Parcelada -->
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>Cadastros/Cursos/">
              <i class="bi bi-grid"></i>
              <span>Cursos</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->
          
            <!-- Reposição Parcelada -->
            <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>Cadastros/Polos/">
              <i class="bi bi-grid"></i>
              <span>Polos</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->


            <!-- Reposição Parcelada -->
            <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>Cadastros/Professores/">
              <i class="bi bi-grid"></i>
              <span>Professores</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->

        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->

      


<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->



<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Links-Uteis" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Relatórios</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Links-Uteis" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#Links-Uteis1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Gerais</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Links-Uteis1" class="nav-content collapse " >
          



          <!-- Quantidade alunos por polo -->
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade alunos por polo</span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

          <!-- Quantidade alunos por polo -->
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade alunos por curso </span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

                    <!-- Quantidade alunos por polo -->
                    <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade de alunos por município</span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

                    <!-- Quantidade alunos por polo -->
                    <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade alunos por polo</span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

                    <!-- Quantidade alunos por polo -->
                    <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade professores por polo</span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

            <!-- Quantidade alunos por polo -->
            <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade de alunos total</span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

            <!-- Quantidade alunos por polo -->
            <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="bi bi-grid"></i>
              <span>Quantidade de professores</span>
            </a>
          </li>
          <!-- Final Quantidade alunos por polo -->

        </ul>
      </li><!-- Final Links-Uteis e Gestão de Fauna -->

      
      

<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->


<!-----OUTRO ITEM---->












<!-----OUTRO ITEM---->







  
    

</ul>
</aside><!-- End Sidebar-->
