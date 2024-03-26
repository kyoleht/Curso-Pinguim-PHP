<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do/While</title>
</head>
<body>
    <div>
        <h3>Do/While</h3>

        <?php 
            $numero = 0;

            do {
                echo $numero . "<br>";

                $numero++;

            } while ($numero <= 10);
        ?>
    </div>

    <div style="border-top: 50px">
            <h3>Do/While  com true/false</h3>

            <?php 
                $numero = 0;
                $continua = true;

                do {
                    echo $numero . "<br>";

                    $numero++;

                    if ($numero == 10) {
                        $continua = false;

                    }

                } while ($continua);
            ?>
    </div>
</body>
</html>