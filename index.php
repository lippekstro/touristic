<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
?>

<div>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,beach" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,coast" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,island" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>

<div>
    <div class="row">
        <?php for ($i=0; $i < 4; $i++): ?>
        <div class="column">
            <img src="https://source.unsplash.com/random/1920x1080/?beach" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?coast" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?falls" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?island" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?nature" style="width: 100%;">
        </div>
        <?php endfor; ?>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>