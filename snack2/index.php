<!-- 
Passare come parametri GET name, mail e age e 
verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$params_valid = true;
if (!(strlen($name)>3)) {
    $params_valid = false;
}
if (!strpos($mail, "@") || !strpos($mail, ".")) {
    $params_valid = false;
}
if (!is_numeric($age)) {
    $params_valid = false;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' 
    integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container text-center py-5">
        <div class="alert <?php echo $params_valid ? "alert-success" : "alert-danger"; ?>">
        <?php echo $params_valid ? "Accesso riuscito!" : "Accesso Negato"; ?>
    </div>
        <?php ?>
    </div>
</body>

</html>