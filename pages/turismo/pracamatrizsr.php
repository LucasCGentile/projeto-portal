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

        <img class="rounded mx-auto d-block img-fluid tupper" src="./images/praca.webp" alt="imagem da praça da matriz de são roque">

        <h1 class="title-turismo mb-4 mt-5 text-center">Praça da Matriz de São Roque</h1>

        <p class="content-turismo fs-5 mb-3">Considerada uma das mais bonitas da região, a Igreja da matriz de São
            Roque, foi
            construída no Século XVII. É cercada por uma praça com lojas e restaurantes. Repleta de muitas histórias e
            tradições, a Igreja, em homenagem a São Roque, Santo que Pedro Vaz de Barros foi devoto, teve como objetivo
            primordial abrigar os fiéis e mesmo após muitas revitalizações mantém seu estilo arquitetônico moderno.
        </p>
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