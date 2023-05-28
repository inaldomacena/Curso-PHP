<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 009</title>
</head>
<body>
    
    <?php
        $valor1 = $_GET['v1']??'';
        $peso1 = $_GET['p1']??'';
        $valor2 = $_GET['v2']??'';
        $peso2  = $_GET['p2']??'';
        ?>

    <main>
       

        <form action = "<?=$_SERVER['PHP_SELF']?>" method="get">
        <h1>Médias Aritmeticas</h1>
            <label for="v1">1° valor  </label>
            <input type="number" name="v1" id="v1" required  value="<?$valor1?>">
            <label for="p1">1° peso  </label>
            <input type="number" name="p1" id="p1" min="1" required value="<?$peso1?>"   >
            <label for="v2">2° valor  </label>
            <input type="number" name="v2" id="v2" required   value="<?$valor2?>"  >
            <label for="p2">2° peso  </label>
            <input type="number" name="p2" id="p2" min="1" required  value="<?$peso?>"  >
            <input type="submit" value="Calcular Médias">
        </form>

    </main>
    <section>
    <h2>Cálculo das Médias</h2>
    <?php
           $ma = ($valor1+ $valor2) /2;       //calculo da media aritmetrica
           $mp = ($valor1 * $peso1 + $valor2 * $peso2)/ ($peso1 + $peso2);   //calculo da media ponderada


        
    
        
        echo "<p><li>A média aritmetrica simples entre esses valores é " .number_format($ma, 2,',','.')."</li></p>";
        echo "<p><li> A média aritmetrica ponderada entre os valores ".$valor1." e ".$valor2 ." é " .number_format($mp, 2,',','.')."</li></p>";
    ?>    
        
    </section>
</body>
</html>