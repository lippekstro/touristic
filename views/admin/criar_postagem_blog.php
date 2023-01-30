<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
?>

<div>
    <div class="container">
        <form action="#" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="imagem">
                        <div class="icone-texto">
                            <span class="material-symbols-outlined">image</span>
                            Imagem
                        </div>
                    </label>
                </div>
                <div class="col-75">
                    <input type="file" id="imagem" name="imagem" placeholder="Título">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="titulo">
                        <div class="icone-texto">
                            <span class="material-symbols-outlined">title</span>
                            Título
                        </div>
                    </label>
                </div>
                <div class="col-75">
                    <input type="text" id="titulo" name="titulo" placeholder="Título">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="texto">
                        <div class="icone-texto">
                            <span class="material-symbols-outlined">description</span>
                            Texto
                        </div>
                    </label>
                </div>
                <div class="col-75">
                    <textarea id="texto" name="texto" placeholder="Escreva sua postagem" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row alinha-end">
                <input type="submit" value="Postar">
            </div>
        </form>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>