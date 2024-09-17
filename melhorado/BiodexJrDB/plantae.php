<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/estilo3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="favicon.ico">
  <title>BiodexJr</title>
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
            <li><a class="dropdown-item" href="monera.php">Monera</a></li>
            <li><a class="dropdown-item" href="fungi.php">Fungi</a></li>
            <li><a class="dropdown-item" href="protista.php">Protista</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Home</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="animalia.php">Animalia</a></li>
            <li><a class="dropdown-item" href="monera.php">Monera</a></li>
            <li><a class="dropdown-item" href="fungi.php">Fungi</a></li>
            <li><a class="dropdown-item" href="protista.php">Protista</a></li>
          </ul>
              </div>
            </div>
          </nav>
    </header>
<body>
  
  <div class="imagem">
    <div class="container">
      <div class="centro">
        <h1>Reino Plantae</h1>
        <a href="https://brasilescola.uol.com.br/biologia/reino-plantae.htm#:~:text=Os%20organismos%20do%20Reino%20Plantae,e%20cloroplastos%20em%20seu%20interior.">
          <h3>O <strong>Reino Plantae</strong>, é o reino das plantas. Elas são seres vivos muito importantes para o nosso planeta.</h3><br>
        </a>
        <h2>Características Comuns</h2>
        <p>Fazem a própria comida: As plantas usam a luz do sol para transformar água e gás carbônico em alimento. Esse processo se chama fotossíntese.
        São fixas: As plantas ficam no mesmo lugar, diferente dos animais que se locomovem.
        Têm raiz, caule e folhas: A raiz prende a planta no solo e absorve água e nutrientes. O caule sustenta a planta e transporta essas substâncias para as folhas. As folhas capturam a luz do sol para a fotossíntese.
        </p><br>
        <h2>Importantes</h2><br>
        <p>Elas são essenciais para a vida na Terra, pois produzem o oxigênio que respiramos e servem de alimento para muitos seres vivos.
        </p>
      </div>
    </div>
  </div>

  <?php
  //Acessando o BD
  include_once ("conexao.php");
  //Buscando reinos
  $s1 = 'select distinct grupo from plantas order by grupo asc;';
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
      $s = "select * from plantas";
      $r2 = mysqli_query($conexao, $s);
      $total = mysqli_num_rows($r2);

      //Calcula a última página
      $ultima = ceil($total / $limite);

      //Calcula a posicação a partir de onde serão exibidos os resultados
      $inicio = ($pagina * $limite) - $limite;


      //Instrução SQL
      if (isset($_GET['grupo']) && $_GET['grupo'] != "todos") {
        $grupo = $_GET['grupo'];
        $sql = "select * from plantas where grupo like '%animalia'= '$grupo' limit $inicio,$limite ";
      } else {
        $sql = "select * from plantas limit $inicio, $limite;";
      }
      //Executando a instrução SQL
      $resultado = mysqli_query($conexao, $sql);
      //Verificando se encontrou resultado
      if (mysqli_num_rows($resultado) > 0) {
        //Lenda os dados de cada plantas
        while ($plantas = mysqli_fetch_assoc($resultado)) {
          $id = $plantas['id'];
          $nome = $plantas['nome'];
          $grupo = $plantas['grupo'];
          $tipo = $plantas['tipo'];
          $desc = $plantas['descricao'];

          echo "<!-- ######################  Aqui começa o pokemon ############################# -->
<div class='pokemon' tabindex='$id'> 
  <figure class='pokemon-figure'>
    <img src='img/plantas/$id.png' alt='$nome'> <!-- Imagem do pokemon -->
  </figure>
  <section class='pokemon-description'>
    <span class='pokemon-id'>#$id</span> <!-- Número do pokemon -->
    <h1 class='pokemon-name'>$nome</h1> <!--Nome do pokemon -->
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
        <div>grupo</div> <!-- Defesa -->
        <div class='stat-bar'>
          <div>$grupo</div>
        </div>
      </div>
      <div class='stat-row'>
        <div>tipo</div> <!-- Defesa -->
        <div class='stat-bar'>
          <div>$tipo</div>
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
          //   <!-- ######################  Aqui começa o plantas ############################# -->
          //   <div class='plantas' tabindex='$id'> 
          //     <figure class='plantas-figure'>
          //       <img src='img/$id.png' alt='$nome'> <!-- Imagem do plantas -->
          //     </figure>
          //     <section class='plantas-description'>
          //       <span class='plantas-id'>#$id</span> <!-- Número do plantas -->
          //       <h1 class='plantas-name'>$nome</h1> <!--Nome do plantas -->
          //       <div class='plantas-types'>
          //         <span class='plantas-type background-$reino'>$reino</span> <!-- reino 1 -->
          //       </div>
          //     </section>
          //     <!-- Início dos stats do plantas, exibidos quando clicamos -->
          //       <section class='plantas-stats'>
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
          //       <!-- Fim dos stats do plantas, exibidos quando clicamos -->
          //   </div>
          // <!-- ######################### Aqui Termina o plantas ####################################-->
      
          //   ";
        }
      } else {
        echo "<p>Nenhum plantas encontrado.</p>";
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