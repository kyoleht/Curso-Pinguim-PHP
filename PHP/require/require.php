<?php 

declare(strict_types = 1);

/**
 * 
 * require e require_once
 * 
 * lança um erro se não encontrado
 * 
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'req/head_.php'; ?>
    <?php $config = require('inc/config.php'); ?>
    <?php require_once('req/greetings.php'); ?>
    <title>Require</title>
</head>
<body>
    <h1><?php 'Require' ?></h1>

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