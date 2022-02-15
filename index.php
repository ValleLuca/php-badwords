<?php 

    $stringa = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam asperiores facilis fugit sunt sint possimus ut doloremque consectetur eligendi molestias!"; //paragrafo generato
    $url = $_GET["parola"];                          //Acquisizione da url della parola bannata
    $stringa2 = str_ireplace($url, "***", $stringa); //Sostituzione della parola bannata

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
    
    <h1> <?php echo strlen($stringa); ?> </h1> <!-- lunghezza del paragrafo -->
    <p> <?php echo $stringa2; ?> </p> <!-- praragrafo -->

</body>
</html>