<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Musicas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Outfit:wght@100..900&family=Oxanium:wght@200..800&family=Palette+Mosaic&family=Wellfleet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
 

<body>

<h5>Sua lista de Músicas!:</h5>


<?php
require_once 'partials/header.php';
require_once 'crud.php';

print '<table class="tabela_musicas">
<tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Artista</th>
    <th>Album</th>
    <th>Genero</th>
    <th>Ação</th>
</tr>';

$musicas = readAll($pdo, 'musica');

foreach ($musicas as $musica) {
    $idAtual = $musica['id'];

    echo "<tr>
        <td>" . $idAtual . "</td>
        <td>" . $musica['titulo'] . "</td>
        <td>" . $musica['artista'] . "</td>
        <td>" . $musica['album'] . "</td>
        <td>" . $musica['genero'] . "</td>
        <td><a href='#delete-" . $idAtual . "' class='btn-abrir'>Delete esta musica</a></td>
    </tr>";
    echo "
    <div id='delete-{$idAtual}' class='modal-simples'>
        <div class='modal-conteudo'>
            <p>Deseja excluir a música: <strong>{$musica['titulo']}</strong>?</p>
            <div style='margin-top: 15px;'>
                <a href='#' class='btn-cancelar'>Não</a>
               <a href='delete.php?id={$idAtual}#pop-sucesso' class='btn-confirmar'>Sim, excluir</a>
            </div>
        </div>
    </div>";
}
print "</table>";
?><div id="pop-sucesso" class="modal-simples">
    <div class="modal-conteudo">
        <h3>Sucesso!</h3>
        <p>A música foi removida da sua lista.</p>
        <a href="#" class="btn-cancelar">Fechar</a>
    </div>
</div>