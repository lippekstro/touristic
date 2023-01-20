<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div>
    <?php for ($i=0; $i < 5; $i++): ?>
    <div class="card">
        <img src="https://source.unsplash.com/random/1920x1080/?landscape,mountain" alt="Avatar" style="width:20%">
        <div class="container">
            <h4><b>John Doe</b></h4>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit laudantium, eum, veniam earum,
                libero temporibus repellendus eligendi commodi facere officia nam? Quibusdam, odit id.
                Quasi earum consectetur fugit porro rem!
            </p>
        </div>
    </div>
    <?php endfor; ?>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>