
	<script type="text/javascript">
		var searchSection = 'mac';
		var searchCountry = 'us';
	</script>
	<script type="text/javascript">
			function poner_titulo(variable){
				document.getElementById("titulo_seccion").innerText = variable;
				return false;
			}			
	</script>
	<style type="text/css">
		#opcionesarriba{
			margin-bottom:-1em;
			margin-top:1em;
			margin-left:55em; 
			font-size:12px;
		}
		#opcionesarriba label{
			display: inline-block;
			background: transparent;
			padding: 4px;
		}
		#opcionesarriba input{
			font-size: 12px;
			margin-top: -3px;
			border: none;
			background: transparent;
		}
	</style>
	<div id="opcionesarriba">
		<label>
			<form name="reloj12">
            	<span><script language="JavaScript" type="text/javascript">
            		MostrarFecha();
                </script>&nbsp;&nbsp;</span>
                <input type="text" size="14" name="digitos" disabled="disabled"/>
        	</form>
    	</label>
        <label>
			<a href="http://publicidadpunto4.com/"> Home </a>|
			<a href="http://publicidadpunto4.com/contacto.php"> Contacto </a>|
			<a href="http://publicidadpunto4.com:2095/" target="_blank"> Email</a>
		</label>
	</div>
	<div class="spinner"></div>
	<!--script src="js/globalnav.js" type="text/javascript" charset="utf-8"></script!-->
	<nav id="globalheader" class=" globalheader-js svg globalheader-loaded globalheader-loaded">
		<ul id="globalnav" role="navigation">
			<li id="gn-punto4"><a  href="index.php"><span>Inicio</span></a></li>
			<li id="gn-nosotros"><a  class=" before" href="nosotros.php"><span>Nosostros</span></a></li>
			<li id="gn-servicios"><a class="" href="servicios.php"><span>Servicios</span></a></li>
			<li id="gn-clientes"><a class="" href="#"><span>Clientes</span></a></li>
			<li id="gn-soporte"><a class=""  href="#"><span>Soporte</span></a></li>
			<li id="gn-noticias"><a  href="#"><span>Noticias</span></a></li>
			<!-- <li id="gn-locales"><a  href="locales.html"><span>Locales</span></a></li> -->
			<li id="gn-contacto"><a  href="contacto.php"><span>Contacto</span></a></li>
		</ul>
		<div id="globalsearch">
			<form action="http://www.publicidadpunto4.com/search/" method="get" class="search empty" id="g-search"><div class="sp-label">
				<label for="sp-searchtext">Buscar</label>
				<input autocomplete="off" name="q" id="sp-searchtext" accesskey="s" type="text"><div class="reset"></div>
			<div class="spinner hide"></div></div><input value="mac" name="sec" id="search-section" type="hidden"></form>
			<div id="sp-magnify"><div class="magnify-searchmode"></div><div class="magnify"></div></div>
			<div id="sp-results"></div>
		</div>
	</nav>

	<!--script type="text/javascript">
		AC.GlobalNav.Instance = new AC.GlobalNav();
	</script!-->
	<!-- <div id="globalheader-loaded-test"></div> -->