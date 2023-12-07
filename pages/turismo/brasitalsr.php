<!DOCTYPE html>
<html lang="pt-BR">
<?php
$titulo = "Pontos Turisticos de São Roque";
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

    <img class="rounded mx-auto d-block img-fluid tupper" src="./images/brasital.webp" alt="imagem do morro do Saboó de são roque">

    <h1 class="title-turismo mb-4 mt-5 text-center">Brasital de São Roque</h1>

    <p class="content-turismo fs-5 mb-3">Uma das primeiras industrias do Estado de São Paulo, a Brasital, hoje é
      considerada
      um dos principais pontos turisticos da cidade, por ser um lugar amplo e bem aproveitado pela Prefeitura para
      fins turisticos e educacionais. Conect-se com a natureza de São Roque e desfrute das trilhas e cachoeiras da
      Brasital.</p>
    <div class="mb-5">
      <h2 class="complement-turismo">Como chegar:</h2>
      <h2 class="complement-turismo">Dias de Visitação:</h2>
      <h2 class="complement-turismo">Horários:</h2>
    </div>
  </main>

  <?php
  include '../../includes/footer/footer.html'
  ?>
</body>

</html>