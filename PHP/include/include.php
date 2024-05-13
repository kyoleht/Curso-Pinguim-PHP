<?php 
    declare(strict_types = 1);


/**
 * 
 * include
 * 
 * lança um warning
 * 
 * é utilizado para incluir arquivos necessários no projeto
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <?php $config = include('inc/config.php'); ?>
    <?php include_once ('inc/greetings.php'); ?>
    <title>Include</title>
</head>
<body>
    <h1><?php 'Include' ?></h1>

    <div>
    <table>
        <thead>
            <tr>
                <th>Usuário</th>
                <th>Senha</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?= $config['username']?></td>
                <td><?= $config['password']?></td>
            </tr>
        </tbody>
    </table>
    </div>

    <div style="margin-top: 50px">
        <h2>Olá, <?= $nome ?></h2>
    </div>
</body>
</html>