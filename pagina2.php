<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/styles.css">
    <title>Elaborazione dati</title>
</head>
<body>

    <?php
    // Recupero i dati dal form
    $paragrafo = $_POST["paragrafo"];
    $parola = $_POST["parola"];

    // Stampo il paragrafo e la sua lunghezza
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h5>Paragrafo originale:</h5>';
    echo "<p>$paragrafo</p>";
    echo '<p class="fw-semibold">Lunghezza del paragrafo: ' . strlen($paragrafo) . '</p>';

    // Censuro la parola
    $paragrafo_censurato = str_replace($parola, '<span class="censurato">***</span>', $paragrafo);

    // Stampo il paragrafo censurato e la sua lunghezza
    echo '<h5>Paragrafo censurato:</h5>';
    echo "<p>$paragrafo_censurato</p>";
    echo '<p class="fw-semibold">Lunghezza del paragrafo censurato: ' . strlen($paragrafo_censurato) . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
?>
</body>
</html>