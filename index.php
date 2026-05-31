<?php
$fileDischi = file_get_contents('./dischi.json');
$dischi = json_decode($fileDischi, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Lista dischi</h1>
    <?php
    foreach ($dischi as $disco) {
        ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $disco["cover_url"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $disco["titolo"] ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Artista: <?= $disco["artista"] ?></li>
                <li class="list-group-item">Anno: <?= $disco["anno"] ?></li>
                <li class="list-group-item">Genere: <?= $disco["genere"] ?></li>
            </ul>
        </div>
    <?php
    }
?>
<h2>Inserisci un nuovo film</h2>
<form action="server.php" method="post">
    <div>
        <label for="titolo">Titolo</label>
        <input id="titolo" name="titolo" type="text">        
    </div>
        <div>
        <label for="artista">Artista</label>
        <input id="artista" name="artista" type="text">        
    </div>
        <div>
        <label for="cover_url">Url della cover</label>
        <input id="cover_url" name="cover_url" type="text">        
    </div>
        <div>
        <label for="anno">Anno</label>
        <input id="anno" name="anno" type="text">        
    </div>
        <div>
        <label for="genere">Genere</label>
        <input id="genere" name="genere" type="text">        
    </div>
    <button type="submit">Inserisci</button>
</form>
</body>
</html>