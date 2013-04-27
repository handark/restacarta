<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <p>copyright &copy; 2013 restaCarta - todos los derechos reservados</p>
                </span>
            </div>
        </div>
</footer>

<script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="recursos/js/googlemaps.js"></script>
<script type="text/javascript" src="recursos/js/onepage.js"></script>
<script type="text/javascript" src="recursos/js/jquery.hoverdir.js"></script>

<script type="text/javascript">

    $(function() {
        $('.gallery > div').hoverdir( {
            hoverDelay  : 75
        } );
    });

    var options = {
        'offsetHeader' : $('#header').height(),
        'targetMenus' : [{'get' : '#nav a', 'target' : 'href'}],
        'targetPages' : [{'get' : 'section[data-type="page"]', 'target' : 'data-name'}],
        'detectByHash' : true,
        'detectByScroll' : true,
        'detectByResize' : true,
        'beforeScroll' : function( menu, page, $this ) {},
        'afterScroll' : function( menu, page, $this ) {}
    }

    var myonepage = new onepage(options);

</script>

</body>
</html>