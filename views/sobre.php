<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div class="container-tab-sobre">
    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'London')">São Luis</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">O Site</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Nossa Equipe</button>
    </div>

    <div id="London" class="tabcontent" style="display: block;">
        <h3>São Luis</h3>
        <p>
            São Luís (frequentemente chamado de São Luís do Maranhão) é um município brasileiro e
            a capital do estado do Maranhão.
            É a única capital brasileira fundada por franceses,
            no dia 8 de setembro de 1612, posteriormente invadida por holandeses
            e por fim colonizada pelos portugueses.
            Localiza-se na ilha de Upaon-Açu no Atlântico Sul,
            entre as baías de São Marcos e São José de Ribamar, no Golfão Maranhense.
            No ano de 1997 o centro histórico da cidade foi declarado
            patrimônio cultural da humanidade pela UNESCO.
        </p>
    </div>

    <div id="Paris" class="tabcontent" style="display: none;">
        <h3>O Site</h3>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati reprehenderit totam eveniet aliquid et nostrum dolore consectetur,
            officiis corporis vitae quas natus sunt voluptatum magnam officia velit deleniti nihil vero.
        </p>
    </div>

    <div id="Tokyo" class="tabcontent" style="display: none;">
        <h3>Nossa Equipe</h3>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati reprehenderit totam eveniet aliquid et nostrum dolore consectetur,
            officiis corporis vitae quas natus sunt voluptatum magnam officia velit deleniti nihil vero.
        </p>
    </div>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>