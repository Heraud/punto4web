<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="Author" content="Punto4.">
	<meta name="viewport" content="width=1024">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9">
	<title>Empresa de publicidad Punto4</title>
	<meta name="Description" content="Tienda de publicidad que se encarga de diseñar diferentes tipos de banners, portadas, etc.">
	<link rel="shortcut icon" href="img/logo.png">
	<script type="text/javascript" src="js/mostrar_hora.js"></script>
	
	<!-- ARCHIVOS DEL TEMPLEATE PRINCIPAL -->
	<link id="globalheader-stylesheet" rel="stylesheet" href="css/navigation.css" type="text/css">
	<!--script src="js/prototype.js" type="text/javascript" charset="utf-8"></script!-->
	
	<script src="js/apple_core.js" type="text/javascript" charset="utf-8"></script>	
	<link rel="stylesheet" href="css/base.css" type="text/css">	
	<link rel="stylesheet" href="css/productbrowser.css" type="text/css">
	<link rel="stylesheet" href="css/mac.css" type="text/css">
	<link rel="stylesheet" href="css/promos_002.css" type="text/css">

		<!-- PARA EL MENÚ -->
	<link id="globalheader-enhanced-stylesheet" rel="stylesheet" href="css/enhanced.css" type="text/css">

	<style id="supportsThreeDStyle">@media (transform-3d),(-o-transform-3d),(-moz-transform-3d),(-ms-transform-3d),(-webkit-transform-3d) { #supportsThreeD { height:3px } }</style>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

		<!-- ARCHIVOS PARA LA ANIMACIÓN DEL SLIDER -->
		<link rel="stylesheet" href="slider/css/page.css" type="text/css" media="screen">
		<link rel="stylesheet" href="slider/css/layerslider.css" type="text/css" media="screen">
		<noscript>
			<link rel="stylesheet" href="slider/css/noscript.css" type="text/css" media="screen">
		</noscript>
		<!--[if IE 7]>
			<link rel="stylesheet" href="slider/css/ie7.css" type="text/css" media="screen">
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="slider/js/html5.js"></script>
		<![endif]-->
</head>
<body class="loaded revealed">
<!-- Incluyendo la cabecera la parte de los menus -->
<?php //include("top.php") ?>
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


<div id="main" data-hires="true">
	<div class="productbrowser content pb-dynamic pb-opened" id="pb-mac" style="height:80px;">
		<div class="pb-slider" style="height:50px; font-style: italic; color:#adadaf;">	
			<p style="font-size:30px; margin-top:10px;">Consulte nuestras promociones</p>		
		</div>
		<div class="pb-pageindicator roundedbottom page-1" id="pb-pi-mac">
			<div>
				<b class="caret"></b>
				<a page="1" class="page active">.</a>
			</div>
		</div>
	</div>
<script src="js/productbrowser.js" type="text/javascript" charset="utf-8"></script>

	<section  class="content promo-rotation" style="padding-bottom:0.2em;">			
            <div id="layerslider">
				<div class="ls-layer" rel="slidedelay: 3000;">
					<img class="ls-bg" src="slider/gallery/l1.jpg" alt="layer">
					<img class="ls-s2" src="slider/gallery/l11.png" alt="sublayer" style="durationin: 2000; easingin: easeOutExpo; slidedirection: top; delayin: 1000">
					<img class="ls-s3" src="slider/gallery/l12.png" alt="sublayer" rel="durationin: 2300; easingin: easeOutElastic; slidedirection: bottom; delayin: 1000">
					<img id="leaf1" class="ls-s4" src="slider/gallery/l13.png" alt="sublayer" rel="slidedirection: left">
					<img class="ls-s5" src="slider/gallery/l15.png" alt="sublayer" rel="slidedirection: top">
					<img id="leaf2" class="ls-s7" src="slider/gallery/l16.png" alt="sublayer" rel="slidedirection: bottom">
					<img id="leaf3" class="ls-s2" src="slider/gallery/l17.png" alt="sublayer" rel="slidedirection: top">
					<img style="left: 240px; top: 200px;" class="ls-linkto-4 ls-s6" src="slider/gallery/l14.png" alt="sublayer" rel="slidedirection: top">
				</div>

				<div class="ls-layer" rel="slidedelay: 1000;">
					<div class="ls-s0">
						<iframe width="1000" height="500" src="http://www.youtube.com/embed/VqwO7bTt32Q" frameborder="0" allowfullscreen></iframe>
						<!-- <iframe src="http://player.vimeo.com/video/24535181?color=ff9933" width="1000" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>	 -->					
					</div>
					<div class="ls-s2" style="padding: 20px; background: #ff9933; width: 440px; left: 500px; top: 20px; border-radius: 5px; moz-border-radius: 5px; webkit-border-radius: 5px; color: white; text-shadow: none; font-size: 20px; font-weight: bold; line-height: auto; box-shadow: 0px 0px 20px -5px black">
						How about embedding and auto-playing YouTube and Vimeo videos with auto-pause slideshow feature?
					</div>
				</div>

				<div class="ls-layer">
					<img class="ls-bg" src="slider/gallery/l3.jpg" alt="layer">
					<img class="ls-s2" src="slider/gallery/l31.png" alt="sublayer" rel="durationin: 5800; easingin: easeOutQuad">
					<img class="ls-s3" src="slider/gallery/l32.png" alt="sublayer" rel="durationin: 5600; easingin: easeOutQuad">
					<img class="ls-s5" src="slider/gallery/l33.png" alt="sublayer" rel="durationin: 1200">
					<img class="ls-s5" src="slider/gallery/l34.png" alt="sublayer" rel="durationin: 1350">
					<img class="ls-s6" src="slider/gallery/l36.png" alt="sublayer" rel="durationin: 4000; easingin: easeOutExpo; durationout: 800; delayout: 50">
					<img class="ls-s7" src="slider/gallery/l35.png" alt="sublayer" rel="durationin: 5000; easingin: easeOutExpo; durationout: 800; delayout: 100">
					<img class="ls-s8" src="slider/gallery/l37.png" alt="sublayer">
					<img class="ls-s9" src="slider/gallery/l38.png" alt="sublayer">
					<img class="ls-s10" src="slider/gallery/l39.png" alt="sublayer">
					<img class="ls-s11" src="slider/gallery/l310.png" alt="sublayer" rel="delayin: 1300; slidedirection: fade; slideoutdirection: top; durationin: 1000;">
					<img class="ls-s11" src="slider/gallery/l311.png" alt="sublayer" rel="delayin: 1000; slidedirection: fade; slideoutdirection: top; durationin: 1000;">
				</div>

				<div class="ls-layer" rel="slidedirection: top; slidedelay: 6000">
					<img class="ls-bg" src="slider/gallery/l2.jpg" alt="layer">
					<img id="clouds" class="ls-s2" src="slider/gallery/l21.png" alt="sublayer">
					<img class="ls-s3" src="slider/gallery/l22.png" alt="sublayer">
					<img class="ls-s4" src="slider/gallery/l23.png" alt="sublayer">
					<img class="ls-s5" src="slider/gallery/l24.png" alt="sublayer">
					<img class="ls-s6" src="slider/gallery/l25.png" alt="sublayer">
					<img class="ls-s7" src="slider/gallery/l26.png" alt="sublayer">
					<img class="ls-s8" src="slider/gallery/l27.png" alt="sublayer">
					<img class="ls-s9" src="slider/gallery/l28.png" alt="sublayer">
					<img class="ls-s10" src="slider/gallery/l29.png" alt="sublayer" rel="slidedirection: bottom; durationin: 1000; easingin: easeOutExpo; delayin: 1500; delayout: 50">
				</div>

				<div class="ls-layer">

					<img class="ls-bg" src="slider/gallery/l4.jpg" alt="layer">
					<img class="ls-s6" src="slider/gallery/l45.png" alt="sublayer" style="durationin: 6000; easingin: easeOutQuart">
					<img class="ls-s5" src="slider/gallery/l44.png" alt="sublayer" style="durationin: 3000; easingin: easeOutExpo">
					<img class="ls-s2" src="slider/gallery/l41.png" alt="sublayer" style="delayin: 1400; easingin: easeOutBack">
					<img class="ls-s3" src="slider/gallery/l42.png" alt="sublayer" style="delayin: 1400; easingin: easeOutBack">
					<img class="ls-s4" src="slider/gallery/l43.png" alt="sublayer" style="delayin: 1400; easingin: easeOutBack">
				</div>
				
				<div class="ls-layer">
					<img class="ls-bg" src="slider/gallery/l5.jpg" alt="layer">
					<img id="earth" class="ls-s3" src="slider/gallery/l51.jpg" alt="sublayer">
					<img class="ls-s4" src="slider/gallery/l52.png" alt="sublayer">
					<img class="ls-s6" src="slider/gallery/l53.png" alt="sublayer">
					<img class="ls-s8" src="slider/gallery/l54.png" alt="sublayer">
					<p id="l5text1" class="ls-s12">
						2003 UB <span class="small">313</span>
					</p>
					<p id="l5text2" class="ls-s14">
						Charon
					</p>
					<p id="l5text3" class="ls-s16">
						Ceres
					</p>
					<p id="l5text4" class="ls-s8">
						This is <a target="_blank" href="http://en.wikipedia.org/wiki/Charon_(moon)">an external link</a> to Wikipedia.
					</p>
				</div>				
			</div>
	</section><!--/showcase-->
	<br />
	<div id="buy" class="content">
		<div id="buystrip" class="grid4col roundedtop" style="color:#666;">
			<div class="column first">
				<img class="product" src="img/punto4_logo.gif" alt="" height="119" width="119">
			</div>
			<div class="column second">
				<h3>HAGA SU PEDIDO:</h3>
				<p>Comuníquese con nuestra área de ventas</p>
				<p>ventas@publiciadadpunto4.com</p>
			</div>
			<div class="column third">
				<h3>VISITA NUESTRO LOCAL:</h3>
				<p>Jr. Arequipa 915 (Ultima cuadra, Antes del hostal Centenario)</p>
			</div>
			<div class="column last">
				<h3>MAYOR INFORMACIÓN</h3>
				<p>C: 983708020 - M: 983984444</p>
				<p>RPM: #0214444 - FIJO: 322934</p>
				<h3>E-MAIL:</h3>
				<p>punto4will@hotmail.com</p>
				<p>punto4abancay@gmail.com</p>
				<h3>WEB:<a href="http://publicidadpunto4.com/"> publicidadpunto4.com</a></h3>
			</div>
		</div>
		<div id="buystrip_extra" class="grid3col">
			<h3><p style="margin:1em; color:#666;">Punto 4 se caracteriza por su puntualidad, calidad, eficaz y honradez</p></h3>
		</div>
	</div>
	
	</div><!--/main-->

	<!-- Incluimos el footer -->
	<?php include("footer.php") ?>

		<script src="slider/js/jqueryui.js" type="text/javascript"></script>
		<script src="slider/js/plugins.js" type="text/javascript"></script>
		<script src="slider/js/layerslider.kreaturamedia.jquery-min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#layerslider').layerSlider({
					skin : 'lightskin',
					skinsPath : 'slider/layerslider/skins/',
					durationTimeIn : 1500,
					durationTimeOut : 1500,
					// yourLogo			: 'http://kreaturamedia.com/static/img/kmlogo.png',
					// yourLogoStyle		: 'position: absolute; z-index: 1001; left: -30px; top: -30px; height: 100px;'
				});
			});
		</script>	
</body>
</html>