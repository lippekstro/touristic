<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
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
                <a href="/touristic/views/conteudo_locais.php">Locais</a>
                <a href="/touristic/views/conteudo_locais.php">Locais 2</a>
                <a href="/touristic/views/conteudo_locais.php">Locais 3</a>
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
                <a href="/touristic/views/conteudo_locais.php">Locais 1</a>
                <a href="/touristic/views/conteudo_locais.php">Locais 2</a>
                <a href="/touristic/views/conteudo_locais.php">Locais 3</a>
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
                <a href="/touristic/views/conteudo_locais.php">Locais 1</a>
                <a href="/touristic/views/conteudo_locais.php">Locais 2</a>
                <a href="/touristic/views/conteudo_locais.php">Locais 3</a>
            </div>
        </div>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>