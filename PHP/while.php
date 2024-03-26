<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <div>
        <h3>While</h3>

        <?php 
            $numero = 0;

            while($numero <= 10) {
                echo $numero . "<br>";

                $numero++;
            }
        ?>
    </div>
</body>
</html>