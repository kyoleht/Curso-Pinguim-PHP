<?php 

declare(strict_types = 1);

function soma(int $a, int $b): int {

    return $a + $b;

}

$resultado = soma($a = 5, $b = 5);

echo $resultado;

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funções Tipadas</title>

</head>

<body>

<h1>Funções Tipadas</h1>

<?php 
    echo soma(rand(10, 50), rand(51, 90));


?>
    
</body>

</html>
