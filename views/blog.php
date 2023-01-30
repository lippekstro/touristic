<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
?>

<div class="container-blog">
    <?php for ($i = 0; $i < 5; $i++) : ?>
        <a href="/touristic/views/conteudo_blog.php">
            <div class="card">
                <img src="/touristic/img/palacio.jpg">
                <div class="container">
                    <h4><b>John Doe</b></h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit laudantium, eum, veniam earum,
                        libero temporibus repellendus eligendi commodi facere officia nam? Quibusdam, odit id.
                        Quasi earum consectetur fugit porro rem!
                    </p>
                </div>
            </div>
        </a>
    <?php endfor; ?>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>