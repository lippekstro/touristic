<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div>
    <button class="accordion">Section 1</button>
    <div class="panel">
        <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 2</button>
    <div class="panel">
        <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 3</button>
    <div class="panel">
        <p>Lorem ipsum...</p>
    </div>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>