<!DOCTYPE html>
<html lang="pt-br">
<?php
include './includes/head/head.php'
?>

<body>
  <?php
  include './includes/header/header.php'
  ?>
  <!-- Conteudo Principal -->

  <main>
    <div class="index-bg-main pb-5">
      <div class="container">

        <!-- Conteudo Inicial -->

        <div class="d-flex flex-column flex-lg-row justify-content-between gap-5">

          <!-- Lateral Esquerda -->
          <div class="index-esquerda rounded-4 left-content">
            <div class="mb-2 noticia-principal">
              <h2 class="fw-bolder texto-noticia">São Roque abre inscrições para eleição do Conselho Municipal dos Direito da Juventude</h2>
            </div>

            <div class="text-light d-flex flex-column flex-lg-row justify-content-center align-content-center gap-4 p-3">
              <div class="d-flex flex-row flex-lg-column card-noticia">
                <img class="img-fluid mb-3 rounded" src="./assets/images/index-noticia-2.jpg" alt="">
                <h2 class="fs-16 p-1">Rotatória fixa será construída na região próxima à Tecama</h2>
              </div>

              <div class="d-flex flex-row flex-lg-column card-noticia">
                <img class="img-fluid mb-3 rounded" src="./assets/images/index-noticia-3.jpg" alt="">
                <h2 class="fs-16">Ginástica Rítmica encerra ano de atividades</h2>
              </div>
            </div>

          </div>

          <!-- Lateral Direia -->
          <div class="index-direita">
            <!-- Menu de Navegação -->
            <div class="text-light index-bg-services d-flex justify-content-around align-items-center gap-3 rounded-top pt-1 pb-1">

              <div class="d-flex flex-column justify-content-center align-items-center px-5 pointer underline border-end">
                <i class="bi bi-info-circle-fill bg-transparent icon mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Portal da <br> Transparencia</h3>
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center px-5 pointer underline">
                <i class="bi bi-bank2 bg-transparent icon mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Secretarias e <br> Governos</h3>
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center px-5 pointer underline border-start">
                <i class="bi bi-gear-fill bg-transparent icon mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Portal de <br> Serviços</h3>
              </div>

            </div>


            <!-- Seções -->
            <div class="bg-light rounded-4 rounded-top-0">
              <div class="p-3">
                <div class="d-flex justify-content-between align-items-center rounded-pill index-bg-secondary p-1 mb-4">

                  <div class="index-bg-services py-2 px-4 rounded-pill pointer">
                    <h4 class="text-light fs-14 fw-bold">Cidadão</h4>
                  </div>

                  <div class="py-2 px-4 rounded-pill text-hover pointer">
                    <h4 class="fs-14 fw-bold">Empresa</h4>
                  </div>

                  <div class="py-2 px-4 rounded-pill text-hover pointer">
                    <h4 class="fs-14 fw-bold">Servidor</h4>
                  </div>

                  <div class="py-2 px-4 rounded-pill text-hover pointer">
                    <h4 class="fs-14 fw-bold">Turista</h6>
                  </div>
                </div>

                <!-- Cards -->
                <!-- Card 1 Linha -->
                <div class="d-flex justify-content-around align-items-center text-center">

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-hover card-size rounded-3 px-5 border">
                    <i class="bi bi-person-plus-fill bg-transparent"></i>
                    <span class="fs-15 no-wrap fw-bolder d-inline">Refis 2023</span>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-hover card-size rounded-3 px-5 border">
                    <i class="bi bi-card-list bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Nota Fiscal <br> Eletronica</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-hover card-size rounded-3 px-5 border">
                    <i class="bi bi-person-plus-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Portal do <br> Contribuinte</h3>
                  </div>
                </div>

                <!-- Card 2 Linha -->
                <div class="d-flex justify-content-around align-items-center text-center mt-2 mb-2">

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size card-hover rounded-3 px-5 border ">
                    <i class="bi bi-house-door-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Débitos - IPTU,ITU, <br> ITBI e ISS</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size card-hover rounded-3 px-5 border ">
                    <i class="bi bi-book-half bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Diário Oficial e <br> Legislação</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size card-hover rounded-3 px-5 border">
                    <i class="bi bi-clipboard2-check-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Concursos e Seleções</h3>
                  </div>
                </div>

                <!-- Card 3 Linha -->
                <div class="d-flex justify-content-around align-items-center text-center">
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size card-hover rounded-3 px-5 border">
                    <i class="bi bi-check-lg bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Agendamento <br> Atende Fácil</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size card-hover rounded-3 px-5 border">
                    <i class="bi bi-person-plus-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Agendamento SEFIN / <br> SEPLANH</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size card-hover rounded-3 px-5 border">
                    <i class="bi bi-house-door-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Programa Municipal <br> de Habitação</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Banner Aviso -->
        <div class="mt-4">
          <figure>
            <img src="./assets/images/home-banner.png" alt="" class="img-fluid rounded-3">
          </figure>
        </div>
      </div>
    </div>

    <!-- Secção Noticias / Informações -->
    <div class="index-bg-secondary">
      <div class="container pt-5 pb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>Noticias</h2>
          <div>
            <a href="./pages/noticias/noticias.php">Agencia de Noticias <i class="bi bi-box-arrow-up-right"></i></a>
          </div>
        </div>

        <div class="d-flex flex-column justify-content-between flex-md-row flex-md-row">
          <!-- Noticias -->
          <div class="d-flex flex-column gap-3 index-esquerda">

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-4.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Prefeitura promove palestra de Conscientização e Prevenção do Câncer de Próstata.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-5.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Festival José Cabinda acontece neste domingo e segunda-feira.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-6.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Prefeitura abre anistia para regularização de imóveis.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-7.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Qualifica São Roque abre inscrições para formação de bartender e estratégia de negociação.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-8.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Triunfante da Fanfarra Municipal de São Roque vence Circuito Paulista de Bandas e Fanfarras.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-9.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Confira as ações de zeladoria realizadas pela Prefeitura nesta segunda-feira - 13 de novembro.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-10.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">PAT São Roque traz novas vagas para pintor, trabalhador rural, vendedor e muito mais.
              </h6>
            </div>

            <div class="d-flex align-items-center gap-3 card-noticia-2 pointer bg-light p-2 rounded-3">
              <img src="./assets/images/index-noticia-11.jpg" alt="" class="img-fluid rounded-3">
              <h6 class="fw-bold">Boletim Coronavírus - 27/10 à 09/11.
              </h6>
            </div>

          </div>

          <!-- Banners -->
          <div class="d-flex flex-column index-direita">

            <div class="d-flex justify-content-center gap-4 mb-3 ">
              <div class="card-lateral index-bg-main card-noticia-2 p-3 pointer rounded-3">
                <img src="./assets/images/noticia-index-lateral1.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <h3 class="fs-18 fw-bold">Vem aí o SAEB 2023</h3>
              </div>
              <div class="card-lateral">
                <img src="./assets/images/banner-index-1.jpg" alt="" class="img-resize pointer rounded-3">
              </div>
            </div>

            <div class="d-flex justify-content-center gap-4 mb-3">
              <div class="card-lateral">
                <img src="./assets/images/banner-index-2.jpg" alt="" class="img-resize pointer rounded-3">
              </div>
              <div class="card-lateral bg-light card-noticia-2 pointer p-3 rounded-3">
                <img src="./assets/images/noticia-index-lateral2.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <h3 class="fs-18 fw-bold">Mercado Livre realiza novo feirão do emprego em São Roque
                </h3>
              </div>
            </div>

            <div class="d-flex justify-content-center gap-4 mb-3">
              <div class="card-lateral bg-light card-noticia-2 pointer p-3 rounded-3">
                <img src="./assets/images/noticia-index-lateral3.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <h3 class="fs-18 fw-bold">Transporte da Saúde conta com novo número
                </h3>
              </div>
              <div class="card-lateral">
                <img src="./assets/images/banner-index-3.jpg" alt="" class="img-resize pointer rounded-3">
              </div>
            </div>

            <div class="d-flex justify-content-center gap-4 mb-3">
              <div class="card-lateral">
                <img src="./assets/images/banner-index-4.jpg" alt="" class="img-resize pointer rounded-3 ">
              </div>
              <div class="card-lateral bg-light card-noticia-2 pointer p-3 rounded-3">
                <img src="./assets/images/noticia-index-lateral4.jpg" alt="" class="img-fluid rounded-3 mb-2">
                <h3 class="fs-18 fw-bold">Prefeitura de São Roque promove 3º Leilões Público Online de Imóveis
                </h3>
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