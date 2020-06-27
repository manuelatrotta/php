<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (!empty($_POST['eta']) && is_numeric($_POST['eta'])){
    echo $_POST['eta'];
    } else {
    echo "Hai lasciato vuoto il campo età";
    } 

    echo $_POST['nome'];

    $lista_array = array('giovanni', 'giov', 'michele');
    echo $lista_array[0];
    foreach($lista_array as $valore) {
        echo $valore;
    }

    
?>
</body>
</html>