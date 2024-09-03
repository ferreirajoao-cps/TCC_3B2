<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadAnimal.css" />
    <title>Cadastro de animais</title>
</head>
<body style="display: flex; justify-content:center ; align-items: center;height: 100vh;overflow: hidden;">
    <div class="container">
      <form name="cadanimal" class="box" method="post" action="cadanimal.php" enctype="multipart/form-data">
        <h4>Cadastrar</span></h4>
        <h5>Cadastre o animal</h5>
        <input type="text"  name="nome" placeholder="Nome"  />
        <input type="text"  name="cat" placeholder="Categoria"/>
        <input type="text"  name="descricao" placeholder="Descrição"/>
        <h6>Selecione uma imagem</h6>
        <input type="file" name="arquivo" accept="image/png">
        
        <input type="submit" value="Cadastrar" class="btn1" />
      </form>
    </div>

    <?php
    function verificalogin(){
        session_start();
        if(!isset($_SESSION['usuario'])){
           header("location:login.php?erro=Usuário não autenticado"); 
        }
    }
    ?>

</body>
</html>