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
    <h1>Conversor de Moedas v2.0</h1>
    <?php

        $inicio =date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio. ' \'&@dataFinalCotacao=\''.$fim.'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

       $dados = json_decode(file_get_contents($url),true);

       $cotacao = $dados["value"][0]["cotacaoCompra"];
       
       echo  "A cotação foi $cotacao";

         
        
     ?>
     <button onclick="javascript:history.go(-1)">Voltar</button>

    


</main>


</body>
</html>