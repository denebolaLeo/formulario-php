<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Dados</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: lightpink;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #444;
        }

        @media (max-width: 480px) {
            p {
                font-size: 16px;
            }
        }

        .imagem-direita {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 80px;
            height: auto;
        }

        @media (max-width: 600px) {
            .imagem-direita {
                width: 60px;
                top: 10px;
                right: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Suas Informações</h1>
        <?php
            $nomeUser = $_POST["nome"];
            $jogoUser = $_POST["jogo"];
            $idadeUser = $_POST["idade"];

            echo "<p>Olá <strong>$nomeUser</strong>, seu jogo favorito é <strong>$jogoUser</strong>.</p>";

            if ($idadeUser > 21) {
                echo "<p>Você tem <strong>mais de 21 anos</strong>.</p>";
            }else if ($idadeUser = 21) {
                echo "<p>Você tem <strong>21 anos</strong>.</p>";
            }else {
                echo "<p>Você tem <strong>menos de 21 anos</strong>.</p>";
            }
        ?>
    </div>
    <img src="nina.png" alt="Foto" class="imagem-direita">
</body>

</html>