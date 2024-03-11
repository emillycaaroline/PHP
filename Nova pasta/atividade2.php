<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    define('ANIMALS', array(
        'dog',
        'cat',
        'bird'
    ));
    echo ANIMALS[1]; //imprime "cat"
    ?>
     <br>
    <?php
    define('SUCO', array(
        'suco de laranja',
        'suco de abacaxi',
        'suco de morango',
        'suco de limão',
        'suco de maracujá',
        'suco de melancia'
    ));
    echo SUCO[4]; //echo=coloca a palavra na tela do navegador
    ?>

    <br>
    
    <?php
    define('APLICATIVOS', array(
        'Instagram',
        'youTube',
        'WhatsApp',
        'GitHub',
        'Spotyfy',
        'suco de melancia'
    ));
    echo APLICATIVOS[1]; 
    ?>
    

    

</body>
</html>