<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <div>
        <h3>Foreach Simples</h3>

        <?php
        $cars = [
            ['marca' => 'toyota', 'nome' => 'corolla'],
            ['marca' => 'chevrolet', 'nome' => 'prisma'],
        ];

        foreach ($cars as $cars) {
            echo $cars['marca'] . ' - ' . $cars['nome'] . "<br>";
        }
        ?>


    </div>


    <hr>


    <div style="border-top: 50px">
        <h3>Foreach com Esteróides</h3>

        <?php 
            $users = [
                'Usuário A' => ['nome' => 'Rafael', 'email' => 'rafael.ferreira@gmail.com'],
                'Usuário B' => ['nome' => 'Jessica', 'email' => 'jessica.fidelis@gmail.com'],
            ];

            foreach ($users as $index => $users) {
                echo $index . ': ' . $users['nome'] . ' - ' . $users['email'] . "<br>";
            }
        ?>

    </div>
</body>

</html>