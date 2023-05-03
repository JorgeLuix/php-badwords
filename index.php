<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/styles.css">
    <title>Badwords</title>
</head>

<body>
    <div class="container d-flex justify-content-center m-5">
        <div class="form border p-5 rounded-1 bg-body-secondary">
            <h1> Form di Invio</h1>
            <form action="pagina2.php" method="post">
                <label for="paragrafo">Inserisci il paragrafo:</label><br>
                <textarea name="paragrafo" id="paragrafo" rows="5" cols="50"></textarea><br>
                <label for="parola">Inserisci la parola da censurare:</label><br>
                <input type="text" name="parola" id="parola"><br><br>
                <input type="submit" value="Invia" class="btn btn-success">
                <input type="reset" value="Cancella" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>