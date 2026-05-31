<?php

$titolo = $_POST['titolo'] ?? '';
$artista = $_POST['artista'] ?? '';
$cover_url = $_POST['cover_url'] ?? '';
$anno = $_POST['anno'] ?? '';
$genere = $_POST['genere'] ?? '';

$nuovoDisco = [
    "titolo" => $titolo,
    "artista" => $artista,
    "cover_url" => $cover_url,
    "anno" => $anno,
    "genere" => $genere
];

$json_text = file_get_contents('./dischi.json');
$dischi = json_decode($json_text, true);
$dischi[] = $nuovoDisco;
$json_text_updated = json_encode($dischi);
file_put_contents('./dischi.json', $json_text_updated);
header('Location: ./index.php');
