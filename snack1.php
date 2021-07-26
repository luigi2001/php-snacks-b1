<?php
$basket = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ]
];
$lunghezza = count($basket);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php for($i = 0; $i < $lunghezza; $i++){ ?>
        <h1> <?php echo $basket[$i]['squadraCasa']?> - <?php echo $basket[$i]['squadraOspite']?> | <?php echo $basket[$i]['puntiCasa']?> - <?php echo $basket[$i]['puntiOspite'] ?> </h1>
    <?php } ?>    
</body>
</html>