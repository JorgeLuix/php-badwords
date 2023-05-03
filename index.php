<?php 
$name = 'Jorge';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1> Form di Invio</h1>
    <form action="pagina2.php" method="post">
        <label for="paragrafo">Inserisci il paragrafo:</label><br>
        <textarea name="paragrafo" id="paragrafo" rows="5" cols="50"></textarea><br>
        <label for="parola">Inserisci la parola da censurare:</label><br>
        <input type="text" name="parola" id="parola"><br><br>
        <input type="submit" value="Invia">
    </form>
</body>
</html>