<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome="Inaldo";
    echo "Olá $nome"; // Aspas duplas ele mostra o conteudo intepretrado da string   
     
        
    print 'Olá $nome'; //Aspas simples ele mostra o conteudo literal da string

            
    const Estado = "RN";   // uso de constante
    
    echo 'Moro no' .Estado; // para concantenar string com constante utiliza se o . "ponto"

    $nome = "Inaldo";
    $sobrenome = "Macena";
    $apelido = "naldinho";
    echo "Meu nome é $nome '$apelido' $sobrenome ";



    
    ?>

</body>
</html>