<?php
//Recebendo os campos do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha1'];

//Conectando ao BD
include_once("conexao.php");

//Instrução SQL
$sql = "insert into tbusuarios values ('$usuario', '$senha');";

//Executando a instrução SQL
if(mysqli_query($conexao,$sql)){
    header("location:login.php");
}else{
    echo "<p>Erro ao Cadastrar Usuário</p>";
    echo "<a href='cadastrarUsuario.php'>Voltar</a>";
}

//Fechando o BD
mysqli_close($conexao);



?>