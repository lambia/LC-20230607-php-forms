<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$nomeVisitatore = $_GET["nome"];
?>

    <!-- Stampiamo la variabile, che contiene i dati passatti nell'URL -->
    <h1>Benvenuto <?php echo $nomeVisitatore; ?></h1>

    <!-- Oppure stampiamo direttamente i dati, senza poggiare su variabili -->
    <h2>Lo ripeto: benvenuto <?php echo $_GET["nome"]; ?></h2>
    
</body>
</html>