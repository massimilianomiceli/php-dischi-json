<?php
$fileDischi = file_get_contents('./dischi.json');
$dischi = json_decode($fileDischi, true);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header class="hero text-center">
        <div class="container">
            <h1 class="display-5 fw-bold">Lista dischi</h1>
            <p class="lead mb-0">Archivio musicale caricato da file JSON</p>
        </div>
    </header>

    <main class="container">

        <section class="mb-5">
            <div class="row g-4">

                <?php foreach ($dischi as $disco) { ?>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="card disc-card">

                            <img 
                                src="<?= $disco["cover_url"] ?>" 
                                class="card-img-top disc-cover" 
                                alt="Cover di <?= $disco["titolo"] ?>"
                            >

                            <div class="card-body">
                                <h5 class="card-title fw-bold">
                                    <?= $disco["titolo"] ?>
                                </h5>

                                <p class="card-text text-muted mb-2">
                                    <?= $disco["artista"] ?>
                                </p>

                                <span class="badge text-bg-dark genre-badge">
                                    <?= $disco["genere"] ?>
                                </span>
                            </div>

                            <div class="card-footer bg-white border-0 pt-0 pb-3">
                                <small class="text-muted">
                                    Anno di pubblicazione: <?= $disco["anno"] ?>
                                </small>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </div>
        </section>

        <section class="mb-5">
            <div class="form-section">
                <h2 class="mb-4">Inserisci un nuovo disco</h2>

                <form action="server.php" method="post">

                    <div class="row g-3">

                        <div class="col-12 col-md-6">
                            <label for="titolo" class="form-label">Titolo</label>
                            <input 
                                id="titolo" 
                                name="titolo" 
                                type="text" 
                                class="form-control" 
                                placeholder="Es. Thriller"
                            >
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="artista" class="form-label">Artista</label>
                            <input 
                                id="artista" 
                                name="artista" 
                                type="text" 
                                class="form-control" 
                                placeholder="Es. Michael Jackson"
                            >
                        </div>

                        <div class="col-12">
                            <label for="cover_url" class="form-label">URL della cover</label>
                            <input 
                                id="cover_url" 
                                name="cover_url" 
                                type="text" 
                                class="form-control" 
                                placeholder="https://..."
                            >
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="anno" class="form-label">Anno</label>
                            <input 
                                id="anno" 
                                name="anno" 
                                type="number" 
                                class="form-control" 
                                placeholder="Es. 1982"
                            >
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="genere" class="form-label">Genere</label>
                            <input 
                                id="genere" 
                                name="genere" 
                                type="text" 
                                class="form-control" 
                                placeholder="Es. Pop"
                            >
                        </div>

                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-dark px-4">
                            Inserisci disco
                        </button>
                    </div>

                </form>
            </div>
        </section>

    </main>

</body>
</html>