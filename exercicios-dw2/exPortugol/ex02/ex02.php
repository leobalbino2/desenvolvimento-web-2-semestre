<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Olá Mundo em PHP!</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
</head>

<body>
    <?php 

    $conta = 0;

    if(isset($_POST['btn-sbmt'])) {
        ;
    }
    ?>

    <h1> <?php echo $mensagem; ?> </h1>
    
    <form method="POST">
    <button type="submit" name="btn-sbmt"> Botão </button>
    </form>

    <br>
    <hr>
    <br>

    <?php
    $texto = "Olá mundo 2!";
   

    echo  "<h1> $texto </h1>"

    ?>

</body>
</html>