<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 007</title>
</head>
<body>
       <?php
           $minimo = 1320.00;
           $salario = $_GET['sal'] ?? 0;
       ?>
       
       <main>
        <h1>Salário com PHP</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method=""get>
          <label for ="sal">Salário R$</label>
          <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01" >
          <p> Considerando o salário mínimo de R$   <?= number_format($minimo,2,",",".")?>   </p>
          <input type="submit" value="Calcular">
        </form>
       </main>

       <section>
        <h2>Resultado final</h2>
        <?php
              $total = intdiv($salario,$minimo);
              $dif =  $salario % $minimo;
              echo  " Ganha $total salarios minimos + R\$ ".number_format($dif,2) ;

        ?>
       </section>
</body>
</html>