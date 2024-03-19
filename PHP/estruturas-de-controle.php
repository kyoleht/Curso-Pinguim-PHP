<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
</head>

<body>
    <div>
        <h1>IF</h1>
        <?php

        date_default_timezone_set(timezoneId: 'America/Sao_Paulo');

        $hora = date(format: 'H:i') . "<br>";

        echo $hora . "<br>";

        if ($hora >= '06:00' && $hora <= '12:00') {
            echo 'Bom dia, ';
        } elseif ($hora >= '12:00' && $hora <= '18:00') {
            echo 'Boa tarde, ';
        } else {
            echo 'Boa noite, ';
        }
        ?> Rafael!
    </div>

    <div style="margin-top: 50px">
        <h1>Switch</h1>
        <?php
        /** 
         *  switch (variavel) {
         *      case 'valor':
         *      case 'outro valor';
         *         # code...
         *        break;
         *    default:
         *         # code...
         *        break;
         * }
         */


        $numero = rand(0, 3);

        switch ($numero) {
            case 0:
            case 1:
                echo "Número $numero";
                break;

            case 2:
                echo 'Número maior que 1 e menor que 3';
                break;

            default:
                echo 'Número 3';
                break;
        }
        ?>
    </div>

    <div style="margin-top: 50px">
        <h1>Match</h1>
        <h3>Substituindo o switch</h3>
        <p>
            <?php
            /**
             * $var = match ($numero) {
             *   1 ==> ''
             *   default: ==> ''
             * }
             */

            rand(0, 3);

            $saudacao = match ($numero) {
                0, 1           => 'Número $numero',
                3           => 'Número 3',
                default     => 'Número maior que 1 e menor que 3'
            };
            echo $saudacao;
            ?>
        </p>
        <hr>
        <h3>Substituindo o IF</h3>
        <p>
            <?php

            $saudacao = match (true) {
                $hora >= '06:00' && $hora <= '12:00' => 'Bom dia!',
                $hora >= '12:00' && $hora <= '18:00' => 'Boa tarde!',
                default => 'Boa noite!'
            };
            echo $saudacao;
            ?>

        </p>
    </div>
</body>

</html>