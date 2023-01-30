<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
?>

<div>
    <div class="container-eventos">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <div class="evento-link">
                <a href="/touristic/views/conteudo_evento.php">
                    <div class="evento-titulo-img">
                        <span>Festa X</span>
                        <img src="/touristic/img/festa.jpg" alt="">
                    </div>
                </a>
            </div>

            <div class="evento-link">
                <a href="/touristic/views/conteudo_evento.php">
                    <div class="evento-titulo-img">
                        <span>Show Y</span>
                        <img src="/touristic/img/show.jpg" alt="">
                    </div>
                </a>
            </div>

            <div class="evento-link">
                <a href="/touristic/views/conteudo_evento.php">
                    <div class="evento-titulo-img">
                        <span>Feira Z</span>
                        <img src="/touristic/img/feira.jpg" alt="">
                    </div>
                </a>
            </div>

            <div class="evento-link">
                <a href="/touristic/views/conteudo_evento.php">
                    <div class="evento-titulo-img">
                        <span>Palestra A</span>
                        <img src="/touristic/img/teatro.jpg" alt="">
                    </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>