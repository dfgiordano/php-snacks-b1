/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

<?php
$matches = [
    [
        "home" => "Utah Jazz",
        "away" => "LA Clippers",
        "home_points" => 70,
        "away_points" => 90
    ],
    [
        "home" => "LA Lakers",
        "away" => "Milwakee Bucks",
        "home_points" => 85,
        "away_points" => 80
    ],
    [
        "home" => "Phoenix Suns",
        "away" => "Chicago Bulls",
        "home_points" => 68,
        "away_points" => 100
    ],
    [
        "home" => "Atlanta",
        "away" => "Philadelphia 76ers",
        "home_points" => 104,
        "away_points" => 100
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendario partite</title>
    </head>
    <body>
        <h1> Calendario partite:  </h1>
        <ul> 
            <li>
                <?php 
                    echo $matches[0]["home"] . " - " . $matches[0]["away"] . " | " . $matches[0]["home_points"] . " - " . $matches[0]["away_points"];
                ?>
            </li>
            <li>
                <?php
                        echo $matches[1]["home"] . " - " . $matches[1]["away"] . " | " . $matches[1]["home_points"] . " - " . $matches[1]["away_points"];
                ?>
            </li>
            <li>
                <?php
                        echo $matches[2]["home"] . " - " . $matches[2]["away"] . " | " . $matches[2]["home_points"] . " - " . $matches[2]["away_points"];
                ?>
            </li>
            <li>
                <?php
                        echo $matches[3]["home"] . " - " . $matches[3]["away"] . " | " . $matches[3]["home_points"] . " - " . $matches[3]["away_points"];
                ?>
            </li>
        </ul>

    </body>
</html>
