<!DOCTYPE html>
<html lang="en">
<?php
$titulo = "Eventos em São Roque";
include '../../includes/head/head.php'
?>

<body>
  <?php
  include '../../includes/header/header.php'
  ?>
  <main>

    <div class="container">
      <section>
        <br>
        <h4>
          <p>Eventos acontecendo em São Roque em <b>OUTUBRO</b>:</p>
        </h4>
        <br>
      </section>


      <div class="container text-center">
        <button type="button" class="btn btn-outline-dark">OUTUBRO</button>
        <button type="button" class="btn btn-outline-dark">NOVEMBRO</button>
        <button type="button" class="btn btn-outline-dark">DEZEMBRO</button>
      </div>

      <div class="row">
        <div class="gallery-container">
          <a href="./pisa.php" class="gallery-items"><img src="./assets/Rectangle 71.png" alt=" "> <br>
            <spam class="description">São Roque sedia o VII Encontro Paulista de Agroecologia</spam>
          </a>
          <a href="./pisa.php" class="gallery-items"><img src="./assets/Rectangle 32.png" alt=" "><span class="description">Castramóvel realiza ação para pets no próximo fim de semana em Maylasky</span></a>
          <a href="./pisa.php" class="gallery-items"><img src="./assets/Rectangle 72.png" alt=" "><span class="description">Feirão do Estância Supermercados acontece nesta terça em São Roque</span></a>
          <a href="./pisa.php" class="gallery-items"><img src="./assets/Rectangle 73.png" alt=" "><span class="description">23ª Festival da Pisa da uva de São Roque, acontece no próximo final de semana em Camguera.</span></a>
          <a href="./pisa.php" class="gallery-items"><img src="./assets/Rectangle 74.png" alt=" "><span class="description">Mercado Livre realiza novo feirão do emprego em São Roque</span></a>
          <a href="./pisa.php" class="gallery-items"><img src="./assets/Rectangle 75.png" alt=" "><span class="description">Feira Permanente recebe, neste domingo, Feira de Adoção</span></a>
        </div>

        <div class="calendario">
          <div class="month">
            <ul>
              <li class="prev">&#10094;</li>
              <li class="next">&#10095;</li>
              <li>OUTUBRO<br><span style="font-size:12px">2023</span></li>
            </ul>
          </div>

          <ul class="weekdays">
            <li>DOM</li>
            <li>SEG</li>
            <li>TER</li>
            <li>QUA</li>
            <li>QUI</li>
            <li>SEX</li>
            <li>SAB</li>
          </ul>

          <ul class="days">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li><span class="active">10</span></li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>

          </ul>
        </div>

        <br>
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
  include '../../includes/footer/footer.php'
  ?>

</body>

</html>