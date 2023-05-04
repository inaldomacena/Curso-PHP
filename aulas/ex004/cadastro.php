<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
      //  var_dump($_REQUEST); // O $_REQUEST é a Junção da $_GET e $_POST
        $nome= $_GET["nome"];
        $sobrenome=$_GET["sobrenome"];
        echo "<p> É um prazer te conhecer $nome $sobrenome!! Este é o meu site!! </p>"
        ?>
    </main>

    
</body>
</html>