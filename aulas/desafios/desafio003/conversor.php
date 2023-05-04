<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor de moedas</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>
   
<main>
    <h1>Conversor de Moedas</h1>
    <?php
          //cotação do dólar
         $cotação = 5.17;
         //Quantos reais voce tem?
         $real= $_REQUEST["din"] ??0;

         //equivalencia em dolar
         $dolar = $real/$cotação;
        
        echo "Seus  R\$".number_format($real,2,",",".")." equivalem a US\$".number_format($dolar,2,",",".");
        
     ?>
     <button onclick="javascript:history.go(-1)">Voltar</button>

    


</main>


</body>
</html>