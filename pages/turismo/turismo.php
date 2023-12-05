<!DOCTYPE html>
<html lang="en">
<?php
$titulo = "Turismo em São Roque";
include '../../includes/head/head.php'
?>

<body class="corpo-turismo">
  <?php
  include '../../includes/header/header.php'
  ?>
  <main class="row">
    <h1 class="sec-turismo">Secretaria de Turismo de São Roque</h1>
    <ul class="nav-turismo justify-content-center">
    <li class="turismonav-item">
      <a class="nav-link disable" href="./turismo.php">Turismo</a>
    </li>
    <li class="turismonav-item">
      <a class="nav-link active" href="./pages/pracamatrizsr.php">Praça da Matriz</a>
    </li>
    <li class="turismonav-item">
      <a class="nav-link active" href="./pages/roteirovinhosr.php">Roteiro do Vinho</a>
    </li>
    <li class="turismonav-item">
      <a class="nav-link active" href="./pages/morrosaboosr.php">Morro do Saboó</a>
    </li>
    <li class="turismonav-item">
      <a class="nav-link active" href="./pages/brasitalsr.php">Brasital</a>
    </li>
  </ul> 
  
  <img src="#" alt="imagem de são roque via drone">

  <h1 class="title-turismo">Seja bem vindo à São Roque!</h1>

  <p class="content-turismo">Uma cidade repleta de pontos históricos, eventos e cercada por uma flora rica em muita beleza. 
Aqui você encontrará em destaque os principais pontos turísticos da cidade, conhecerá sobre a história da nossa cidade e ficará por dentro de todos os eventos que irão ocorrer! 
</p>
  </main>
  <?php
  include '../../includes/footer/footer.php'
  ?>
</body>

</html>