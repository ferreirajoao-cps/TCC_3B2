<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o Reino</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 150px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .card a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <img src="../img/quadrado/animal.jpeg" alt="Animalia">
        <a href="cadastraanimal.php">Animalia</a>
    </div>
    <div class="card">
        <img src="../img/quadrado/ReinoProtista.jpg" alt="Protista">
        <a href="cadastroProto.php">Protista</a>
    </div>
    <div class="card">
        <img src="../img/quadrado/ReinoFungi.jpg" alt="Fungi">
        <a href="editar_fungi.php">Fungi</a>
    </div>
    <div class="card">
        <img src="../img/quadrado/plantae.jpeg" alt="Plantae">
        <a href="cadastroPlanta.php">Plantae</a>
    </div>
    <div class="card">
        <img src="../img/quadrado/monera.jpeg" alt="Monera">
        <a href="cadastroPlanta.php">Monera</a>
    </div>
</div>

</body>
</html>
