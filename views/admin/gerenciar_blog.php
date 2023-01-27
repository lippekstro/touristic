<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
?>

<div style="overflow-x: auto;">
    <div class="icone-texto">
        <label for="busca">
            <span class="material-symbols-outlined">search</span>
        </label>
        <input type="text" id="busca" onkeyup="filtra_tabela()" placeholder="Busque uma postagem...">
    </div>

    <table id="tabela_blog">
        <caption>Gerenciamento do Blog</caption>
        <tr>
            <th onclick="ordenar(0)">Titulo</th>
            <th onclick="ordenar(1)">Autor</th>
            <th onclick="ordenar(2)">Data</th>
            <th colspan="2">
                <a href="/touristic/views/admin/criar_postagem_blog.php">
                    <span class="material-symbols-outlined">add</span>
                </a>
            </th>
        </tr>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <td>Reviver</td>
                <td>Ravyane</td>
                <td><?= date('d/m/y') ?></td>
                <td>
                    <a href="">
                        <span class="material-symbols-outlined">edit</span>
                    </a>
                </td>
                <td>
                    <a href="">
                        <span class="material-symbols-outlined">delete</span>
                    </a>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>