<html>
<body>

<?php
    print("hello world");
    echo "<h1>Esse é um comando interpretado </h1>";

    $valor = "teste de variavel";
    $valor2 = 2;
    $valor3 = 3.2;

    echo $valor . "</br>";
    echo $valor2 . "</br>";
    echo $valor3 . "</br>";

    echo gettype($valor). "</br>";
    echo gettype($valor2). "</br>";
    echo gettype($valor3). "</br>";

    $misto = ["estrutura",0.2,1];

    echo $misto[0]. "</br>";

    var_dump($misto). "</br>";
?>

</body>
</html>