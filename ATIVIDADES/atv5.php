<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <script>
        var nome = prompt('informe seu NOME e SOBRNOME')
    </script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1><?php
    $nome = "<script>document.write(nome)</script>";
    echo $nome;
    ?><h1>
</body>
</html>