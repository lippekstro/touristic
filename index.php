<?php
require_once 'templates/cabecalho.php';
?>

<div>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,mountain" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,night" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,city" style="width:100%">
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
        <div class="column">
            <img src="https://source.unsplash.com/random/1920x1080/?wedding" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?rocks" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?falls" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?paris" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?nature" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?mist" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?smartphone" style="width: 100%;">
        </div>
        <div class="column">
            <img src="https://source.unsplash.com/random/1920x1080/?wedding" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?rocks" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?falls" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?paris" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?nature" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?mist" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?smartphone" style="width: 100%;">
        </div>
        <div class="column">
            <img src="https://source.unsplash.com/random/1920x1080/?wedding" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?rocks" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?falls" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?paris" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?nature" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?mist" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?smartphone" style="width: 100%;">
        </div>
        <div class="column">
            <img src="https://source.unsplash.com/random/1920x1080/?wedding" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?rocks" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?falls" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?paris" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?nature" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?mist" style="width: 100%;">
            <img src="https://source.unsplash.com/random/1920x1080/?smartphone" style="width: 100%;">
        </div>
    </div>
</div>

<?php
require_once 'templates/rodape.php';
?>