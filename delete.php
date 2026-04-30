<?php
require_once 'crud.php';

$idMusica = $_GET['id'] ?? null;

if ($idMusica) {
  
    $deleted = delete($pdo, 'musica', "id = $idMusica");

    if ($deleted) {
    
        header("Location: select.php#pop-sucesso");
        exit();
    } else {
        echo "Erro ao tentar excluir no banco de dados.";
    }
} else {
    echo "ID não encontrado ou inválido.";
}