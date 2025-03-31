<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Olá Mundo em PHP!</title>
</head>

<body>
    <?php 

    $texto = "Aperte o botão para inserir o texto";

    if(isset($_POST['btn-sbmt'])) {
        $texto = 'Olá Mundo!';
    } else {
        $texto = 'Aperte o botão para inserir o texto';
    }
    ?>

    <h1> <?php echo $texto; ?> </h1>
    
    <form method="POST">
    <button type="submit" name="btn-sbmt" id="btn-sbmt"> Botão </button>
    </form>
    
</body>
</html>