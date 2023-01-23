<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div class="container-conteudo">
    <div class="container-titulo-autor">
        <div class="titulo">
            <h1>Conheça o Lampiões Boteco e Petiscaria</h1>
        </div>
        <div class="autor-data">
            <span>Juan Frazão</span>
            <span><?= date('M d Y') ?></span>
        </div>
    </div>

    <hr>

    <div class="container-imagem-texto">
        <div class="imagem-conteudo">
            <img src="https://source.unsplash.com/random/1920x1080/?landscape,mountain" alt="" style="width: 100%;">
        </div>
        <div class="texto-conteudo">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit eveniet voluptas pariatur,
                    commodi totam aliquid a saepe incidunt facere similique ratione culpa iste ipsum at, cupiditate veniam, error omnis!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Corporis illo, modi pariatur assumenda in voluptate aliquam aperiam vitae beatae veritatis voluptatem reprehenderit architecto.
                    Perferendis, sunt aliquam. In dolorum corrupti sapiente!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Laborum odio nobis quia accusamus ab quis, labore error molestias in amet libero, fugiat ex?
                    Adipisci, eos iure. Ratione cumque alias iure!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit eveniet voluptas pariatur,
                    commodi totam aliquid a saepe incidunt facere similique ratione culpa iste ipsum at, cupiditate veniam, error omnis!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Corporis illo, modi pariatur assumenda in voluptate aliquam aperiam vitae beatae veritatis voluptatem reprehenderit architecto.
                    Perferendis, sunt aliquam. In dolorum corrupti sapiente!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Laborum odio nobis quia accusamus ab quis, labore error molestias in amet libero, fugiat ex?
                    Adipisci, eos iure. Ratione cumque alias iure!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit eveniet voluptas pariatur,
                    commodi totam aliquid a saepe incidunt facere similique ratione culpa iste ipsum at, cupiditate veniam, error omnis!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            <?php endfor; ?>
        </div>
    </div>

</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>