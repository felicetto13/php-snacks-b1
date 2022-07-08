<!-- 
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php
$numbers=[];
for($i = 0; $i< 15; $i++){
    $rand_num = rand(0,100);
    if(!in_array($rand_num, $numbers)){

        $numbers[] = $rand_num;
    }
    else
    {
        $i--;
    }
}
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
            for ($i=0; $i < count($numbers) ; $i++) { 
            
                ?>
            <li><?php echo $numbers[$i]; ?></li>
                <?php
                }
            ?>
        </ul>
    </div>
</body>
</html>