<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Carta Interactiva para Restaurantes">
    <meta name="author" content="App Creativa" >    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RestaCarta - Carta Interactiva Restaurantes</title>
    <link rel="stylesheet"  href="../recursos/css/themes/default/jquery.mobile-1.3.1.min.css">
    <link rel="stylesheet" href="../recursos/css/jqm-restacarta.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <script src="../recursos/js/jquery.js"></script>
    <script src="../recursos/js/index.js"></script>
    <script src="../recursos/js/jquery.mobile-1.3.1.min.js"></script>
</head>
<body>

<div data-role="page" class="jqm-demos jqm-demos-home jqm-demos-index">

<div data-role="header" class="jqm-header" >
    <h1 class="jqm-logo"><img src="../recursos/img/logo.png" alt="RestaCarta"></h1>
</div><!-- /Cabecera -->

<div data-role="content" class="jqm-content">

    <h2>Ingrese sus datos de acceso</h2>

    <form>
        <label for="text-basic">Usuario:</label>
        <input type="text" name="tUsuario" id="tUsuario"   >
        <label for="text-basic">Contrasena:</label>
        <input type="password" name="tContrasena" id="tContrasena"  autocomplete="off">
        <a href="#" data-role="button" data-inline="true">Aceptar</a>
    </form>

</div>

<div data-role="footer" data-id="foo1" data-position="fixed"  >
    <div data-role="navbar"  role="navigation">
        <ul>
            <li><a href="registro">Registro</a></li>
            <li><a href="demo">Demo</a></li>
            <li><a href="que-es">Que es</a></li>
            <li><a href="contacto">Contacto</a></li>
        </ul>
    </div><!-- /navbar -->
</div>
</div><!-- /page -->
</body>
</html>