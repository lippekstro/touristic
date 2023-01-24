<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div class="container-locais">
    <div class="card">
        <div class="card-text">
            <p>
                O que Fazer?
            </p>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Confira</button>
            <div class="dropdown-content">
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais</a>
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 2</a>
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 3</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-text">
            <p>
                Onde Ficar?
            </p>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Confira</button>
            <div class="dropdown-content">
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 1</a>
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 2</a>
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>v">Locais 3</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-text">
            <p>
                Onde Comer?
            </p>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Confira</button>
            <div class="dropdown-content">
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 1</a>
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 2</a>
                <a href="<?= dirname('/touristic/views/conteudo_locais.php') . DIRECTORY_SEPARATOR . 'conteudo_locais.php' ?>">Locais 3</a>
            </div>
        </div>
    </div>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>