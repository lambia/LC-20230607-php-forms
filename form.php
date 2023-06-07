<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di invio</title>
</head>
<body>
    
    <!-- Attenzione ad action e method -->
    <form action="saluto.php" method="GET">
        <!-- Attenzione al name="NOMEPARAMETRO" -->
        <input type="text" name="nome" placeholder="Inserisci il tuo nome">
        <input type="text" name="cognome" placeholder="Inserisci il tuo cognome">
        <!-- Al submit verrà richiamata la pagina specificata nel form -->
        <button type="submit">Invia</button>
    </form>

</body>
</html>