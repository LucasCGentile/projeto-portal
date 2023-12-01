<!DOCTYPE html>
<html lang="pt-br">
<?php
$titulo = "Noticias de São Roque";
include '../../includes/head/head.php';
?>

<body>

  <div class="container">
    <!-- Header da Area de Noticias -->
    <header class="justify-content-between d-md-none d-lg-block d-none p-3">
      <div class="d-flex justify-content-between">
        <ul class="d-flex gap-3">
          <li><a href="../../index.php" class="fw-bold purple-hover">Site Principal</a></li>
          <li><a href="#" class="fw-bold purple-hover">Serviços</a></li>
          <li><a href="#" class="fw-bold purple-hover">Fale Conosco</a></li>
        </ul>


        <ul class="d-flex gap-3">
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-facebook"></i> Facebook</a></li>
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-instagram"></i> Instagram</a></li>
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-youtube"></i> Youtube</a></li>
          <li><a href="#" class="fw-bold purple-hover"><i class="bi bi-twitter-x"></i> Twitter</a></li>
        </ul>
      </div>
    </header>
  </div>

  <div class="container">
    <nav class="d-flex justify-content-between">
      <figure>
        <img src="../../includes/header/assets/logo-sr-header.png"" alt=" logo-noticias" class="img-fluid pt-3">
      </figure>

      <ul class="d-flex align-items-center gap-4">
        <li><a href="#" class="btn-noticias">Inicio</a></li>
        <li><a href="#" class="btn-noticias">Noticias</a></li>
        <li><a href="#" class="btn-noticias">Banco de Imagens</a></li>
      </ul>
    </nav>

    <!-- Banner -->
    <div class="banner rounded-4 mb-3 ">
      <h3 class="text-light text-center p-3 fw-bolder">Seja bem-vindo(a) à Agência de Notícias da Prefeitura de São Roque</h3>
    </div>

    <!-- Noticias -->
    <div class="row">

      <!-- Noticia 1 -->
      <div class="col-12 col-md-6 noticia-1">
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, ipsam?</h1>
          <p></p>
      </div>


      <div class="col-12 col-md-6">
        <div class="row">

          <!-- Noticia 2 -->
          <div class="col-12 noticia-2">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, delectus?</h1>
            <p></p>
          </div>

          <!-- Noticia 3 -->
          <div class="col-12 noticia-3">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ut?</h1>
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Acontecendo Agora -->
    <section class="bg-now mt-4 rounded-3">
      <h3 class="text-center text-primary fw-bold pt-3">Acontecendo Agora</h3>

      <article class="row ">

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-4.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque dá início à “Semana da Primeira Infância.</p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class=" card d-flex flex-row gap-3 bg-transparent border-0  pointer">
            <img src="./assets/images/noticia-5.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque amplia número de praças e revitaliza espaços de lazer.</p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-6.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque realiza melhorias na Avenida T-2, no Setor Sol Nascente.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-7.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque amplia acesso à vacinação e disponibiliza quatro pontos aos finais de semana.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-8.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Guarda Civil Metropolitana capacita agentes para reforço à segurança da Capital.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-9.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura publica novo cronograma com prazos para aprovação de mais de 1,3 mil projetos.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="https://placehold.co/100x100" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeito Guto Issa lança obras de recuperação do asfalto, das calçadas e iluminação em LED</p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="https://placehold.co/100x100" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeito Guto Issa vistoria obras do BRT e ressalta compromisso para entregar projeto.</p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-12.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque desobstrui dezenas de vias afetadas pela queda de 160 árvores e 70 galhos.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-13.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque promove fim de semana com diversas atrações culturais gratuitas.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-14.jpeg" alt="" class=" rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque orienta consumidores na Black Friday.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>

        <section class="col m-3">
          <div class="card d-flex flex-row gap-3 bg-transparent border-0 pointer">
            <img src="./assets/images/noticia-15.jpeg" alt="" class="rounded-3 img-fluid img-resize-now">
            <div class="d-flex flex-column gap-1 p-1">
              <p class="card-text">Prefeitura de São Roque garante cerca de R$ 10 milhões para a cultura com a Política Nacional Aldir Blanc.
              </p>
              <small>Atualizado em:</small>
            </div>
          </div>
        </section>
      </article>
    </section>

    <!-- Informativos -->
    <aside class="mt-4 d-flex flex-column flex-lg-row justify-content-center align-items-center gap-1">
      <figure>
        <img src="./assets/images/banner-covid-19.png" alt="" class="img-fluid rounded-3">
      </figure>

      <figure>
        <img src="./assets/images/banner-h1n1.png" alt="" class="img-fluid rounded-3">
      </figure>
    </aside>

    <!-- App e + -->
    <div class="row">

      <div class=" col-4 rounded-4 text-center">
        <h3>Baixe o App <br>Prefeitura 24horas</h3>
        <p>Gestão Inteligente tem <br>planejamento e tecnologia <br> para cuidar de você.</p>

        <div>
          <button>
            <h3>Baixar no <br> Google Play</h3>
          </button>
        </div>

        <div>
          <button>
            <h3>Baixar na <br> App Store</h3>
          </button>
        </div>

        <small>A Prefeitura de Goiânia iniciou o pré-cadastramento para as etapas de vacinação contra a Covid-19, que será feito exclusivamente pelo aplicativo.
        </small>
      </div>

      <div class="col-8">
        <figure>
          <img src="https://placehold.co/900x400" alt="" class="img-fluid rounded-4">
        </figure>
      </div>

    </div>

    <!-- Cards Serviços -->
    <div class="d-flex justify-content-between">

      <div class="d-flex">
        <div>
          <i class="bi bi-bookmark-star"></i>
          <h3>Diário Oficial de São Roque</h3>
          <p>Consulta de documentos e publicações por Ano, Número e Assunto.</p>
          <button>Acesse</button>
        </div>

        <div>
          <i class="bi bi-gear-fill"></i>
          <h3>Portal de Serviços</h3>
          <p>Lista de todos os serviços oferecidos pelos órgãos públicos de São Roque.</p>
          <button>Acesse</button>
        </div>
      </div>

      <div class="d-flex">
        <div>
          <i class="bi bi-sign-intersection-y-fill"></i>
          <h3>Estrutura Organizacional</h3>
          <p>Os representantes e gestores de nosso município.</p>
          <button>Acesse</button>
        </div>

        <div>
          <i class="bi bi-info-circle-fill"></i>
          <h3>Portal da Transparencia</h3>
          <p>Acompanhe a execução orçamentária das ações do governo.</p>
          <button>Acesse</button>
        </div>
      </div>

    </div>

    <footer class="">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <img src="../../includes/header/assets/logo-sr-header.png" alt="logo-prefeitura" class="img-fluid">

        <div>
          <ul class="d-flex justify-content-center gap-5">
            <li><a href=""><i class="bi bi-facebook"></i>Facebook</a></li>
            <li><a href=""><i class="bi bi-instagram"></i>Instagram</a></li>
            <li><a href=""><i class="bi bi-youtube"></i>Youtube</a></li>
            <li><a href=""><i class="bi bi-twitter-x"></i>Twitter</a></li>
          </ul>
        </div>

        <h4>Desenvolvidor por:</h4>
      </div>
    </footer>
  </div>
</body>

</html>