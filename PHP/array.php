<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Types</title>
</head>

<body>
    <h1>Declarando Arrays</h1>


    <!-- Os Arrays podem ser declarados da seguinte forma -->
    <?php
    $carros = ['Mustang', 'Corolla', 'Civic G10'];
    ?>

    <h1>Acessando Elementos</h1>

    <?php
    $frutas = ['maçã', 'banana', 'laranja'];
    echo $frutas[0]; // maçã
    ?>

    <br>

    <h1>Adicionando Elementos</h1>

    <?php
    $planetas = ['jupiter', 'netuno', 'saturno', 'marte'];
    $planetas[] = 'terra';
    ?>

    <?php
    $users = [
        [
            'name' => 'Taina Pinheiro',
            'email' => 'taina.pinheiro15@gmail.com'
        ],
        [
            'name' => 'Rafael Ferreira',
            'email' => 'rafael.ferreira18@gmail.com'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user['name'] ?> (<?= $user['email'] ?>)</li>
        <?php endforeach; ?>

        <?php foreach ($users as $user) : ?>
            <li>
                <?php foreach ($user as $data) : ?>
                    <?= $data ?>
                <?php endforeach; ?>
            </li>
            <?php endforeach; ?>
    </ul>
</body>

</html>


<?php 

   $users = [
      ['name' => 'Taina Pinheiro', 'email' => 'taina.pinheiro15@gmail.com'],
      ['name' => 'Rafael Ferreira', 'email' => 'rafael.ferreira18@gamil.com']
   ];                 

?>



