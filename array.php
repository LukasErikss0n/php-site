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
    <table>
        <tr>
            <th>Kurs</th>
            <th>Lärare</th>
        </tr>
        <?php

        $huvudstader = array(
            "Webserverprogrammering" => "Martin", "Matte 5" => "Jesper", "Engelska" => "Nepe", "Religon" => "Niklas", "Svenska" => "Hannah"
        );
        $antal = count($huvudstader);

        foreach ($huvudstader as $x => $x_value) {
            echo "
            <tr>
                <td>$x</td>
                <td>$x_value</td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>