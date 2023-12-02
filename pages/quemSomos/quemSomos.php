<!DOCTYPE html>
<html lang="pt-br">

<?php
$titulo = "Quem Somos";
include '../../includes/head/head.php'
?>

<body>

    <?php
    include '../../includes/header/header.php'
    ?>

    <main class="conatiner">
        <div>
            <div class="mt-3 mb-3 text-center">
                <h1 class="title-nos">Nosso código, nossa História</h1>
                <p>Bem-vindo à nossa galeria de talentos, onde cada "profissional" é uma peça essencial em
                    nossa jornada.
                    <br>Explore as páginas individuais para descobrir as inspiradoras histórias por trás de cada rosto
                    que molda o nosso caminho coletivo.
                </p>
            </div>
            <div class="row justify-content-evenly">

                <!-- profile card Camila -->
                <div class="p-0 col-lg-4 col-md-6 mt-3  border rounded border-dark-subtle" style="width: 18rem;">
                    <img src="images/camila.jpg" class="card-img-top rounded-top" alt="Camila está sentada em sua mesa de escritório, com a cabeça em suas mãos e os cotovelos apoiados na mesa. Com sorriso timido e misterioso, está de cabelos soltos e usando cacharrel na cor preta.">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title">Camila Silva</h5>
                        <p class="card-text mt-2">"O AutoCad não chega aos pés do Xampp"</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal" data-bs-target="#camilaModal">
                            Saiba mais
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="camilaModal" tabindex="-1" aria-labelledby="camilaModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="camilaModalLabel">Camila dos Santos Inácio da Silva
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <figure class="mt-2">
                                        <img class="img-sobre-indi rounded" src="images/camila.jpg" alt="Camila está sentada em sua mesa de escritório, com a cabeça em suas mãos e os cotovelos apoiados na mesa. Com sorriso timido e misterioso, está de cabelos soltos e usando cacharrel na cor preta.">
                                    </figure>
                                    <div>
                                        <h1>Camila dos Santos Inácio da Silva</h1>
                                        <p class="mt-2">Formada em Arquitetura, resolvi embarcar na aventura dos
                                            códigos na programação.
                                        </p>
                                        <p class="mt-3">RA: 2650832223015</p>
                                        <p class="mt-3">Atribuição: Responsável por eventos da cidade e de manter a
                                            calam dos colegas em dias de stress.
                                        </p>
                                        <h4 class="mt-3 mb-2">Criações:</h4>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/eventos/eventos.php" role="button">Eventos</a>
                                        <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- profile card Daniela -->
                <div class="p-0 col-lg-4 col-md-6 mt-3  border rounded border-dark-subtle" style="width: 18rem;">
                    <img src="images/daniele.jpg" class="card-img-top rounded-top" alt="Daniele de frente, com sorriso timido, onde está usando filtro do Instagram que simula percing nos labios. De tranças nagô, está em um ambiente de claridade baixa, semelhante a um quarto.">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title">Daniele Costa</h5>
                        <p class="card-text mt-2">"Disposta a enfrentar novos desafios, todos os dias"</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal" data-bs-target="#danieleModal">
                            Saiba mais
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="danieleModal" tabindex="-1" aria-labelledby="danieleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="danieleModalLabel">Daniele da Costa Silva</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <figure class="mt-2">
                                        <img class="img-sobre-indi rounded" src="images/daniele.jpg" alt="Daniele de frente, com sorriso timido, onde está usando filtro do Instagram que simula percing nos labios. De tranças nagô, está em um ambiente de claridade baixa, semelhante a um quarto.">
                                    </figure>
                                    <div>
                                        <h1>Daniele da Costa Silva</h1>
                                        <p class="mt-2">Técnica em Marketing Digital, tive acesso a programação, e
                                            gostei.
                                        </p>
                                        <p class="mt-3">RA: 2650832313031</p>
                                        <p class="mt-3">Atribuição: Responsável por registrar pontos turisticos.
                                            Esforçada, sempre ajudando a equipe.
                                        </p>
                                        <h4 class="mt-3 mb-2">Criações:</h4>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/turismo/turismo.php" role="button">Turismo</a>
                                        <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- profile card Felipe -->
                <div class="p-0 col-lg-4 col-md-6 mt-3  border rounded border-dark-subtle" style="width: 18rem;">
                    <img src="images/felipe.jpg" class="card-img-top rounded-top" alt="Felipe de frente, sorrindo com de braços cruzados sorrindo. Usando camiseta vermelha e boné para trás, em um ambiente de sol, e ao fundo um desfoque de uma monatanha verde.">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title">Felipe Santos</h5>
                        <p class="card-text mt-2">"A cada ; esquecido, é um suspiro de: SOCORRO."</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal" data-bs-target="#felipeModal">
                            Saiba mais
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="felipeModal" tabindex="-1" aria-labelledby="felipeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="felipeModalLabel">Felipe Santos Nascimento</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <figure class="mt-2">
                                        <img class="img-sobre-indi rounded" src="images/felipe.jpg" alt="Felipe de frente, sorrindo com de braços cruzados sorrindo. Usando camiseta vermelha e boné para trás, em um ambiente de sol, e ao fundo um desfoque de uma monatanha verde.">
                                    </figure>
                                    <div>
                                        <h1>Felipe Santos Nascimento</h1>
                                        <p class="mt-2">A técnologia sempre foi uma paixão minha,e quando descobri o
                                            curso de Sistemas,
                                            fiz minha matrícula.
                                        </p>
                                        <p class="mt-3">RA: 2650832313032</p>
                                        <p class="mt-3">Atribuição: Responsável por coletar dados da hoistória da
                                            cidade, criar normas
                                            de uso, e ouvidoria, e de nos fazer rir em momentos sombrios.
                                        </p>
                                        <h4 class="mt-3 mb-2">Criações:</h4>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/historia/historia.php" role="button">História</a>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/contato/contato.php" role="button">Ouvidoria</a>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/regras/regras.php" role="button">Regras de Uso</a>
                                        <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="mt-5 mb-5">
                <div class="row justify-content-evenly">

                    <!-- profile card Isaías -->
                    <div class="p-0 col-lg-4 col-md-6 mt-3 border rounded border-dark-subtle" style="width: 18rem;">
                        <img src="images/isaias.jpg" class="card-img-top rounded-top" alt="Isaias de perfil, de braços cruzados sorrindo. Usando camiseta branca em um ambiente levemente escuro, e corte de cabelo baixo">
                        <div class="card-body ms-3 mt-3">
                            <h5 class="card-title">Isaías Costa</h5>
                            <p class="card-text mt-2">"Programção não é tão fácil, como mostram no Tik Tok."</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal" data-bs-target="#isaiasModal">
                                Saiba mais
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="isaiasModal" tabindex="-1" aria-labelledby="isaiasModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="isaiasModalLabel">Isaías Batista da Costa</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <figure class="mt-2">
                                            <img class="img-sobre-indi rounded align-iten-center" src="images/isaias.jpg" alt="Isaias de perfil, de braços cruzados sorrindo. Usando camiseta branca em um ambiente levemente escuro, e corte de cabelo baixo">
                                        </figure>
                                        <div>
                                            <h1>Isaías Batista da Costa</h1>
                                            <p class="mt-2">Formado em RH, Administração e agora em Sistemas, acho que
                                                vou montar uma empresa.
                                            </p>
                                            <p class="mt-3">RA: 2650832313003</p>
                                            <p class="mt-3">Atribuição: Responsável por Bibliografia dos integrantes e
                                                Horário de Ônibus, e de manter a paz e harmonia do grupo.
                                            </p>
                                            <h4 class="mt-3 mb-2">Criações:</h4>
                                            <a class="btn btn-nos" href="../../../projeto-portal/pages/onibus/onibus.php" role="button">Horário de Ônibus</a>
                                            <a class="btn btn-nos" href="../../../projeto-portal/pages/quemSomos/quemSomos.php" role="button">Quem somos</a>
                                            <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- profile card Lucas -->
                    <div class="p-0 col-lg-4 col-md-6 mt-3 border rounded border-dark-subtle" style="width: 18rem;">
                        <img src="images/lucas.jpeg" class="card-img-top rounded-top" alt="Lucas de perfil, sorrindo com uma paisagem de sambambaia ao fundo, onde está usando seus óculos e camiseta preta.">
                        <div class="card-body ms-3 mt-3">
                            <h5 class="card-title">Lucas Gentile</h5>
                            <p class="card-text mt-2">"Me prometeram que programar era igual a receita de bolo."</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal" data-bs-target="#lucasModal">
                                Saiba mais
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="lucasModal" tabindex="-1" aria-labelledby="lucasModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="lucasModalLabel">Lucas Cresciulo Gentile</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <figure class="mt-2">
                                            <img class="img-sobre-indi rounded" src="images/lucas.jpeg" alt="Lucas de perfil, sorrindo com uma paisagem de sambambaia ao fundo, onde está usando seus óculos e camiseta preta.">
                                        </figure>
                                        <div>
                                            <h1>Lucas Cresciulo Gentile</h1>
                                            <p class="mt-2">Técnico em desenvolvimento de sistemas, decidi me
                                                aprofundar, ingressando na Fatec
                                            </p>
                                            <p class="mt-3">RA: 2650832313033</p>
                                            <p class="mt-3">Atribuição: Responável por coletar e anexar notícias, e
                                                realizar os includes e
                                                gerencia a equipe.
                                            </p>
                                            <h4 class="mt-3 mb-2">Criações:</h4>
                                            <a class="btn btn-nos" href="../../../projeto-portal/pages/noticias/noticias.php" role="button">Noticias</a>
                                            <a class="btn btn-nos" href="#" role="button">Includes: Footer e Nav</a>
                                            <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>

    <?php
    include '../../includes/footer/footer.php'
    ?>
</body>

</html>