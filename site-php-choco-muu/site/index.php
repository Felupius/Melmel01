<?php
// Carrega os textos/fotos (dados.php) e o cabeçalho (menu).
require "dados.php";
require "includes/cabecalho.php";
?>

    <!-- 1) TOPO -->
    <section class="hero" id="inicio">
        <div class="overlay">
            <div class="content">
                <h1><?= e($titulo) ?></h1>
                <p><?= e($subtitulo) ?></p>
            </div>
        </div>
    </section>

    <!-- 2) INTEGRANTES -->
    <section class="secao surgir" id="integrantes">
        <div class="texto-central">
            <h1>Integrantes do projeto</h1>
            <div class="integrantes">
                <?php foreach ($integrantes as $nome): ?>
                <div class="integrante"><h3><?= e($nome) ?></h3></div>
                <?php endforeach; ?>
            </div>
            <a class="voltar" href="#inicio">↑ Voltar ao topo</a>
        </div>
    </section>

    <!-- 3) CARTÕES: clicar em um cartão rola até a feira (href="#id"). Um cartão para cada feira do dados.php. -->
    <section class="produtos">
        <h2><?= e($tituloCartoes) ?></h2>
        <div class="grid">
            <?php foreach ($feiras as $feira): ?>
            <a class="produto" href="#<?= e($feira['id']) ?>">
                <img src="<?= e($feira['imagem']) ?>" alt="<?= e($feira['alt']) ?>">
                <h3><?= e($feira['titulo']) ?></h3>
                <p><?= e($feira['resumo']) ?></p>
            </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 4) FEIRAS: uma seção para cada feira. Foto de um lado e texto do outro.
         Para trocar o lado da foto, mude "inverso" no dados.php. -->
    <?php foreach ($feiras as $feira): ?>
    <section class="secao surgir" id="<?= e($feira['id']) ?>">
        <div class="feira-detalhe<?= $feira['inverso'] ? ' inverso' : '' ?>">
            <img src="<?= e($feira['imagem']) ?>" alt="<?= e($feira['alt']) ?>">
            <div class="texto">
                <h1><?= e($feira['titulo']) ?></h1>
                <?php foreach ($feira['textos'] as $paragrafo): ?>
                <p><?= $paragrafo /* sem e(): aqui pode ter <strong> */ ?></p>
                <?php endforeach; ?>
                <a class="voltar" href="#inicio">↑ Voltar ao topo</a>
            </div>
        </div>
        <?php if (!empty($feira['galeria'])): ?>
        <div class="galeria">
            <?php foreach ($feira['galeria'] as $foto): ?>
            <img src="<?= e($foto[0]) ?>" alt="<?= e($foto[1]) ?>">
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </section>
    <?php endforeach; ?>

    <!-- 5) O QUE É O P.I? -->
    <section class="secao surgir" id="pi">
        <div class="texto-central">
            <h1><?= e($piTitulo) ?></h1>
            <p><?= e($piTexto) ?></p>
            <a class="voltar" href="#inicio">↑ Voltar ao topo</a>
        </div>
    </section>

<?php require "includes/rodape.php"; ?>
