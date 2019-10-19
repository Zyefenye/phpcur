<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PHP Curso</title>
    <link rel="stylesheet" href=".\assets\css\style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercicios</h2>

    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 1 - Básico</h3>
                    <ul>
                        <li><a href="exer.php?dir=teste&file=teste">Exercícios A</a></li>
                        <li><a href="#">Exercícios B</a></li>
                        <li><a href="#">Exercícios C</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>    
                
    <footer class="rodape">
        COD3R & ALUNOS &#169;<?= date('Y'); ?>
    </footer>

</body>
</html>