<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.2/tailwind.min.css"/>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin" action="login.php">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <form action="">
      <div class="form-group">
        <label for="email">Usuário</label>
        <input type="email" id="email" name="u" required placeholder="Digite seu usuário" autofocus="true" />
        <label for="email">Password</label>
        <input type="password" required placeholder="Password" autofocus="true" />
        <button type="submit" class="submitbtn">Acessar</button> 
      </div>
       
            <!-- <label for="email">Usuário</label>
            <input type="text" name="u" placeholder="Digite seu usuário" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name="s"/> -->
            
            <?php
                if(isset($_POST['u']) && isset($_POST['s'])){
                    
                        include_once("conexao.php");
                        $sql = "SELECT * FROM usuarios WHERE usuario='$u';";
                        $resultado = mysqli_query($conexao,$sql);
                        if(mysqli_num_rows($resultado)>0){
                            $linha = mysqli_fetch_assoc($resultado);
                            if($linha['senha']!=$s){
                                $erro = "Senha incorreta.";
                            }
                        }else{
                            $erro = "Usuário não encontrado.";
                        }
                        if(isset($erro)){
                           echo $erro;
                        }else{
                            session_start();
                            $_SESSION['usuario']=$u;
                            header("location:index2.php");
                        }
                    }
                
            ?>
           
        </form>
        
    </div>
    
</body>
</html>