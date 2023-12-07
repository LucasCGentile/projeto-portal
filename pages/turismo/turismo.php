<!DOCTYPE html>
<html lang="pt-br">
<?php
$titulo = "Turismo em São Roque";
include '../../includes/head/head.php'
?>

<body class="index-bg-main">
  <?php
  include '../../includes/header/header.php'
  ?>
  <main class="container">
    <h1 class="sec-turismo">Secretaria de Turismo de São Roque</h1>
    <div class="container d-flex justify-content-center mt-4 mb-4">
      <ul class="nav-turismo">
        <li class="turismonav-item">
          <a class="nav-link disable" href="./turismo.php">Turismo</a>
        </li>
        <li class="turismonav-item">
          <a class="nav-link active" href="./pracamatrizsr.php">Praça da Matriz</a>
        </li>
        <li class="turismonav-item">
          <a class="nav-link active" href="./roteirovinhosr.php">Roteiro do Vinho</a>
        </li>
        <li class="turismonav-item">
          <a class="nav-link active" href="./morrosaboosr.php">Morro do Saboó</a>
        </li>
        <li class="turismonav-item">
          <a class="nav-link active" href="./brasitalsr.php">Brasital</a>
        </li>
      </ul>
    </div>
    <figure>
      <img class="rounded mx-auto d-block img-fluid tupper" src="./images/portal-sr.webp" alt="Imagem do Portal da cidade de São Roque.">
      <figcaption class="text-center">Imagem do Portal da cidade de São Roque.</figcaption>
    </figure>


    <h1 class="title-turismo mb-4 mt-5 text-center">Seja bem vindo à São Roque!</h1>

    <p class="content-turismo fs-5 mb-5">Uma cidade repleta de pontos históricos, eventos e cercada por uma flora
      rica em
      muita beleza.
      Aqui você encontrará em destaque os principais pontos turísticos da cidade, conhecerá sobre a história da
      nossa cidade e ficará por dentro de todos os eventos que irão ocorrer!
    </p>
  </main>
  <?php
  include '../../includes/footer/footer.html'
  ?>
</body>

</html>