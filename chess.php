<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    for ($x = 0; $x < 8; $x++) {
        echo "<div class = 'row'>";
        for ($k = 0; $k < 8; $k++) {
            $class;
            if ($x % 2 == 0 and $k % 2 != 0 or $x % 2 != 0 and $k % 2 == 0) {
                $class = "white";
            } else {
                $class = "black";
            }
            echo "<div class = 'square $class'></div>";
        }
        echo "</div>";
    }
    ?>
</body>

</html>