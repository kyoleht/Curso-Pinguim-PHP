<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição</title>
</head>
<body>
    <div>
        <h3>FOR POSITIVO</h3>

        <?php 
            for ($i = 0; $i <= 10; $i++) {
                echo "$i <br>";
            }
        ?>

            <hr>

        <h3>FOR NEGATIVO</h3>
        <?php 
            for ($i = 100; $i >= 90; $i--) {
                echo "$i <br>";
            }
        ?>

            <hr>


        <h3>For: Arrays e Indices</h3>
        <?php 
            $frutas = ['maçãs ', 'bananas ', 'laranjas '];

            for ($i = 0; $i < count($frutas); $i++) {
                echo $frutas[$i] . "<br>";
            }
        ?>
    </div>
</body>
</html>