<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
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

    <div class="container-elem-eve">
        <div class="container-img">
            <img src="https://source.unsplash.com/random/1920x1080/?robot" alt="Avatar">
        </div>
        <div class="container-comentario">
            <p><b>Teste</b></p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Consequatur culpa, ratione alias provident veniam voluptatem tempore optio commodi blanditiis ea voluptas 
                quo praesentium voluptatibus dolores animi amet in non sunt!
            </p>
        </div>
        <div class="container-data">
            <span class="time-right"><?= date('d/m/y h:m:s') ?></span>
        </div>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>