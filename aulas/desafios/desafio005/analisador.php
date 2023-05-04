<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 005 PHP</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
        $num = $_POST["n"];
        echo"<p> Analisando o número" . number_format($num,3,",",",") . "informado pelo usuario:</p>";

        $int =  (int) $num;
        $fra = $num - $int ;


        echo "<ul><li> A parte inteira do número é \n" .number_format($int,0, ",",".")."</li> ";
        echo "<li> A parte fracionária do número é \n" .number_format($fra,3, ",",".")."</li> ";
        ?> 
        <button onclick="javascript:history.go(-1)">Voltar</button>
   </main> 
</body>
</html>