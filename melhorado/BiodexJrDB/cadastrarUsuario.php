<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>Cadastro</h1>
          
        </div>
        <form name="flogin" method="post" action="cadusuario.php">
          <input type="email" placeholder="Email" name="usuario" required>
          <input type="password" placeholder="Informe uma senha" id="senha1" name="senha1" required>
          <input type="password" placeholder="Repita a senha" id="senha2" name="senha2" required onblur="validarsenha()">
          <div class="link">
            <button type="submit" class="login">Cadastrar</button>
            
          </div>
          
        </form>
      </div>
    </div>
    <script>
        var senha1 = document.getElementById("senha1");
        var senha2 = document.getElementById("senha2");
        function validarSenha(){
            if(senha1.value!=senha2.value){
                alert("As senhas devem ser iguais");
                senha1.value="";
                senha2.value="";
                senha1.focus();
            }
        }
    </script>
  </body>
</html>