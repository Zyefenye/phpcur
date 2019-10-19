<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href=".\assets\css\style.css">
    <link rel="stylesheet" href=".\assets\css\exercicio.css">
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include($_GET['dir'] . "/teste.php");
                // $_GET['dir']
                // $_GET['file']
                //  include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            
            ?>
        </div>
    </main>    
                
    <footer class="rodape">
        COD3R & ALUNOS &#169;<?= date('Y'); ?>
    </footer>

</body>
</html>