<!DOCTYPE html>
<html lang="pt-br">
<?php
$titulo = "Noticias de São Roque";
include '../../includes/head/head.php';
?>

<body>

  <div class="container">
    <!-- Header da Area de Noticias -->
    <header class="d-md-none d-lg-block d-none justify-content-between d-md-none d-lg-block d-none p-3">
      <div class="d-flex justify-content-between">
        <ul class="d-flex gap-3">
          <li><a href="../../index.php" class="fw-bold purple-hover">Site Principal</a></li>
          <li><a href="#" class="fw-bold purple-hover">Serviços</a></li>
          <li><a href="#" class="fw-bold purple-hover">Fale Conosco</a></li>
        </ul>


        <ul class="d-flex gap-3">
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-facebook"></i> Facebook</a></li>
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-instagram"></i> Instagram</a></li>
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-youtube"></i> Youtube</a></li>
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-twitter-x"></i> Twitter</a></li>
        </ul>
      </div>
    </header>
  </div>


  <div class="container">
    <div class="pb-lg-3">
      <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid fw-bold justify-content-between">
          <a class="navbar-brand d-lg-none" href="../../../projeto-portal/index.php">
            <img src="../../../projeto-portal/includes/header/assets/logo-sr-header.png" alt="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center mx-auto">
              <a class="navbar-brand d-none d-lg-block" href="../../../projeto-portal/index.php">
                <img src="../../../projeto-portal/includes/header/assets/logo-sr-header.png" alt="logo-sao-roque" class="img-fluid">
              </a>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../../../projeto-portal/index.php?page=home">Inicio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../../../projeto-portal/pages/noticias/noticias.php">Noticias</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../../../projeto-portal/pages/regras/regras.php?page=regrasDeUso">Banco de imagens</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Banner -->
    <div class="banner rounded-4 mb-3 position-relative">
      <img src="./assets/images/noticias-banner.png" alt="" class="img-fluid rounded-4 banner-noticia">
      <h3 class="text-light text-center p-3 fw-bolder absolute-noticias-center fs-26">Seja bem-vindo(a) à Agência de Notícias da Prefeitura de São Roque</h3>
    </div>

    <!-- Noticias -->
    <div class="d-flex">
      <div class="position-relative">
        <img src="./assets/images/noticia-1.jpg" alt="" class="img-fluid">
        <div class="absolute-bottom-left ">
          <h1 class="fw-bold text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, minus.</h1>
        </div>
      </div>
      <div>
        <img src="./assets/images/noticia-.jpeg" alt="" class="img-fluid">
        <img src="./assets/images/noticia3.jpeg" alt="" class="img-fluid">
      </div>
    </div>

    <!-- Acontecendo Agora -->
    <section class="bg-now mt-4 rounded-3">
      <h3 class="text-center text-primary fw-bold pt-3 mb-4">Acontecendo Agora</h3>

      <article class="row ">

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-4.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque dá início à “Semana da Primeira Infância.</p>
              <small>Atualizado em: 27/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class=" card d-flex flex-row gap-3 bg-transparent border-0  pointer">
            <img src="./assets/images/noticia-5.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque amplia número de praças e revitaliza espaços de lazer.</p>
              <small>Atualizado em: 27/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-6.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque realiza melhorias na Avenida T-2, no Setor Sol Nascente.
              </p>
              <small>Atualizado em: 26/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-7.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque amplia acesso à vacinação e disponibiliza quatro pontos aos finais de semana.
              </p>
              <small>Atualizado em: 26/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-8.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Guarda Civil Metropolitana capacita agentes para reforço à segurança da Capital.
              </p>
              <small>Atualizado em: 26/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-9.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura publica novo cronograma com prazos para aprovação de mais de 1,3 mil projetos.
              </p>
              <small>Atualizado em: 25/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-10.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura inicia Operação GCM Presente para reforçar segurança no Centro durante as festividades de fim de ano</p>
              <small>Atualizado em: 25/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-11.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque remove mais de 60 mil engenhos publicitários irregulares de janeiro a novembro</p>
              <small>Atualizado em: 24/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-12.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque desobstrui dezenas de vias afetadas pela queda de 160 árvores e 70 galhos.
              </p>
              <small>Atualizado em: 24/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-13.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque promove fim de semana com diversas atrações culturais gratuitas.
              </p>
              <small>Atualizado em: 24/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-14.jpeg" alt="" class=" rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque orienta consumidores a como agir na Black Friday.
              </p>
              <small>Atualizado em: 23/11/2023</small>
            </div>
          </div>
        </section>

        <section class="col m-2 mb-5">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-15.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque garante cerca de R$ 10 milhões para a cultura com a Política Nacional Aldir Blanc.
              </p>
              <small>Atualizado em: 23/11/2023</small>
            </div>
          </div>
        </section>
      </article>
    </section>

    <!-- Informativos -->
    <aside class="mt-4 d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3">
      <div class="mb-4">
        <img src="./assets/images/banner-covid-19.png" alt="" class="img-fluid rounded-3">
      </div>

      <div class="mb-4">
        <img src="./assets/images/banner-h1n1.png" alt="" class="img-fluid rounded-3">
      </div>
    </aside>

    <!-- App e + -->
    <div class="row">

      <div class=" col-12 col-lg-4 rounded-4 mb-4 text-center bg-blue-light">
        <h3 class="fw-bold mt-5 mb-3">Baixe o App <br>Prefeitura 24horas</h3>
        <p class="mb-4 ms-5 me-5">Gestão Inteligente tem planejamento e tecnologia para cuidar de você.</p>


        <button class="d-flex justify-content-center align-items-center gap-3 text-start border-0 rounded-4 w-200 p-3 bg-blue-light mb-3 m-auto">
          <i class="bi bi-google-play text-light fs-35"></i>
          <p class="fw-bold text-light">Baixar no <br> Google Play</p>
        </button>

        <button class="d-flex justify-content-center align-items-center gap-3 text-start border-0 rounded-4 w-200 p-3 bg-blue-light m-auto">
          <i class="bi bi-apple text-light fs-35"></i>
          <p class="fw-bold text-light">Baixar na <br> App Store</p>
        </button>


        <p class="ps-5 mt-3 mb-4 pe-5 fs-9">A Prefeitura de São Roque iniciou o pré-cadastramento para as etapas de vacinação contra a Covid-19, que será feito exclusivamente pelo aplicativo.
        </p>
      </div>
      <!-- Imagem -->
      <div class="col-12 col-lg-8 mb-4 position-relative">
        <img src="./assets/images/noticias-banner-lateral.jpg" alt="" class="img-fluid rounded-4 bg-bright">
        <div class="absolute-bottom-left-noticias text-light">
          <h3 class="fw-bold">Banco de imagens</h3>
          <p>
            Confira nossa galeria de imagens de diversos pontos da cidade de São Roque. </p>
        </div>
      </div>

    </div>

    <!-- Cards Serviços -->
    <div class="d-flex flex-column flex-xl-row justify-content-between gap-3">

      <div class="d-flex justify-content-center align-items-top gap-5">
        <div class="rounded-4 bg-purple-light p-4">
          <i class="bi bi-bookmark-star fs-50 text-purple-light"></i>
          <h3 class="fw-bold">Diário Oficial de São Roque</h3>
          <p class="mb-3">Consulta de documentos e publicações por Ano, Número e Assunto.</p>
          <button class="fw-bold border-0 rounded-4 py-1 px-3 text-light bg-purple-light underline-hover">Acesse <i class="bi bi-arrow-up-right"></i></button>
        </div>

        <div class="rounded-4 bg-purple-light p-4">
          <i class="bi bi-gear-fill fs-50 text-purple-light"></i>
          <h3 class="fw-bold fs-26">Portal de Serviços</h3>
          <p class="mb-3">Lista de todos os serviços oferecidos pelos órgãos públicos de São Roque.</p>
          <button class="fw-bold border-0 rounded-4 py-1 px-3 text-light bg-purple-light underline-hover">Acesse <i class="bi bi-arrow-up-right"></i></button>
        </div>
      </div>

      <div class="d-flex justify-content-center align-items-top gap-5">
        <div class="rounded-4 bg-purple-light p-4">
          <i class="bi bi-bookmark-star fs-50 text-purple-light"></i>
          <h3 class="fw-bold">Estrutura Organizacional</h3>
          <p class="mb-3">Os representantes e gestores de nosso município.</p>
          <button class="fw-bold border-0 rounded-4 py-1 px-3 text-light bg-purple-light underline-hover">Acesse <i class="bi bi-arrow-up-right"></i></button>
        </div>

        <div class="rounded-4 bg-purple-light p-4">
          <i class="bi bi-gear-fill fs-50 text-purple-light"></i>
          <h3 class="fw-bold fs-26">Portal da Transparencia</h3>
          <p class="mb-3">Acompanhe a execução orçamentária das ações do governo.</p>
          <button class="fw-bold border-0 rounded-4 py-1 px-3 text-light bg-purple-light underline-hover">Acesse <i class="bi bi-arrow-up-right"></i></button>
        </div>
      </div>
    </div>

  </div>

  <div class="bg-purple">
    <footer class="container mt-5 text-light">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <img src="../../includes/footer/assets/logo-sr-branco.png" alt="logo-prefeitura" class="img-fluid py-2">

        <div>
          <ul class="d-flex justify-content-center gap-5">
            <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
            <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
            <li><a href="#"><i class="bi bi-youtube"></i> Youtube</a></li>
            <li><a href="#"><i class="bi bi-twitter-x"></i> Twitter</a></li>
          </ul>
        </div>

        <p>Desenvolvidor por:</p>
      </div>
    </footer>
  </div>
</body>

</html>