<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div>
    <div class="container-elem-eve">
        <div class="container-img">
            <img src="https://source.unsplash.com/random/1920x1080/?person, woman" alt="Avatar">
        </div>
        <div class="container-comentario">
            <p><b>Ravyane</b></p>
            <p>La no Revis é ótimo</p>
        </div>
        <div class="container-data">
            <span class="time-right"><?= date('d/m/y h:m:s') ?></span>
        </div>
    </div>

    <div class="container-elem-eve">
        <div class="container-img">
            <img src="https://source.unsplash.com/random/1920x1080/?person, man" alt="Avatar">
        </div>
        <div class="container-comentario">
            <p><b>Carlos</b></p>
            <p>Cuidado no São Raimundo</p>
        </div>
        <div class="container-data">
            <span class="time-right"><?= date('d/m/y h:m:s') ?></span>
        </div>
    </div>

    <div class="container-elem-eve">
        <div class="container-img">
            <img src="https://source.unsplash.com/random/1920x1080/?person, young" alt="Avatar">
        </div>
        <div class="container-comentario">
            <p><b>Daniel</b></p>
            <p>Eu recomendo ir na Mocinha</p>
        </div>
        <div class="container-data">
            <span class="time-right"><?= date('d/m/y h:m:s') ?></span>
        </div>
    </div>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>