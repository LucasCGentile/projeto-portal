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
                    <img src="images/camila.webp" class="card-img-top rounded-top"
                        alt="Camila está sentada em sua mesa de escritório, com a cabeça em suas mãos e os cotovelos apoiados na mesa. Com sorriso timido e misterioso, está de cabelos soltos e usando cacharrel na cor preta.">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title">Camila Silva</h5>
                        <p class="card-text mt-2">"Ao invés de desenhar o esboço de uma casa, agora esboço um algoritmo,
                            traçando caminhos em vez de corredores. "</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal"
                            data-bs-target="#camilaModal">
                            Saiba mais
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="camilaModal" tabindex="-1" aria-labelledby="camilaModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="camilaModalLabel">Camila dos Santos Inácio da Silva
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <figure class="mt-2">
                                        <img class="rounded" src="images/camila.webp"
                                            alt="Camila está sentada em sua mesa de escritório, com a cabeça em suas mãos e os cotovelos apoiados na mesa. Com sorriso timido e misterioso, está de cabelos soltos e usando cacharrel na cor preta.">
                                    </figure>
                                    <div>
                                        <h1>Camila dos Santos Inácio da Silva</h1>
                                        <p class="mt-2">
                                            Graduada em Arquitetura, escolhi trilhar o caminho da programação,
                                            aproveitando minha expertise em Design para agregar uma nova dimensão
                                            aos meus conhecimentos.
                                        </p>
                                        <p class="mt-3">RA: 2650832223015</p>
                                        <p class="mt-3">Atribuição: Encarregada da organização de eventos na cidade e de
                                            preservar a tranquilidade dos colegas em dias de estresse.
                                        </p>
                                        <h4 class="mt-3 mb-2">Criações:</h4>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/eventos/eventos.php"
                                            role="button">Eventos</a>
                                        <button type="button" class="btn btn-danger float-end"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- profile card Daniela -->
                <div class="p-0 col-lg-4 col-md-6 mt-3  border rounded border-dark-subtle" style="width: 18rem;">
                    <img src="images/daniele.webp" class="card-img-top rounded-top"
                        alt="Daniele de frente, com sorriso timido, onde está usando filtro do Instagram que simula percing nos labios. De tranças nagô, está em um ambiente de claridade baixa, semelhante a um quarto.">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title">Daniele Costa</h5>
                        <p class="card-text mt-2 mb-5">"Determinada a encarar novos desafios a cada dia."</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal"
                            data-bs-target="#danieleModal">
                            Saiba mais
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="danieleModal" tabindex="-1" aria-labelledby="danieleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="danieleModalLabel">Daniele da Costa Silva</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <figure class="mt-2">
                                        <img class="rounded" src="images/daniele.webp"
                                            alt="Daniele de frente, com sorriso timido, onde está usando filtro do Instagram que simula percing nos labios. De tranças nagô, está em um ambiente de claridade baixa, semelhante a um quarto.">
                                    </figure>
                                    <div>
                                        <h1>Daniele da Costa Silva</h1>
                                        <p class="mt-2">
                                            Como técnica em Marketing Digital, tive a oportunidade de explorar a
                                            programação e desenvolvi um interesse genuíno por ela.
                                        </p>
                                        <p class="mt-3">RA: 2650832313031</p>
                                        <p class="mt-3">Atribuição:Encarregada de documentar pontos turísticos,
                                            demonstrando dedicação constante ao auxiliar a equipe.
                                        </p>
                                        <h4 class="mt-3 mb-2">Criações:</h4>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/turismo/turismo.php"
                                            role="button">Turismo</a>
                                        <button type="button" class="btn btn-danger float-end"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- profile card Felipe -->
                <div class="p-0 col-lg-4 col-md-6 mt-3  border rounded border-dark-subtle" style="width: 18rem;">
                    <img src="images/felipe.webp" class="card-img-top rounded-top"
                        alt="Felipe de frente, sorrindo com de braços cruzados sorrindo. Usando camiseta vermelha e boné para trás, em um ambiente de sol, e ao fundo um desfoque de uma monatanha verde.">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title">Felipe Santos</h5>
                        <p class="card-text mt-2 mb-4">"Cada ponto e vírgula esquecido é um suspiro de desespero."</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal"
                            data-bs-target="#felipeModal">
                            Saiba mais
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="felipeModal" tabindex="-1" aria-labelledby="felipeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="felipeModalLabel">Felipe Santos Nascimento</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <figure class="mt-2">
                                        <img class="rounded" src="images/felipe.webp"
                                            alt="Felipe de frente, sorrindo com de braços cruzados sorrindo. Usando camiseta vermelha e boné para trás, em um ambiente de sol, e ao fundo um desfoque de uma monatanha verde.">
                                    </figure>
                                    <div>
                                        <h1>Felipe Santos Nascimento</h1>
                                        <p class="mt-2">A tecnologia sempre despertou minha paixão, e ao descobrir o
                                            curso de Sistemas, não hesitei em realizar minha matrícula.
                                        </p>
                                        <p class="mt-3">RA: 2650832313032</p>
                                        <p class="mt-3">
                                            Atribuição: Encarregado de compilar dados históricos da cidade, estabelecer
                                            normas de utilização, gerenciar a ouvidoria e proporcionar momentos de
                                            leveza à equipe mesmo nas circunstâncias mais sombrias.
                                        </p>
                                        <h4 class="mt-3 mb-2">Criações:</h4>
                                        <a class="btn btn-nos"
                                            href="../../../projeto-portal/pages/historia/historia.php"
                                            role="button">História</a>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/contato/contato.php"
                                            role="button">Ouvidoria</a>
                                        <a class="btn btn-nos" href="../../../projeto-portal/pages/regras/regras.php"
                                            role="button">Regras de Uso</a>
                                        <button type="button" class="btn btn-danger float-end"
                                            data-bs-dismiss="modal">Fechar</button>
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
                        <img src="images/isaias.webp" class="card-img-top rounded-top"
                            alt="Isaias de perfil, de braços cruzados sorrindo. Usando camiseta branca em um ambiente levemente escuro, e corte de cabelo baixo">
                        <div class="card-body ms-3 mt-3">
                            <h5 class="card-title">Isaías Costa</h5>
                            <p class="card-text mt-2 mb-4">"A programação não é tão simples como alguns vídeos no TikTok
                                podem sugerir."</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal"
                                data-bs-target="#isaiasModal">
                                Saiba mais
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="isaiasModal" tabindex="-1" aria-labelledby="isaiasModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="isaiasModalLabel">Isaías Batista da Costa</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <figure class="mt-2">
                                            <img class="rounded align-iten-center" src="images/isaias.webp"
                                                alt="Isaias de perfil, de braços cruzados sorrindo. Usando camiseta branca em um ambiente levemente escuro, e corte de cabelo baixo">
                                        </figure>
                                        <div>
                                            <h1>Isaías Batista da Costa</h1>
                                            <p class="mt-2">
                                                Com formação em Recursos Humanos, Administração e atualmente em
                                                Sistemas, estou considerando a possibilidade de empreender e criar minha
                                                própria empresa.
                                            </p>
                                            <p class="mt-3">RA: 2650832313003</p>
                                            <p class="mt-3">
                                                Atribuição: Encarregado da bibliografia dos membros, coordenação dos
                                                horários de ônibus e preservação da paz e harmonia dentro do grupo.
                                            </p>
                                            <h4 class="mt-3 mb-2">Criações:</h4>
                                            <a class="btn btn-nos"
                                                href="../../../projeto-portal/pages/onibus/onibus.php"
                                                role="button">Horário de Ônibus</a>
                                            <a class="btn btn-nos"
                                                href="../../../projeto-portal/pages/quemSomos/quemSomos.php"
                                                role="button">Quem somos</a>
                                            <button type="button" class="btn btn-danger float-end"
                                                data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- profile card Lucas -->
                    <div class="p-0 col-lg-4 col-md-6 mt-3 border rounded border-dark-subtle" style="width: 18rem;">
                        <img src="images/lucas.webp" class="card-img-top rounded-top"
                            alt="Lucas de perfil, sorrindo com uma paisagem de sambambaia ao fundo, onde está usando seus óculos e camiseta preta.">
                        <div class="card-body ms-3 mt-3">
                            <h5 class="card-title">Lucas Gentile</h5>
                            <p class="card-text mt-2">"Prometeram-me que programar era tão simples quanto seguir uma
                                receita de bolo."</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn mt-3 mb-3 btn-nos" data-bs-toggle="modal"
                                data-bs-target="#lucasModal">
                                Saiba mais
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="lucasModal" tabindex="-1" aria-labelledby="lucasModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="lucasModalLabel">Lucas Cresciulo Gentile</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <figure class="mt-2">
                                            <img class="rounded" src="images/lucas.webp"
                                                alt="Lucas de perfil, sorrindo com uma paisagem de sambambaia ao fundo, onde está usando seus óculos e camiseta preta.">
                                        </figure>
                                        <div>
                                            <h1>Lucas Cresciulo Gentile</h1>
                                            <p class="mt-2">
                                                Como técnico em desenvolvimento de sistemas, optei por aprofundar meus
                                                conhecimentos ao ingressar na Fatec.
                                            </p>
                                            <p class="mt-3">RA: 2650832313033</p>
                                            <p class="mt-3">
                                                Atribuição: Encarregado de coletar e anexar notícias, executar os
                                                includes, criar a página inicial e gerenciar a equipe.
                                            </p>
                                            <h4 class="mt-3 mb-2">Criações:</h4>
                                            <a class="btn btn-nos" href="../../../projeto-portal/index.php"
                                                role="button">Home</a>
                                            <a class="btn btn-nos"
                                                href="../../../projeto-portal/pages/noticias/noticias.php"
                                                role="button">Noticias</a>
                                            <a class="btn btn-nos" href="#" role="button">Includes: Footer e Nav</a>
                                            <button type="button" class="btn btn-danger float-end"
                                                data-bs-dismiss="modal">Fechar</button>
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