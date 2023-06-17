<? include ('config.php'); ?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="#" alt="">
    <span class="d-none d-lg-block">Femarh</span>
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

  <li class="nav-item">
    <a class="nav-link " href="<?php echo $url ?>PainelDeAssinaturas/">
      <i class="bi bi-grid"></i>
      <span>Painel de assinaturas</span>
    </a>
  </li><!-- Final minha conta teste-->

  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>DIFLOR</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#icons-nav1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>SISTEMAS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav1" class="nav-content collapse " >
          



          <!-- Reposição Parcelada -->
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DIFLOR/DivFlor/ReposicaoParcelada/">
              <i class="bi bi-grid"></i>
              <span>Reposição Parcelada</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->
          
            <!-- Reposição Parcelada -->
            <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DIFLOR/DivFlor/ReposicoesConcluidasCemPorCento/">
              <i class="bi bi-grid"></i>
              <span>Reposição Concluídas 100%</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->

      


<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->


<!-----OUTRO ITEM---->





  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#DMCA" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>DMCA</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="DMCA" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#DMCA1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>SISTEMAS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="DMCA1" class="nav-content collapse " >
          



          <!-- Reposição Parcelada -->
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>ControleDeDenuncias/">
              <i class="bi bi-grid"></i>
              <span>Denúncias</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->
          
            <!-- Reposição Parcelada -->
            <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DIFLOR/DivFlor/ReposicoesConcluidasCemPorCento/">
              <i class="bi bi-grid"></i>
              <span>Boletim de queimadas</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->


        </ul>
      </li><!-- Final DMCA e Gestão de Fauna -->

      


<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->










<!-----OUTRO ITEM---->










<!-----OUTRO ITEM---->





<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#DIRAF" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>DIRAF</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="DIRAF" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#DIRAF1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>SISTEMAS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="DIRAF1" class="nav-content collapse " >
          



          <!-- Reposição Parcelada -->
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>ControleDeMultas/">
              <i class="bi bi-grid"></i>
              <span>Controle de multas</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->
          
            <!-- Reposição Parcelada 
            <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DIFLOR/DivFlor/ReposicaoConcluidasCemPorCento/">
              <i class="bi bi-grid"></i>
              <span>Controle de patrimônios</span>
            </a>
          </li>
           Final Reposicção Parcelada -->


        </ul>
      </li><!-- Final DIRAF e Gestão de Fauna -->

      


<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->













<!-----OUTRO ITEM---->





<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#DLGA" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>DLGA</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="DLGA" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#DLGA1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Aquicultura e Gestão de Fauna</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="DLGA1" class="nav-content collapse " >
          



          <!-- Reposição Parcelada -->
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DLGA/Aquicultura-E-Gestao-De-Fauna/Licenca-De-Pesca/">
              <i class="bi bi-grid"></i>
              <span>Licença de Pescador</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->
          
            <!-- Reposição Parcelada -->
            <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DLGA/Aquicultura-E-Gestao-De-Fauna/Licenca-De-Embarcacao/">
              <i class="bi bi-grid"></i>
              <span>Licença de Embarcação</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->



            <!-- Reposição Parcelada -->
             <li class="nav-item">
            <a class="nav-link " href="<?php echo $url ?>DLGA/Aquicultura-E-Gestao-De-Fauna/Estoque-De-Peixe/">
              <i class="bi bi-grid"></i>
              <span>Estoque de peixe</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->

        </ul>
      </li><!-- Final DLGA e Gestão de Fauna -->

      


<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->






<!-----OUTRO ITEM---->





<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Links-Uteis" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Links Úteis</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Links-Uteis" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <!--  sub drop--->

          <li class="nav-item">
        <a class="nav-link" data-bs-target="#Links-Uteis1"  data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Sistemas externos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Links-Uteis1" class="nav-content collapse " >
          



          <!-- Reposição Parcelada -->
          <li class="nav-item">
            <a class="nav-link " href="https://sei.rr.gov.br/sei">
              <i class="bi bi-grid"></i>
              <span>SEI</span>
            </a>
          </li>
          <!-- Final Reposicção Parcelada -->


        </ul>
      </li><!-- Final Links-Uteis e Gestão de Fauna -->

      


<!-- fINAL SUBDROP-->


        </ul>
      </li><!-- Final Aquicultura e Gestão de Fauna -->










  
    

</ul>
</aside><!-- End Sidebar-->
