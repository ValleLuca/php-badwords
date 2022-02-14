<?php 

    $stringa = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam asperiores facilis fugit sunt sint possimus ut doloremque consectetur eligendi molestias!";
    $url = $_GET["parola"];
    $stringa2 = str_replace($url, "***", $stringa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sostituzione</title>
</head>
<body>
    
    <h1><?php echo $stringa2 ?></h1>
    <p>Valle Luca</p>

</body>
</html>