<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$students = [
    [
        "nome" => "Michele",
        "cognome" => "Berrettini",
        "voti" => [9, 6, 5, 7, 8, 9, 4, 2, 5, 6, 7, 9, 6]
    ],
    [
        "nome" => "Fabio",
        "cognome" => "Berrettini",
        "voti" => [3, 2, 2, 2, 3, 2, 1, 2, 3, 4, 3, 2, 2]
    ],
    [
        "nome" => "Marzo",
        "cognome" => "Berrettini",
        "voti" => [5, 5, 6, 5, 5, 5, 7, 5, 4, 5, 5, 6, 7]
    ],
    [
        "nome" => "Giovanni",
        "cognome" => "Dos Santos",
        "voti" => [8, 9, 8, 7, 7, 8, 9, 7, 7, 7, 8, 8, 6]
    ],
    [
        "nome" => "Angelo",
        "cognome" => "Trisciuzzi",
        "voti" => [8, 6, 7, 6, 7, 7, 7, 7, 8, 6, 5, 7, 6]
    ],
    [
        "nome" => "Yannick",
        "cognome" => "Sinner",
        "voti" => [10, 8, 9, 9, 8, 9, 10, 10, 10, 9, 10, 9]
    ],
    [
        "nome" => "Lorenzo",
        "cognome" => "Sonego",
        "voti" => [3, 6, 4, 5, 3, 6, 7, 4, 5, 5, 6, 4, 4]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' 
    integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
</head>
<body>
    <div class="container">
        <ul>
            <?php
            for ($i=0; $i < count($students) ; $i++) { 
                ?>
            <li>
                <div>
                <span><strong>Nome:</strong><?php echo $students[$i]["nome"]; ?>  <strong>Cognome:</strong> <?php echo $students[$i]["cognome"]; ?>  <strong>Voto:</strong> 
                <?php 
                $total = array_sum($students[$i]["voti"]);
                $average = $total /count($students[$i]["voti"]);
                echo number_format($average,2); ?></span>
                
          </li>
                <?php
                }
            ?>
        </ul>
    </div>
</body>
</html>