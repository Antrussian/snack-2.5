<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_GET['valore1']) && isset($_GET['valore2'])) {

    $valore1 = $_GET['valore1'];
    $valore2 = $_GET['valore2'];

   
    if (is_numeric($valore1) && is_numeric($valore2)) {
    
        $media = ($valore1 + $valore2) / 2;
      
        header('Content-Type: application/json');
        echo json_encode(['media' => $media]);
    } else {
     
        header('Content-Type: application/json');
        echo json_encode(['error' => 'I valori inseriti non sono numeri validi.']);
    }
} else {
   
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Inserisci i valori nella query string, ad esempio: ?valore1=5&valore2=10']);
}
?>



</body>
</html>
