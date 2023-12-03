<!DOCTYPE html>
<html lang="pt-br">
<?php
$titulo = "Prefeitura de São Roque";
include './includes/head/head.php'
?>

<body>
  <?php
  include './includes/header/header.php'
  ?>
  <!-- Conteudo Principal -->

  <main>
    <div class="index-bg-main pb-3">
      <div class="container">

        <!-- Conteudo Inicial -->

        <div class="d-flex flex-column flex-lg-row justify-content-between gap-5">

          <!-- Lateral Esquerda -->
          <div class="index-noticias-esquerda rounded-4 bg-purple-dark">
            <div class="position-relative">
              <img class="img-fluid bg-bright rounded-top-4" src="./assets/images/index-noticia-1.jpg" alt="">
              <h2 class=" fw-bolder text-white absolute-bottom-left">São Roque abre inscrições para eleição do Conselho Municipal dos Direito da Juventude</h2>
            </div>

            <div class="row p-4">
              <div class="col-12 col-lg-6 pointer ">
                <img class="img-fluid rounded me-3 mb-3" src="./assets/images/index-noticia-2.jpg" alt="">
                <h2 class="fs-16 text-light fw-bold">Prefeitura de São Roque autoriza ambulantes durante as festas de fim de ano</h2>
              </div>

              <div class="col-12 col-lg-6 pointer ">
                <img class="img-fluid rounded me-3 mb-3" src="./assets/images/index-noticia-3.jpg" alt="">
                <h2 class="fs-16 text-light fw-bold">A equipe de ginástica artística de São Roque se destaca em Indaiatuba
                </h2>
              </div>

            </div>

          </div>

          <!-- Lateral Direia -->
          <div class="index-menu-direita">
            <!-- Menu de Navegação -->
            <div class="text-light bg-green d-flex justify-content-around align-items-center gap-3 rounded-top pt-1 pb-1">

              <div class="d-flex flex-column justify-content-center align-items-center pointer underline-hover">
                <i class="bi bi-info-circle-fill bg-transparent fs-40 mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Portal da <br> Transparencia</h3>
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center pointer underline-hover">
                <i class="bi bi-bank2 bg-transparent fs-40 mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Secretarias e <br> Governos</h3>
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center pointer underline-hover">
                <i class="bi bi-gear-fill bg-transparent fs-40 mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Portal de <br> Serviços</h3>
              </div>

            </div>


            <!-- Seções -->
            <div class="bg-light rounded-4 rounded-top-0">
              <div class="p-3">
                <div class="d-flex justify-content-between align-items-center rounded-pill index-bg-secondary p-1 mb-4">

                  <div class="rounded-pill pointer bg-green px-2 py-2">
                    <h4 class="fs-14 fw-bold">Cidadão</h4>
                  </div>

                  <div class="rounded-pill text-hover pointer px-2 py-2">
                    <h4 class="fs-14 fw-bold">Empresa</h4>
                  </div>

                  <div class="rounded-pill text-hover pointer px-2 py-2">
                    <h4 class="fs-14 fw-bold">Servidor</h4>
                  </div>

                  <div class="rounded-pill text-hover pointer px-2 py-2">
                    <h4 class="fs-14 fw-bold">Turista</h6>
                  </div>
                </div>

                <!-- Cards -->
                <!-- Card 1 Linha -->
                <div class="d-flex justify-content-between align-items-center gap-3 text-center">

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-person-plus-fill fs-40"></i>
                    <span class="fs-15 fw-bolder">Refis 2023</span>
                  </div>

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-card-list fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Nota Fiscal Eletronica</h3>
                  </div>

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-person-plus-fill fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Portal do Contribuinte</h3>
                  </div>

                </div>

                <!-- Card 2 Linha -->
                <div class="d-flex justify-content-between align-items-center text-center gap-3 mt-2 mb-2">

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-house-door-fill fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Débitos - IPTU,ITU, ITBI e ISS</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-book-half fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Diário Oficial e Legislação</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-clipboard2-check-fill fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Concursos e Seleções</h3>
                  </div>
                </div>

                <!-- Card 3 Linha -->
                <div class="d-flex justify-content-between align-items-center text-center gap-3">
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-check-lg fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Agendamento Atende Fácil</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-person-plus-fill fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Agendamento SEFIN / SEPLANH</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary card-hover rounded-3 border">
                    <i class="bi bi-house-door-fill fs-40"></i>
                    <h3 class="fs-15 fw-bolder">Programa Municipal de Habitação</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Banner Aviso -->
        <div class="mt-4 pointer">
          <figure>
            <img src="./assets/images/home-banner.webp" alt="" class="img-fluid rounded-3">
          </figure>
        </div>
      </div>
    </div>

    <!-- Secção Noticias / Informações -->
    <div class="index-bg-secondary">
      <div class="container pt-5 pb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="fw-bold">Noticias</h2>
          <div>
            <a href="./pages/noticias/noticias.php" class=" fw-bolder text-purple text-purple-hover underline-hover">Agencia de Noticias <i class="bi bi-box-arrow-up-right"></i></a>
          </div>
        </div>

        <div class="d-flex flex-column justify-content-between flex-lg-row gap-5">
          <!-- Noticias -->
          <div class="d-flex flex-column gap-3">

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-4.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Prefeitura promove palestra de Conscientização e Prevenção do Câncer de Próstata.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-5.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Festival José Cabinda acontece neste domingo e segunda-feira.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-6.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Prefeitura abre anistia para regularização de imóveis.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-7.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Qualifica São Roque abre inscrições para formação de bartender e estratégia de negociação.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-8.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Triunfante da Fanfarra Municipal de São Roque vence Circuito Paulista de Bandas e Fanfarras.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-9.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Confira as ações de zeladoria realizadas pela Prefeitura nesta segunda-feira - 13 de novembro.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-10.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">PAT São Roque traz novas vagas para pintor, trabalhador rural, vendedor e muito mais.
              </p>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-11.jpg" alt="" class="img-fluid rounded-3">
              <p class="fw-bold">Boletim Coronavírus - 27/10 à 09/11.
              </p>
            </div>

          </div>

          <!-- Banners -->
          <div class="d-flex flex-column index-direita">

            <div class="d-flex gap-4 mb-3 ">
              <div class="index-bg-main card-noticia p-3 pointer rounded-3 w-50p">
                <img src="./assets/images/noticia-index-lateral1.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <p class="fs-18 fw-bold">Conheça o Sistema de Avaliação da Educação Básica (SAEB)</p>
              </div>
              <figure class="p-3 pointer rounded-3 w-50p">
                <img src="./assets/images/banner-index-1.webp" alt="" class="img-fluid rounded-3 mb-2">
              </figure>
            </div>

            <div class="d-flex gap-4 mb-3">
              <figure class="p-3 pointer rounded-3 w-50p">
                <img src="./assets/images/banner-index-2.webp" alt="" class="img-fluid pointer rounded-3">
              </figure>
              <div class="bg-light card-noticia pointer p-3 rounded-3 w-50p">
                <img src="./assets/images/noticia-index-lateral2.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <p class="fs-18 fw-bold">Mercado Livre realiza novo feirão do emprego em São Roque
                </p>
              </div>
            </div>

            <div class="d-flex gap-4 mb-3">
              <div class=" bg-light card-noticia pointer p-3 rounded-3 w-50p">
                <img src="./assets/images/noticia-index-lateral3.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <p class="fs-18 fw-bold">Transporte da Saúde conta com novo número
                </p>
              </div>
              <figure class="p-3 pointer rounded-3 w-50p">
                <img src="./assets/images/banner-index-3.webp" alt="" class="img-fluid pointer rounded-3">
              </figure>
            </div>

            <div class="d-flex gap-4 mb-3">
              <div class="w-50p">
                <img src="./assets/images/banner-index-4.webp" alt="" class="img-fluid pointer rounded-3 ">
              </div>
              <div class="bg-light card-noticia pointer p-3 rounded-3 w-50p">
                <img src="./assets/images/noticia-index-lateral4.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <p class="fs-18 fw-bold">Prefeitura de São Roque promove 3º Leilões Público Online de Imóveis
                </p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

  </main>



  <?php
  include './includes/footer/footer.php'
  ?>
</body>

</html>