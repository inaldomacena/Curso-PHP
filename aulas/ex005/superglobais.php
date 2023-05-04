<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio PHP </title>
    <link rel="stylesheet" href="style.css"
   
</head>
<body>
       <main>
        <pre>
            <?php 

            setcookie("dia-da-semana", "QUARTA", time() + 3600);

            session_start();
            $_SESSION ["teste"] = "funcionou!!";

            echo"<h1>Superglobal get</h1>";
            var_dump($_GET);

            echo"<h1>Superglobal post</h1>";
            var_dump($_POST);

            echo"<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal Setcookies</h1>";
            var_dump($_COOKIE);

            echo"<h1>Superglobal Session</h1>";
            var_dump($_SESSION);

            echo "<h1>super global Globals</h1>";  
            ///pegar todo conteudo das superglobais e joga dentro de um array
            var_dump($GLOBALS);
            ?>
        </pre>
       </main>
</body>
</html>