<!DOCTYPE html>
<html lang="pt-br">
<?php
include '../../../projeto-portal/includes/head/head.php'
?>
<link rel="stylesheet" href="/css/style.css">

<body class="index-bg-main">
  <?php
  include '../../../projeto-portal/includes/header/header.php'
  ?>
  <main>

    <div class="container">
      <section>
        <br>
        <h4>
          <p>Feirão do Estância Supermercados acontece nesta terça em São Roque.</p>
        </h4>
        <br>
      </section>

      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide col-lg-6 col-md-6 col-sm-12">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/estancia1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/estancia2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/estancia3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/estancia4.jpg" class="d-block w-100" alt="...">
            </div>

          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>

        <div class="gallery-container-event col-md-6 col-lg-6 col-sm-12">
          <img src="./assets/estancia1 - small.jpg" alt=" ">
          <img src="./assets/estancia2 - small.jpg" alt=" ">
          <img src="./assets/estancia3 - small.jpg" alt=" ">
          <img src="./assets/estancia4 - small.jpg" alt=" ">
        </div>

      </div>


      <br>
      <div class="container">
        <p>Nesta terça-feira, São Roque será palco de uma oportunidade única para aqueles em busca de novas oportunidades profissionais, pois o Estância Supermercados realiza seu Feirão de Empregos. Este evento promete conectar talentos locais a oportunidades de trabalho dentro da renomada rede de supermercados. Com vagas disponíveis em diversas áreas, desde atendimento ao cliente até logística e gestão, o Feirão destaca o compromisso do Estância Supermercados com a giro de empregos e o desenvolvimento econômico da comunidade. Os participantes terão a chance de apresentar seus currículos, participar de entrevistas e conhecer mais sobre as oportunidades de crescimento profissional oferecidas pela empresa. Este evento não apenas representa uma chance de ingresso no mercado de trabalho, mas também destaca o papel ativo do Estância Supermercados no fomento ao emprego local e no fortalecimento da economia da região de São Roque.</p>
        <br>

        <p><b>Local do evento:</b> R. Dr. Stevaux, 240 - Centro, São Roque - SP, 18130-500.
        </p>
      </div>


      <br>

      <div class="container">
        <div class="row vejaMais">
          <div class="col-lg-12">
            <h4>Veja Mais</h4>
          </div>
          <div class="col-sm">
            Notícias: PAT São Roque traz novas vagas para cozinheiro, auxiliar de cozinha, atendente e muito mais
          </div>
          <div class="col-sm">
            Notícias: Prefeitura de São Roque abre processo seletivo para psicólogo e assistente social
          </div>
          <div class="col-sm">
            Notícias: Qualifica São Roque Oferece Dois Novos Cursos de Capacitação Gratuitos para a População
          </div>

        </div>
        <br>
        <br>

      </div>

    </div>

  </main>
  <?php
  include '../../../projeto-portal/includes/footer/footer.html'
  ?>

</body>

</html>