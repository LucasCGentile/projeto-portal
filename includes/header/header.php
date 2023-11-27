<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!-- Nav -->
<div class="index-bg-main pb-lg-3">
  <nav class="container navbar navbar-expand-lg ">
    <div class="container-fluid fw-bold">
      <a class="navbar-brand d-lg-none" href="../../../projeto-portal/index.php">
        <img src="../../../projeto-portal/includes/header/assets/logo-sr-header.png" alt="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-center mx-auto">
          <li class="nav-item">
            <a class="nav-link link <?= ($page == 'home') ? 'active' : '' ?>" aria-current="page" href="../../../projeto-portal/index.php?page=home">Inicio</a>
          </li>

          <li class="nav-item dropdown <?= ($page == 'informacoes') ? 'active' : '' ?>"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Informações </a>
            <ul class="dropdown-menu dropdown-content">
              <li><a class="dropdown-item fw-bold" href="../../../projeto-portal/pages/onibus/onibus.php?page=informacoes">Horário de Ônibus</a></li>
              <li><a class="dropdown-item fw-bold" href="../../../projeto-portal/pages/historia/historia.php?page=informacoes">História</a></li>
              <li><a class="dropdown-item fw-bold" href="../../../projeto-portal/pages/historia/galeriapref.php?page=informacoes">Prefeitos</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown <?= ($page == 'eventos') ? 'active' : '' ?>"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Guia de Eventos </a>
            <ul class="dropdown-menu dropdown-content">
              <li><a class="dropdown-item fw-bold" href="../../../projeto-portal/pages/turismo/turismo.php?page=eventos">Turismo</a></li>
              <li><a class="dropdown-item fw-bold" href="../../../projeto-portal/pages/eventos/eventos.php?page=eventos">Eventos</a></li>
            </ul>
          </li>

          <a class="navbar-brand d-none d-lg-block" href="../../../projeto-portal/index.php">
            <img src="../../../projeto-portal/includes/header/assets/logo-sr-header.png" alt="logo-sao-roque" class="img-fluid">
          </a>

          <li class="nav-item">
            <a class="nav-link link" aria-current="page" href="../../../projeto-portal/pages/noticias/noticias.php">Noticias</a>
          </li>

          <li class="nav-item dropdown <?= ($page == 'contato') ? 'active' : '' ?>"><a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ouvidoria</a>
            <ul class="dropdown-menu dropdown-content">
              <li><a class="dropdown-item fw-bold" href="../../../projeto-portal/pages/contato/contato.php?page=contato">Contato</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link link <?= ($page == 'regrasDeUso') ? 'active' : '' ?>" aria-current="page" href="../../../projeto-portal/pages/regras/regras.php?page=regrasDeUso">Regras de Uso</a>
          </li>


          <li class="nav-item">
            <a class="nav-link link <?= ($page == 'quemSomos') ? 'active' : '' ?>" href="../../../projeto-portal/pages/quemSomos/quemSomos.php?page=quemSomos">Quem Somos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>