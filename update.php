<?php
require_once 'crud.php';

$idMusica = 24;

$dadosAtualizados = [
    'titulo' => 'Airplanes',
    'artista' => '5 seconds of summer',
    'album' => 'sounds good feels good',
    'genero' => 'Pop-rock'
];

$linhasAfetadas = update($pdo, 'playlist', $dadosAtualizados, 'id = '.$idMusica);

if ($linhasAfetadas > 0){
    echo 'Musica atualizada com sucesso!!!';
}else{
    echo 'Não foi possível atualizar a musica!';
}
