<?php
//Recebendo os campos do formulário
$id = $_GET['id'];
$nome = $_GET['nome'];
$reino = $_GET['reino'];
$cat = $_GET['cat'];
$descricao = $_GET['descricao'];

//Conectando ao BD
include_once("conexao.php");

//Instrução SQL
$sql = "insert into animais values (null, '$nome', '$reino', '$cat', '$descricao');";

//Executando a instrução SQL
if(mysqli_query($conexao,$sql)){
    header("location:index.php");
}else{
    echo "Erro ao cadastrar";
}

//imagem 

//verifica se  foi enviado um arquivo
if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"]==0) {
    echo "Você enviou o arquivo: ". $_FILES['arquivo']['name']. "<br>";
    echo "Este arquivo é do tipo: ". $_FILES['arquivo']['type']. "<br>";
    echo "Temporariamente foi salvo em: ". $_FILES['arquivo']['tmp_name']. "<br>";
    echo "Seu tamanho é: ". ($_FILES['arquivo']['size']/1024). "KBytes<br>";

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





    if (strchr('.jpg;.jpeg;..png', $extensao)) {
        //criaum nome unico para as imagem
        //evita dupicação de img
        $novoNome = time(). $extensao;
        
        //concatena a pasta com o nome
        $destino = 'imagens/' . $novoNome;

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
                echo "Você poderá enviar apenas arquivos '.jpg;.jpeg;.gif;.png'<br>";
        }
    }

else{
    echo "você não enviou nenhum arquivo";
}


//Fechando o BD
mysqli_close($conexao);



?>