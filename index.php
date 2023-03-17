<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    
    <h1>Importar dados TXT</h1>
    <div id="container">

        <div class="caixa">
        <?php
        if (isset($_SESSION["mensagem"]) == true) {
            echo $_SESSION["mensagem"];
            unset($_SESSION["mensagem"]);
        }

        ?>
            <form action="processar_dados.php" method="post" enctype="multipart/form-data">
            <button><a href="filtro.php">Filtros</a></button>

                <p>Importar arquivo para o banco de dados
                    <br> <input type="file" name="arquivo" id="ar"><br><br>

                    <button>Importar</button><br>
                </p>

            </form>

            <table class="tb">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th colspan="2">Funções</th>
                </tr>
                <?php
                include_once "dados_cadastrados.php";
                ?>
            </table>

        </div>
        
    </div>

</body>

</html>