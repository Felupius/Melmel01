<?php /* CABEÇALHO: aparece no começo da página. O menu é montado sozinho a partir do dados.php. */ ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choco Muu Experience</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <a class="logo" href="#inicio"><img class="imgSesc" src="img/logo-sesc.png" alt="Logo do Sesc"></a>
        <nav>
            <a href="#integrantes">Integrantes</a>
            <?php foreach ($feiras as $feira): ?>
            <a href="#<?= e($feira['id']) ?>"><?= e($feira['menu']) ?></a>
            <?php endforeach; ?>
            <a href="#pi"><?= e($piTitulo) ?></a>
        </nav>
    </header>
