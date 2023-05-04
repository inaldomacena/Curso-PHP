<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link  rel="stylesheet" href="style.css">

    
</head>
<body>
    <main>
    <h1>Resultado Final</h1>
    <p>
        <?php
             $n=$_REQUEST["num"] ??0;
             $ant =  $n  -1;
             $susc = $n + 1;
             echo"O numero escolhido foi  <strong>  $n  </strong>  <br>";
             echo "O seu antecessor é $ant <br>";
             echo "O seu sucessor é $susc <br>";

        ?>
    </p>
    <p>
        <button onclick="javascript:window.location.href='index.html'"> Voltar </button>
    </p>


   </main>
</body>
</html>