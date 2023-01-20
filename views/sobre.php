<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div>
    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'London')">London</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
    </div>

    <div id="London" class="tabcontent" style="display: block;">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent" style="display: none;">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent" style="display: none;">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>