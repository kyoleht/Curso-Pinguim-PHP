<?php 

declare(strict_types = 1);

$titulo = 'parametros por referência';
$subtitulo = 'teste com valores e referencia';

function converteTitulo(string &$titulo): void {
    $titulo = mb_convert_case($titulo, mode:MB_CASE_TITLE);
}

function converteSubtituloValor(string $titulo): string {
    return mb_convert_case($titulo, mode:MB_CASE_TITLE);
}

converteTitulo($titulo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <h2><?= converteTituloValor($subtitulo) ?></h2>

    <div>
        <?= $subtitulo ?> 
    </div>
</body>
</html>