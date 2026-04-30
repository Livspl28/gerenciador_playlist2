<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo  = $_POST['titulo'];
    $artista = $_POST['artista'];
    $album   = $_POST['album'];
    $genero  = $_POST['genero'];

    $novaMusica = [
        'titulo'  => $titulo,
        'artista' => $artista,
        'album'   => $album,
        'genero'  => $genero
    ];

    $idMusicaNova = create($pdo, 'musica', $novaMusica);
    
    if ($idMusicaNova) {
        // Redireciona para a mesma página de cadastro, mas ativa o pop-up
        header("Location: cadastro.php#pop-sucesso");
        exit();
    }
}
?>