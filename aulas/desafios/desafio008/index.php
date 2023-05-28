<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 008</title>
</head>
<body>
    <?php
          $numero = $_GET ['num']??1;

     ?>

     <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num"> Número </label>
            <input type="number"  name="num"  id="num"   value = "<?=$numero?>">
            <input type = "submit" value = "Calcular Raízes">
        </form>
        
     </main>

     <section>
        <h2>Resultado final</h2>
        <?php
            $raizquadrada = $numero **(1/2);
            $raizcubica = $numero ** (1/3);
           echo"<p> Analisando o número $numero temos:</p>";
           echo"<ul><li>A sua raiz quadrada é ".number_format($raizquadrada)."</li>";
           echo "<li>A sua raiz cúbica é  " .number_format ($raizcubica)."</ul>";
        ?>
     </section>
</body>
</html>