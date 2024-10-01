<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/estilo4.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="favicon.ico">
  <title>BiodexJr</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/logo/Logotipo.jpg" alt="" id="logoinicio">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Home</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="animalia.php">Animalia</a></li>
            <li><a class="dropdown-item" href="plantae.php">Plantae</a></li>
            <li><a class="dropdown-item" href="fungi.php">Fungi</a></li>
            <li><a class="dropdown-item" href="protista.php">Protista</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</header>
<body>
  <br>
  <div class="imagem">
    <div class="container">
      <div class="centro">
        <h1>Reino Monera</h1>
        <a href="https://brasilescola.uol.com.br/biologia/monera.htm">
          <h3>O <strong>Reino Monera</strong>, engloba uma vasta diversidade de seres vivos unicelulares, procariontes e microscópicos. Esses organismos são considerados os mais antigos da Terra e desempenham um papel fundamental nos ecossistemas.</h3><br>
        </a>
        <h2>Características Comuns</h2>
        <p>Exemplos de organismos procariontes: Bactérias, arqueas e cianobactérias. 
          Importância dos procariontes: Seu papel na natureza, na indústria e na saúde humana.
          Diferenças entre células procariontes e eucariontes: Comparação entre células simples e complexas.
        </p><br>
        <h2>Tipos de Moneras:</h2><br>
        <p>Bactérias: São os mais famosos. Algumas causam doenças, mas muitas outras são importantes para a natureza e até para a gente, como as que ajudam a fazer iogurte e queijo.
Arqueias: São bem parecidas com as bactérias, mas vivem em lugares bem estranhos, como fontes de água quente e salinas.
        </p>
      </div>
    </div>
  </div>

  <?php
  //Acessando o BD
  include_once ("conexao.php");
  //Buscando reinos
  $s1 = 'select distinct cat from monera order by cat asc;';
  $r1 = mysqli_query($conexao, $s1);
  ?>

  <div class="conteudo">

    <section class="pokedex">
      <?php


      //Páginação
      //Define a página atual
      if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
      } else {
        $pagina = 1;
      }

      //Determina quantos registros serão exibidos por página
      $limite = 30;

      //Calcula o total de regristros
      $s = "select * from monera";
      $r2 = mysqli_query($conexao, $s);
      $total = mysqli_num_rows($r2);

      //Calcula a última página
      $ultima = ceil($total / $limite);

      //Calcula a posicação a partir de onde serão exibidos os resultados
      $inicio = ($pagina * $limite) - $limite;


      //Instrução SQL
      if (isset($_GET['cat']) && $_GET['cat'] != "todos") {
        $cat = $_GET['cat'];
        $sql = "select * from monera where cat like '%monera'= '$cat' || cat2='$cat' limit $inicio,$limite ";
      } else {
        $sql = "select * from monera limit $inicio, $limite;";
      }
      //Executando a instrução SQL
      $resultado = mysqli_query($conexao, $sql);
      //Verificando se encontrou resultado
      if (mysqli_num_rows($resultado) > 0) {
        //Lenda os dados de cada monera
        while ($monera = mysqli_fetch_assoc($resultado)) {
          $id = $monera['id'];
          $nome = $monera['nome'];
          $cat = $monera['cat'];
          $desc = $monera['descricao'];

          echo "<!-- ######################  Aqui começa o pokemon ############################# -->
<div class='pokemon' tabindex='$id'> 
  <figure class='pokemon-figure'>
    <img src='img/monera/$id.png' alt='$nome'> <!-- Imagem do pokemon -->
  </figure>
  <section class='pokemon-description'>
    <span class='pokemon-id'>#$id</span> <!-- Número do pokemon -->
    <h1 class='pokemon-name'>$nome</h1> <!--Nome do pokemon -->
    <div class='pokemon-types'>
      <span class='pokemon-type background-$cat'>$cat</span> <!-- Tipo 1 -->
    </div>
  </section>
  <!-- Início dos stats do Pokemon, exibidos quando clicamos -->
  <br>
    <section class='pokemon-stats'>
      <div class='stat-row'>
        <div>Nome</div> <!-- Vida -->
        <div class='stat-bar'>
          <div>$nome</div>
        </div>
      </div>
      <div class='stat-row'>
        <div>cat</div> <!-- Ataque -->
        <div class='stat-bar'>
          <div>$cat</div>
        </div>
      </div>
      <div class='stat-row'>
        <div>Descricao</div> <!-- Ataque Especial -->
        <div class='stat-bar'>
          <div>$desc</div>
        </div>
      </div>
    </section>
    <!-- Fim dos stats do Pokemon, exibidos quando clicamos -->
</div>";

          //   echo "
          //   <!-- ######################  Aqui começa o monera ############################# -->
          //   <div class='monera' tabindex='$id'> 
          //     <figure class='monera-figure'>
          //       <img src='img/$id.png' alt='$nome'> <!-- Imagem do monera -->
          //     </figure>
          //     <section class='monera-description'>
          //       <span class='monera-id'>#$id</span> <!-- Número do monera -->
          //       <h1 class='monera-name'>$nome</h1> <!--Nome do monera -->
          //       <div class='monera-types'>
          //         <span class='monera-type background-$reino'>$reino</span> <!-- reino 1 -->
          //       </div>
          //     </section>
          //     <!-- Início dos stats do monera, exibidos quando clicamos -->
          //       <section class='monera-stats'>
          //         <div class='stat-row'>
          //           <div>Nome</div> <!-- Nome -->
          //           <div class='stat-bar'>
          //             <div>$nome</div>
          //           </div>
          //         </div>
          //         <div class='stat-row'>
          //           <div>Reino</div> <!-- Reino -->
          //           <div class='stat-bar'>
          //             <div>$reino</div>
          //           </div>
          //         </div>
          //         <div class='stat-row'>
          //           <div>grupoegoria</div> <!-- grupoegoria -->
          //           <div class='stat-bar'>
          //             <div>$grupo</div>
          //           </div>
          //         </div>
          //         <div class='stat-row'>
          //           <div>Descricao</div> <!-- Descricao -->
          //           <div class='stat-bar'>
          //             <div>$desc</div>
          //           </div>
          //         </div>
          //       </section>
          //       <!-- Fim dos stats do monera, exibidos quando clicamos -->
          //   </div>
          // <!-- ######################### Aqui Termina o monera ####################################-->
      
          //   ";
        }
      } else {
        echo "<p>Nenhum monera encontrado.</p>";
      }
      ?>
  </div>
  <div class="paginacao">
    <?php
    //Define a página anterior
    $anterior = $pagina - 1;
    if ($anterior < 1) {
      $anterior = 1;
    }
    //Define a página posterior
    $posterior = $pagina + 1;
    if ($posterior > $ultima) {
      $posterior = $ultima;
    }
    //Cria a barra de navegação de páginas
    echo "
          <a href='index.php?pagina=1'><button type='button' class='btn btn-success btn-sm'> << </button></a>
          <a href='index.php?pagina=$anterior'> <button type='button' class='btn btn-success btn-sm'> < </button></a>
          <button type='button' class='btn btn-info'>$pagina</button>
          <a href='index.php?pagina=$posterior'><button type='button' class='btn btn-success btn-sm'> > </button></a>
          <a href='index.php?pagina=$ultima'><button type='button' class='btn btn-success btn-sm'> >> </button></a>
        ";
    ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>