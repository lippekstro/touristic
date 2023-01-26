<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
?>

<div style="overflow-x: auto;">
    <table>
        <caption>Gerenciamento do Blog</caption>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Data</th>
            <th colspan="2">
                <a href="">
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