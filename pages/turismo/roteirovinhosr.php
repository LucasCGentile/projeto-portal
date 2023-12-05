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

    <img src="#" alt="imagem do roteiro do vinho em são roque">

    <h1 class="title-turismo mb-4 mt-5">Roteiro do Vinho de São Roque</h1>

    <p class="content-turismo fs-5 mb-3">CFrequentado não somente pelos apreciadores de vinho, o Roteiro do Vinho em
      são Roque
      é um trajeto criado para lembrar da história e tradições da cidade de São Roque. Lugar perfeito para
      apreciar vinhos deliciosos e a natureza, conta com uma extensa variedade de restaurantes e hotéis.
    </p>
    <div class="mb-5">
      <h2 class="complement-turismo">Como chegar:</h2>
      <h2 class="complement-turismo">Dias de Visitação:</h2>
      <h2 class="complement-turismo">Horários:</h2>
    </div>
  </main>

  <?php
  include '../../includes/footer/footer.php'
  ?>
</body>

</html>