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

            <div class="d-inline-block position-relative mb-2">
              <img class="img-fluid" src="./assets/images/home-noticia-1.png" alt="">
              <h2 class="text-light position-absolute noticia-1-text">São Roque sedia o VII Encontro Paulista de Agroecologia</h2>
            </div>

            <div class="text-light d-flex flex-column flex-lg-row justify-content-center align-content-center gap-4 p-3">

              <div class="d-flex flex-row flex-lg-column align-items-center">
                <img class="img-fluid me-3" src="./assets/images/home-noticia-2.png" alt="">
                <h2 class="h6 ">PAT São Roque traz novas vagas para vigia, balconista, atendente e muito mais</h2>
              </div>

              <div class="d-flex flex-row flex-lg-column align-items-center img-size">
                <img class="img-fluid me-3" src="./assets/images/home-noticia-3.png" alt="">
                <h2 class="h6">Prefeitura troca iluminação do Estádio Quintinão</h2>
              </div>
            </div>

          </div>

          <!-- Lateral Direia -->
          <div class="index-direita">
            <!-- Menu de Navegação -->
            <div class="text-light index-bg-services d-flex justify-content-around align-items-center gap-3 rounded-top pt-1 pb-1">

              <div class="d-flex flex-column justify-content-center align-items-center p-2">
                <i class="bi bi-info-circle-fill bg-transparent icon mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Portal da <br> Transparencia</h3>
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center p-2">
                <i class="bi bi-bank2 bg-transparent icon mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Secretarias e <br> Governos</h3>
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center p-2">
                <i class="bi bi-gear-fill bg-transparent icon mb-2"></i>
                <h3 class="fw-bold fs-15 text-center ">Portal de <br> Serviços</h3>
              </div>

            </div>


            <!-- Seções -->
            <div class="bg-light rounded-4 rounded-top-0">
              <div class="text-color p-3">
                <div class="d-flex justify-content-between align-items-center rounded-pill index-bg-secondary p-1 mb-4">

                  <div class="index-bg-services py-2 px-4 rounded-pill">
                    <h4 class="text-light fs-14 fw-bold">Cidadão</h4>
                  </div>

                  <div class="py-2 px-4 rounded-pill text-hover">
                    <h4 class="fs-14 fw-bold">Empresa</h4>
                  </div>

                  <div class="py-2 px-4 rounded-pill text-hover">
                    <h4 class="fs-14 fw-bold">Servidor</h4>
                  </div>

                  <div class="py-2 px-4 rounded-pill text-hover">
                    <h4 class="fs-14 fw-bold">Turista</h6>
                  </div>
                </div>

                <!-- Cards -->
                <!-- Card 1 Linha -->
                <div class="d-flex justify-content-around align-items-center text-center">

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-hover card-size rounded-3 px-5 borda">
                    <i class="bi bi-person-plus-fill bg-transparent"></i>
                    <span class="fs-15 no-wrap fw-bolder d-inline">Refis 2023</span>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-card-list bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Nota Fiscal <br> Eletronica</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-person-plus-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Portal do <br> Contribuinte</h3>
                  </div>
                </div>

                <!-- Card 2 Linha -->
                <div class="d-flex justify-content-around align-items-center text-center">

                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-house-door-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Débitos - IPTU,ITU, <br> ITBI e ISS</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-book-half bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Diário Oficial e <br> Legislação</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-clipboard2-check-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Concursos e Seleções</h3>
                  </div>
                </div>

                <!-- Card 3 Linha -->
                <div class="d-flex justify-content-around align-items-center text-center">
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-check-lg bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Agendamento <br> Atende Fácil</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
                    <i class="bi bi-person-plus-fill bg-transparent"></i>
                    <h3 class="fs-15 no-wrap fw-bolder">Agendamento SEFIN / <br> SEPLANH</h3>
                  </div>
                  <div class="d-flex flex-column justify-content-center
                    align-items-center index-bg-secondary icon card-size rounded-3 px-5 borda">
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
            <img src="https://placehold.co/1300x200" alt="" class="img-fluid">
          </figure>
        </div>
      </div>
    </div>

    <!-- Secção Noticias / Informações -->
    <div class="index-bg-secondary">
      <div class="container pt-5 pb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>Noticias</h2>
          <a href="./pages/noticias/noticias.php">Agencia de Noticias</a>
        </div>
        <h3>Lorem ipsum, dolor sit amet</h3>

        <div class="d-flex flex-column gap-3 flex-md-row justify-content-between">
          <!-- Noticias -->
          <div class="d-flex flex-column gap-3 index-esquerda">

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur ?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

            <div class="d-flex align-items-center gap-3 border bg-light p-2">
              <img src="https://placehold.co/160x120" alt="" class="img-fluid">
              <h6>Lorem ipsum dolor sit amet. Reprehenderit, aspernatur?</h6>
            </div>

          </div>
          <!-- Banners -->

          <div class="d-flex flex-column gap-3 index-direita">
            <div class="d-flex gap-3">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
            </div>

            <div class="d-flex gap-3">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
            </div>

            <div class="d-flex gap-3">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
            </div>

            <div class="d-flex gap-3">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
              <img src="https://placehold.co/275x290" alt="" class="img-fluid rounded">
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