<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 010</title>
</head>
<body>
   
    <?php

         $atual = date("Y");
         $nasc = $_GET['nasc'] ??'2000';
         $ano = $_GET['ano']?? $atual;
    ?>


    <main>
    <h1>Calculando sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
     <label for="nasc">Em que ano você nasceu?</label>
     <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
     <label for="ano">Quer saber sua idade em que ano?(atualmente estamos em <?=$atual?> )</label>
     <input type="number" name="ano" id="ano" min="1900" value="<?$ano?>">
     <input type = "submit" value="Qual será minha idade?">
    </form>
    </main>


    <section>
    <h2>Resultado</h2>
        <?php
          $idade = $ano -  $nasc;

        
        
           echo "<p>Quem nasceu em ".number_format($nasc, 0,',','').
           " vai ter ".number_format($idade)." anos em ".number_format($ano,0,',','')."</p>";
       ?>
    </section>
</body>
</html>