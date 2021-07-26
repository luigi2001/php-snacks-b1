<?php
if(strlen($_GET['name']) > 3 && strpos($_GET['mail'], '@') !== false && strpos($_GET['mail'], '.') !== false && is_numeric($_GET['age']) !== false){
    $risposta = 'Accesso riuscito';
}else{
    $risposta = 'Accesso negato';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h1> <?php echo $risposta ?></h1>
</body>
</html>