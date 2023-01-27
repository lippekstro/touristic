<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/cabecalho.php';
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
            São Luís é uma cidade encantadora localizada na ilha de São Luís, no nordeste do Brasil. Com sua rica história e arquitetura colonial, a cidade é conhecida por sua beleza única e atmosfera acolhedora.

            Os visitantes podem desfrutar de uma variedade de atividades, como passeios pelo centro histórico, que possui mais de 80 prédios tombados pelo patrimônio histórico. Aqui, é possível admirar a arquitetura colonial portuguesa, com suas casas coloridas e ruas estreitas. Além disso, existem vários museus e galerias de arte que contam a história da cidade e sua cultura.

            Outra atração popular é o Mercado Municipal, onde os visitantes podem experimentar a culinária local e comprar artesanato. A cidade também oferece belas praias, como a Praia do Calhau, Praia do Bacanga e Praia do Jansen, para os amantes do sol e do mar.

            Além disso, os amantes da natureza podem explorar as reservas ecológicas da ilha, como o Parque Estadual das Dunas, e ver a fauna e a flora única da região.

            São Luís é uma cidade incrível que combina história, cultura, natureza e praias em um só lugar. Se você estiver planejando uma viagem para o Nordeste do Brasil, não deixe de visitar esta cidade encantadora.
        </p>
    </div>

    <div id="Paris" class="tabcontent" style="display: none;">
        <h3>O Site</h3>
        <p>
            O nosso site de turismo para São Luís é a sua melhor fonte de informações sobre a cidade. Ele oferece uma variedade de recursos para ajudá-lo a planejar sua viagem, incluindo:
        <ul>
            <li>Informações detalhadas sobre atrações turísticas populares, incluindo fotos e descrições para ajudá-lo a decidir o que visitar.</li>
            <li>Dicas de viagem úteis para ajudá-lo a aproveitar ao máximo sua estadia na cidade.</li>
            <li>Informações sobre hospedagem, incluindo opções para todos os orçamentos e tipos de viajantes.</li>
            <li>Uma seção de dicas de restaurantes e bares, para que você possa experimentar a culinária local.</li>
            <li>Informações sobre como se deslocar pela cidade, incluindo opções de transporte público e aluguel de carros.</li>
        </ul>
        Além disso, o nosso site também oferece uma seção de notícias e eventos, para que você possa ficar atualizado sobre as últimas atividades e acontecimentos na cidade.

        Nós também oferecemos pacotes turísticos personalizados e reservas on-line para facilitar a sua viagem. Não hesite em entrar em contato conosco se tiver alguma dúvida ou precisar de ajuda com a sua reserva. Estamos sempre prontos para ajudá-lo a planejar uma viagem inesquecível para São Luís.
        </p>
    </div>

    <div id="Tokyo" class="tabcontent" style="display: none;">
        <h3>Nossa Equipe</h3>
        <div class="container-membro-equipe">
            <div>
                <img src="/touristic/img/megazord.jpg" alt="">
            </div>
            <div>
                <p><b>Fulano</b></p>
                <p>CEO</p>
            </div>
        </div>
        <div class="container-membro-equipe">
            <div>
                <img src="/touristic/img/mulher.jpg" alt="">
            </div>
            <div>
                <p><b>Fulano</b></p>
                <p>Web Designer</p>
            </div>
        </div>
        <div class="container-membro-equipe">
            <div>
                <img src="/touristic/img/jovem.jpg" alt="">
            </div>
            <div>
                <p><b>Fulano</b></p>
                <p>Desenvolvedor Web</p>
            </div>
        </div>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/touristic/templates/rodape.php';
?>