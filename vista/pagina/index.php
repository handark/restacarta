<?php include 'header.php';?>

<div data-role="content" class="jqm-content">

    <div class="jqm-home-welcome">
    <h2>Carta Interactiva Restaurantes <!--<span class="jqm-version-number"></span>--></h2>
    
    <p class="jqm-intro">Sorprenda y brinde a sus clientes la experiencia de tener una carta interactiva. Permita que realicen y controlen su pedido de forma rapida y facil.</p>

    <p class="jqm-intro"><small>Conozca mas ,&nbsp;explore el <a href="#api-popup" data-rel="popup" data-transition="slideup" data-position-to="window">DEMO</a>.</small></p>
    
    </div>
    
    <div data-role="popup" id="api-popup" class="home-pop ui-content" data-theme="d" data-overlay-theme="b">
        <p>RestaCarta no solo es una carta, tambien le permite organizar y gestionar agilmente las ordenes de sus clientes, permitiebdole a su vez dar una mejor atencion al usuario.</p>
        <a href="#" data-role="button" data-inline="true" data-rel="back"  data-mini="true" data-theme="c">Ver Carta</a>
        <a href="#" class="jqm-button" data-ajax="false" data-role="button" data-inline="true" data-mini="true" data-icon="arrow-r" data-iconpos="right" data-theme="f">Panel de Gestion </a>
    </div>

    <ul data-role="listview" data-inset="true" data-theme="d" data-icon="false" data-filter-placeholder="Buscar..." class="jqm-list jqm-home-list">
        <li><a href="#principal"><h2>Registrarme</h2><p>Eres Nuevo? Registrate aqui.</p></a></li>
        <li><a href="#api-popup" data-rel="popup" data-transition="slideup" data-position-to="window" ><h2>Ver un Demo</h2><p>Explora y aprende como funciona RestaCarta.</p></a></li>
        <li><a href="#registro"><h2>Preguntas y Respuestas</h2><p>Common issues and questions, explained.</p></a></li>
        <li><a href="#"><h2>Contactenos</h2><p>Pongase en contacto con nosotros.</p></a></li>
    </ul>

    <h2 class="jqm-home-widget">Caracteristicas Generales</h2>

    <p class="jqm-intro">RestaCarta no solo es una carta, tambien le permite organizar y gestionar agilmente las ordenes de sus clientes, permitiebdole a su vez dar una mejor atencion al usuario. Estas son algunas de las caracteristicas:</p>

    <ul data-role="listview" data-inset="true" data-filter="true" data-theme="d" data-divider-theme="d" data-icon="false" data-filter-placeholder="Buscar caracteristica..." data-global-nav="demos" class="jqm-list">

        <li data-section="Widgets" data-filtertext="Informacion sobre la Carta Interactiva"><a href="#">Carta Interactiva</a></li>
        <li data-section="Widgets" data-filtertext="Portatil, Tablet, Ipad, Smartphone, Iphone, Blackberry..."><a href="#" data-ajax="false">Adaptable a todos los dispositivos ( Portatil, Tablet, Ipad, Smartphone, Iphone, Blackberry...)</a></li>

        <li data-section="Widgets" data-filtertext="Controle los pedidos de sus cliente de forma grafica e interactiva"><a href="#" data-ajax="false">Control de Pedidos por Mesa</a></li>
        <li data-section="Widgets" data-filtertext="Reportes y Estadisticas"><a href="#" data-ajax="false">Reportes y Estadisticas</a></li>

    </ul>

</div><!-- /content -->

<?php include 'footer.php';?>