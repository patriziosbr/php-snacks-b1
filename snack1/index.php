<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

    $calendario = [
        [
            "casa" => "Roma",
            "puntiCasa" => "80",
            "ospite" => "Brescia",
            "puntiOspite" => "66"
        ],
        [
            "casa" => "Milano",
            "puntiCasa" => "65",
            "ospite" => "Napoli",
            "puntiOspite" => "92"
        ],
        [
            "casa" => "Torino",
            "puntiCasa" => "25",
            "ospite" => "Bari",
            "puntiOspite" => "28"
        ],
    ];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li>
                <?php echo $calendario[0]["casa"] . " - " . $calendario[0]["ospite"] . " | " . $calendario[0]["puntiCasa"] . "-" . $calendario[0]["puntiOspite"];
                ?>
            </li>
            <li>
                <?php echo $calendario[1]["casa"] . " - " . $calendario[1]["ospite"] . " | " . $calendario[1]["puntiCasa"] . "-" . $calendario[1]["puntiOspite"];
                ?>
            </li>
            <li>
                <?php echo $calendario[2]["casa"] . " - " . $calendario[2]["ospite"] . " | " . $calendario[2]["puntiCasa"] . "-" . $calendario[2]["puntiOspite"];
                ?>
            </li>
        </ul>
    </body>
</html>
