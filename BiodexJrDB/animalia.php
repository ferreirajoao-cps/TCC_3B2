<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="favicon.ico">
    <title>BiodexJr</title>
</head>
<body>
<?php
   //Acessando o BD
   include_once("conexao.php");
   //Buscando reinos
   $s1 = 'select distinct reino from animais order by reino asc;';
   $r1 = mysqli_query($conexao, $s1);
  ?>

  <div class="conteudo">
    <!-- filtro -->
   <section>
   <form name="filtro" method="get" action="index.php">
  <div class="form-group col-md-6 offset-md-3">
    <label for="reino" class=" text-center">Reino</label> 
      <select id="reino" name="reino" required="required" class="custom-select">
        <option value='todos'>Todos</option>
        <?php
        while($reino = mysqli_fetch_assoc($r1)){
          $r = $reino['reino'];
          echo "<option value = '$r'>$r</option>";
        }
        ?>
      </select>
  </div> 
  <div class="form-group col-md-6 offset-md-3 text-center"> 
      <button name="submit" type="submit" class="btn btn-primary">Filtrar</button>
  </div>
</form>
   </section>


  <section class="pokedex">
      <?php
        

        //Páginação
        //Define a página atual
        if(isset($_GET['pagina'])){
          $pagina = $_GET['pagina'];
        }else{
          $pagina = 1;
        }

        //Determina quantos registros serão exibidos por página
        $limite = 30;

        //Calcula o total de regristros
        $s = "select * from animais";
        $r2 = mysqli_query($conexao,$s);
        $total = mysqli_num_rows($r2);
        
        //Calcula a última página
        $ultima = ceil($total / $limite);
        
        //Calcula a posicação a partir de onde serão exibidos os resultados
        $inicio = ($pagina * $limite) - $limite;
        

        //Instrução SQL
       if (isset($_GET['reino']) && $_GET['reino'] != "todos") {
        $reino = $_GET['reino'];
        $sql = "select * from animais where reino like '%animalia'= '$reino' || reino2='$reino' limit $inicio,$limite ";
       }
       else {
        $sql = "select * from animais limit $inicio, $limite;";
       }
        //Executando a instrução SQL
        $resultado = mysqli_query($conexao,$sql);
        //Verificando se encontrou resultado
        if(mysqli_num_rows($resultado)>0){
          //Lenda os dados de cada animais
          while($animais=mysqli_fetch_assoc($resultado)){
            $id = $animais['id'];
            $nome = $animais['nome'];
            $reino = $animais['reino'];
            $cat = $animais['cat'];
            $desc = $animais['descricao'];

echo "<!-- ######################  Aqui começa o pokemon ############################# -->
<div class='pokemon' tabindex='$id'> 
  <figure class='pokemon-figure'>
    <img src='img/$id.png' alt='$nome'> <!-- Imagem do pokemon -->
  </figure>
  <section class='pokemon-description'>
    <span class='pokemon-id'>#$id</span> <!-- Número do pokemon -->
    <h1 class='pokemon-name'>$nome</h1> <!--Nome do pokemon -->
    <div class='pokemon-types'>
      <span class='pokemon-type background-$reino'>$reino</span> <!-- Tipo 1 -->
    </div>
  </section>
  <!-- Início dos stats do Pokemon, exibidos quando clicamos -->
    <section class='pokemon-stats'>
      <div class='stat-row'>
        <div>Nome</div> <!-- Vida -->
        <div class='stat-bar'>
          <div>$nome</div>
        </div>
      </div>
      <div class='stat-row'>
        <div>Reino</div> <!-- Ataque -->
        <div class='stat-bar'>
          <div>$reino</div>
        </div>
      </div>
      <div class='stat-row'>
        <div>Categoria</div> <!-- Defesa -->
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
          //   <!-- ######################  Aqui começa o animais ############################# -->
          //   <div class='animais' tabindex='$id'> 
          //     <figure class='animais-figure'>
          //       <img src='img/$id.png' alt='$nome'> <!-- Imagem do animais -->
          //     </figure>
          //     <section class='animais-description'>
          //       <span class='animais-id'>#$id</span> <!-- Número do animais -->
          //       <h1 class='animais-name'>$nome</h1> <!--Nome do animais -->
          //       <div class='animais-types'>
          //         <span class='animais-type background-$reino'>$reino</span> <!-- reino 1 -->
          //       </div>
          //     </section>
          //     <!-- Início dos stats do animais, exibidos quando clicamos -->
          //       <section class='animais-stats'>
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
          //           <div>Categoria</div> <!-- Categoria -->
          //           <div class='stat-bar'>
          //             <div>$cat</div>
          //           </div>
          //         </div>
          //         <div class='stat-row'>
          //           <div>Descricao</div> <!-- Descricao -->
          //           <div class='stat-bar'>
          //             <div>$desc</div>
          //           </div>
          //         </div>
          //       </section>
          //       <!-- Fim dos stats do animais, exibidos quando clicamos -->
          //   </div>
          // <!-- ######################### Aqui Termina o animais ####################################-->
    
          //   ";
          }
        }else{
          echo "<p>Nenhum animais encontrado.</p>";
        }
      ?>
<div class="paginacao">
        <?php
            //Define a página anterior
            $anterior = $pagina - 1;
            if($anterior<1){
              $anterior = 1;
            }
            //Define a página posterior
            $posterior = $pagina + 1;
            if($posterior>$ultima){
              $posterior = $ultima;
            }
            //Cria a barra de navegação de páginas
            echo "
              <a href='index.php?pagina=1'><button type='button' class='btn btn-primary btn-sm'> << </button></a>
              <a href='index.php?pagina=$anterior'> <button type='button' class='btn btn-primary btn-sm'> < </button></a>
              <button type='button' class='btn btn-secondary'>$pagina</button>
              <a href='index.php?pagina=$posterior'><button type='button' class='btn btn-primary btn-sm'> > </button></a>
              <a href='index.php?pagina=$ultima'><button type='button' class='btn btn-primary btn-sm'> >> </button></a>
            ";
        ?>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>