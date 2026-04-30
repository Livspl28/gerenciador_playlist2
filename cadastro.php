<?php
require_once 'insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Outfit:wght@100..900&family=Oxanium:wght@200..800&family=Palette+Mosaic&family=Wellfleet&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <title>Minhas Músicas</title>
</head>
<body>
 
<?php
require_once 'partials/header.php'
?>
    <main>
        <!--Caixa do cadastro-->
        <section class="cadbox">Adicione uma nova música!

            <!--Formulário-->
            <form action="cadastro.php" method="POST">
                <div class="formcad">
                    <input type="text" placeholder="Título" name="titulo" />
                    <input type="text" placeholder="Artista" name="artista" />
                    <input type="text" placeholder="Álbum" name="album" />
                    <input type="text" placeholder="Gênero" name="genero" />
                </div>
             <button type="submit" class="buttoncad2">Adicionar</button>
            </form>
            
        </section>
        
    </main>
    <div id="pop-sucesso" class="modal-simples">
        <div class="modal-conteudo">
            <h3>Cadastrada!</h3>
            <p>Sua música foi adicionada com sucesso.</p>
            <div>
                <a href="#" class="btn-cancelar">Fechar</a>
                <a href="select.php" class="btn-confirmar" style="background: #28a745;">Ver Lista</a>
            </div>
        </div>
    </div>

</body>
</html>