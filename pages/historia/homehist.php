<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Historia</title>
  <link rel="stylesheet" href="npm i bootstrap-icons">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="meu.css">
  <?php
  include './includes/head/head.php'
  ?>

</head>

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
          <div class="rounded-4 left-content">

            <div class="d-inline-block position-relative mb-2">
              <a href="historia.php"><img class="img-fluid" src="https://placehold.co/470x350" alt="">
                <h2 class="text-light position-absolute noticia-1-text">HISTORIA DA NOSSA CIDADE</h2>
            </div></a>

            <div class="rounded-4 left-content">

              <div class="d-inline-block position-relative mb-2">
                <a href="historia.php"><img class="img-fluid" src="https://placehold.co/470x350" alt="">
                  <h2 class="text-light position-absolute noticia-1-text">GALERIA DE PREFEITOS</h2>
              </div></a>




              <!-- Lateral Direia -->
              <div class="size">
                <!-- Menu de Navegação -->
                <div class="text-light index-bg-services d-flex justify-content-around align-items-center gap-3 rounded-top">

                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-info-circle-fill"></i>
                    <h3 class="fw-bold fs-15 text-center">Portal da <br> Transparencia</h3>
                  </div>

                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-bank2"></i>
                    <h3 class="fw-bold fs-15 text-center">Secretarias e <br> Governos</h3>
                  </div>

                  <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-gear-fill"></i>
                    <h3 class="fw-bold fs-15 text-center">Portal de <br> Serviços</h3>
                  </div>

                </div>


                <!-- Seções -->
                <div class="bg-light font-color rounded">
                  <div class="d-flex justify-content-between rounded-pill bg-light">

                    <div class="p-3">
                      <h3 class="index-bg-main">Cidadão</h3>
                    </div>

                    <div class="p-3">
                      <h3 class="index-bg-main">Empresa</h3>
                    </div>

                    <div class="p-3">
                      <h3 class="index-bg-main">Servidor</h3>
                    </div>

                    <div class="p-3">
                      <h3 class="index-bg-main">Turista</h3>
                    </div>

                  </div>

                  <!-- Cards -->
                  <div>
                    <!-- Card 1 Linha -->
                    <div class="d-flex justify-content-around align-items-center text-center">
                      <div class="index-bg-main">
                        <i class="bi bi-person-plus-fill"></i>
                        <h3 class="h6">Refis 2023</h3>
                      </div>
                      <div class="index-bg-main">
                        <i class="bi bi-card-list"></i>
                        <h3 class="h6">Nota Fiscal <br> Eletronica</h3>
                      </div>
                      <div class="index-bg-main">
                        <i class="bi bi-person-plus-fill"></i>
                        <h3 class="h6">Portal do <br> Contribuinte</h3>
                      </div>
                    </div>

                    <!-- Card 2 Linha -->
                    <div class="d-flex justify-content-around align-items-center text-center">
                      <div class="index-bg-main">
                        <i class="bi bi-house-door-fill"></i>
                        <h3 class="h6">Débitos - IPTU,ITU, <br> ITBI e ISS</h3>
                      </div>
                      <div class="index-bg-main">
                        <i class="bi bi-book-half"></i>
                        <h3 class="h6">Diário Oficial e <br> Legislação</h3>
                      </div>
                      <div class="index-bg-main">
                        <i class="bi bi-clipboard2-check-fill"></i>
                        <h3 class="h6">Concursos e Seleções</h3>
                      </div>
                    </div>

                    <!-- Card 3 Linha -->
                    <div class="d-flex justify-content-around align-items-center text-center">
                      <div class="index-bg-main">
                        <i class="bi bi-check-lg"></i>
                        <h3 class="h6">Agendamento <br> Atende Fácil</h3>
                      </div class="index-bg-main">
                      <div class="index-bg-main">
                        <i class="bi bi-person-plus-fill"></i>
                        <h3 class="h6">Agendamento SEFIN / <br> SEPLANH</h3>
                      </div>
                      <div class="index-bg-main">
                        <i class="bi bi-house-door-fill"></i>
                        <h3 class="h6">Programa Municipal <br> de Habitação</h3>
                      </div>
                    </div>
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