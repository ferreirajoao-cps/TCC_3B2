<?php
//Recebendo os campos do formulário
$nome = $_POST['nome'];
$cat = $_POST['cat'];
$descricao = $_POST['descricao'];

//Conectando ao BD
include_once("conexao.php");

//Instrução SQL
$sql = "insert into animais values ('null', '$nome', '$cat', '$descricao');";

//Executando a instrução SQL
if(mysqli_query($conexao,$sql)){
   echo "Animal cadastrado com sucesso!";
    
}else{
    echo "Erro ao cadastrar";
}

//imagem 

//verifica se  foi enviado um arquivo
if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"]==0) {
    echo "Você enviou o arquivo: ". $_FILES['arquivo']['name']. "<br>";
    echo "Este arquivo é do tipo: ". $_FILES['arquivo']['type']. "<br>";
    echo "Temporariamente foi salvo em: ". $_FILES['arquivo']['tmp_name']. "<br>";

    //recebe o arquivo temporario para depois ser movido
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    //recebe o nome do arquivo enviado
    $nome = $_FILES['arquivo']['name'];
    
    
    //pega a extensão do arquivo
    //a função strrchr lê uma string  até o final à partir de um character informado
    $extensao = strrchr($nome, '.');

    //converte a extensão para minusculo
    // a função converte uma string para letras minusculas
    $extensao =  strtolower($extensao);


$sql1 = "select max(id) as ult from animais;";
$r1 = mysqli_query($conexao, $sql1);
$ultimo = mysqli_fetch_assoc($r1);
echo $ultimo['ult'];


    if (strchr('.png', $extensao)) {
        //criaum nome unico para as imagem
        //evita dupicação de img
        $novoNome = $ultimo['ult']. $extensao;
        
        //concatena a pasta com o nome
        $destino = 'img/animais/' . $novoNome;

        //tenta mover o arquivo para o destino
            if (@move_uploaded_file($arquivo_tmp, $destino)) {
                echo "Arquivo $novoNome salvo com sucesso!!!";
                echo  "<img src='".$destino."'>";
                }
             else {
                    echo "Erro ao salvar o arquivo $novoNome. Aparentemente você não tem permissão de escrita.<br>";
                 }
                }
        else {
                echo "Você poderá enviar apenas arquivos '.png'<br>";
        }
    }

else{
    echo "você não enviou nenhum arquivo";
 }


//Fechando o BD
mysqli_close($conexao);



?>