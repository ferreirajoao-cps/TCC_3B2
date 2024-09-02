<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de animais</title>
</head>
<body>
    <div id="conteudo">
        <form name="cadanimal" method="get" action="cadanimal.php">
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" maxlength="50" required>
            <p></p>

            <label for="Reino">Reino</label><br>
            <select name="Animalia">
                <option value="Animalia">Animalia</option>
            </select>
            <p></p>

            <label for="Categoria">Categoria</label><br>
            <input type="text" name="Categoria" maxlength="20" required>
            <p></p>

            <label for="Descricao">Descricao</label><br>
            <input type="text" name="Descricao" maxlength="200" required>
            <p></p>

            <p>Selecione uma imagem</p>
            <input type="file" name="arquivo" accept="image/png, image/jpeg">
            <p></p>

            <input type="submit" value="Cadastrar">

        </form>    
    </div>

    
</body>
</html>