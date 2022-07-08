<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 
-->

<?php

$matchs_list = [
    [
        "home_team" => "Milano Olimpia",
        "away_team" => "Cantù",
        "home_points" => rand(50, 110),
        "away_points" => rand(50, 110),
    ],
    [
        "home_team" => "Happy Casa Brindisi",
        "away_team" => "Venezia",
        "home_points" => rand(50, 110),
        "away_points" => rand(50, 110),
    ],
    [
        "home_team" => "Germani Brescia",
        "away_team" => "Virtus Segafredo Bologna",
        "home_points" => rand(50, 110),
        "away_points" => rand(50, 110),
    ],
    [
        "home_team" => "Vanoli Basket Cremona",
        "away_team" => "UNAHOTELS Reggio Emilia",
        "home_points" => rand(50, 110),
        "away_points" => rand(50, 110),
    ],
    [
        "home_team" => "Allianz Pallacanestro Trieste",
        "away_team" => "Banco di Sardegna Sassari",
        "home_points" => rand(50, 110),
        "away_points" => rand(50, 110),
    ],
    [
        "home_team" => "Fortituto Bologna",
        "away_team" => "GeVI Napoli",
        "home_points" => rand(50, 110),
        "away_points" => rand(50, 110),
    ],
]



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giornata 5 - Basket Serie A</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container text-center py-5">
        <h1>Risultati 5^ Giornata </h1>
        <ul class="list-unstyled w-50 mx-auto py-3">

        
        <?php 
        for ($i =0 ; $i < count($matchs_list); $i++){
            ?>
            <li>
                <div class="d-flex justify-content-center text-start">
                    <span class="flex-basis">
                        <?php echo $matchs_list[$i]["home_team"]; ?>
                    </span>
                    <span class="flex-basis">
                        <?php echo $matchs_list[$i]["away_team"]; ?>
                    </span>
                    <span class="flex-basis text-center">
                        <?php echo $matchs_list[$i]["home_points"]; ?> - <?php echo $matchs_list[$i]["away_points"]; ?>
                    </span>
                    
                </div>
            </li>
            <?php
        }
         ?>
         </ul>
    </div>
</body>

</html>