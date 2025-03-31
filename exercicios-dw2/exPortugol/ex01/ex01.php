<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Olá Mundo em PHP!</title>
</head>

<body>
    <h1 id="texto"> Aperte o botão e insira o texto! </h1>
    <button onclick="inserirTexto()">Aperte para inserir o texto</button>
    
    
    <form method="POST">
        <button type="submit" name="btn-sbmt" id="btn-sbmt"> Aperte para inserir o texto </button>
    </form>
    <?php 

    
    if(isset($_POST["btn-sbmt"])) {
        echo "<script>document.getElementById(texto) = 'Olá mundo!';<script>";
    }
    ?>
    
</body>
</html>