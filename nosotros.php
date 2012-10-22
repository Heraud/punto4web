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
	
	<!-- ARCHIVOS DEL TEMPLEATE PRINCIPAL -->
	<link id="globalheader-stylesheet" rel="stylesheet" href="css/navigation.css" type="text/css">
	<!--script src="js/prototype.js" type="text/javascript" charset="utf-8"></script!-->
	<script src="js/browserdetect.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/apple_core.js" type="text/javascript" charset="utf-8"></script>	
	<link rel="stylesheet" href="css/base.css" type="text/css">	
	<link rel="stylesheet" href="css/productbrowser.css" type="text/css">
	<link rel="stylesheet" href="css/mac.css" type="text/css">
	<link rel="stylesheet" href="css/promos_002.css" type="text/css">
	<script type="text/javascript" src="js/mostrar_hora.js"></script>

		<!-- PARA EL MENÚ -->
	<link id="globalheader-enhanced-stylesheet" rel="stylesheet" href="css/enhanced.css" type="text/css">

	<style id="supportsThreeDStyle">@media (transform-3d),(-o-transform-3d),(-moz-transform-3d),(-ms-transform-3d),(-webkit-transform-3d) { #supportsThreeD { height:3px } }</style>

	<!-- ARCHIVOS PARA EL CAROUSEL -->	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--script src="js/jquery.js" type="text/javascript"></script!-->
		<script src="js/jquery.carouFredSel-5.6.4-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					responsive: true,
					scroll: 1,
					items: {
						width: 200,
						visible: {
							min: 3,
							max: 10
						}
					}
				});

			});
	</script>	
	<link rel="stylesheet" type="text/css" href="css/carousel.css">

	<!-- ARCHIVOS PARA LA ANIMACIÓN DEL CONTENIDO -->
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:600' rel='stylesheet'>
	<!--[if lt IE 9]>
	    <link href='http://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet'>
	    <link href='http://fonts.googleapis.com/css?family=Lora:400' rel='stylesheet'>
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet'>
	    <![endif]-->
	    <link href="sliderfancy/css/style.css" rel="stylesheet">
	    <script src="sliderfancy/js/scripts.js"></script>
	    <!--[if lt IE 9]>
	    <script src="js/html5.js"></script>
	    <link rel="stylesheet" href="css/ie.css" media="all">
	    <![endif]-->
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="//windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
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
	<nav id="globalheader" class="nosotros globalheader-js svg globalheader-loaded globalheader-loaded">
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
	<div class="productbrowser content pb-dynamic pb-opened" id="pb-mac">
		<div class="pb-slider">		
			<div id="carousel" class="menu">
				<!-- <ul id="menu"> -->
				<div>
					<a href="#!/page" onclick = "poner_titulo(<?php echo "'¿Quienes somos?'"; ?>)"><img src="img/browser/QuienesSomos.png" alt="QuienesSomos" width="200" height="200" /></a>
					<span></span>
				</div>
				<div>
					<a href="#!/NuestroPersonal" onclick = "poner_titulo(<?php echo "'Nuestro personal'"; ?>)"><img src="img/browser/NuestroPersonal.png" alt="NuestroPersonal" width="200" height="200" /></a>
					<span></span>
				</div>
				<div>
					<a href="#!/Servicios" onclick = "poner_titulo(<?php echo "'Nuestros servicios'"; ?>)"><img src="img/browser/Servicios.png" alt="Servicios" width="200" height="200" /></a>
					<span></span>
				</div>
				<div>
					<a href="#!/NuestroLocal" onclick = "poner_titulo(<?php echo "'Nuestro local'"; ?>)"><img src="img/browser/NuestroLocal.png" alt="NuestroLocal" width="200" height="200" /></a>
					<span></span>
				</div>
				<div>
					<a href="#!/Meteriales" onclick = "poner_titulo(<?php echo "'Materiales'"; ?>)"><img src="img/browser/Meteriales.png" alt="Meteriales" width="200" height="200" /></a>
					<span></span>
				</div>
				<div>
					<a href="#!/Proveedores" onclick = "poner_titulo(<?php echo "'Proveedores'"; ?>)"><img src="img/browser/Proveedores.png" alt="Proveedores" width="200" height="200" /></a>
					<span></span>
				</div>
				<!-- </ul> -->
			</div>		
		</div>
		<div class="pb-pageindicator roundedbottom page-1" id="pb-pi-mac">
			<div style="font-size:15px; font-style: italic; color:#adadaf;">
				<b class="caret"></b>
				<a page="1" id="titulo_seccion" class="page active" >¿Quienes somos?</a>
			</div>
		</div>
	</div>

	<!-- <div class="content" id="content" style="font-size:13px; text-align:justify; height:490px;"> -->
	<style type="text/css">
		#whymac{
			padding: 0.5em;
			/*background: blue;*/
			margin-top: -5px;
			width: 96%;
			font-size: 11.5px;
			text-align: left;
		}
		#whymac .column{
			/*background: red;*/
			/*padding: 1em;*/
			/*width: 47%;*/
			width: 31.5%;
			text-align: left;
		}
	</style>
		<div id="contente" class="content" style="height:510px;">
			<ul>
	            <li id="page">
	            	<center>
		            	<div  class="grid2col" id="whymac">
							<section class="column first content">
								<p>Punto Cuatro empresa líder de publicidad, peruana ubicado en el Departamento de Apurímac Provincia de Abancay, inició sus operaciones el 22 diciembre del 2009 como persona natural; convirtiéndose en la actualidad en la empresa con mayor cobertura en publicidad exterior e interior  en Apurímac y provincias, logrando alcanzar aceptación en muchos clientes que ahora depositan su confianza y seguridad de sus servicios.</p>
								<img class="bottom" src="http://images.apple.com/mac/home/images/why_mac_learning.jpg" width="143" height="249" alt="">
							</section>
							<section class="column last content">
								<p style="padding-right:2em;">En un inicio como toda empresa no nos fue tan fácil, tuvimos muchos obstáculos ya que no teníamos conocimientos de muchas cosas aun, ya con el tiempo fuimos perfeccionando cada área en la que la empresa se va desarrollando cada día hasta la actualidad, gracias al apoyo y la constante capacitación e innovación del personal se pudo superar muchos de los obstáculos.</p>
								<img class="bottom" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSam7ipkmS9siNqIPJ0AImUueUq5_nfGFu5Ujwe53cPdjnKDn6VSg" width="143" height="249" alt="">
							</section>
						</div>
						<div  class="grid2col" id="whymac">
							<div class="content">
                                <div class="blog_slider">
                                    <div>
                                        <img style="margin:1em;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTpM8valoqWZRKSFuYbmkO_QXu8H75hukbpB0LVgr1A7zpIRIGA" width="145" class="fleft mar5" alt>
                                        <p style="padding:0.5em;">
											La empresa se caracteriza a la fecha por lo profesionalismo con la que realiza los trabajos en todas las áreas, ya que hasta la fecha se ha demostrado puntualidad, calidad, eficaz y honradez ofreciendo los mejores precios para todos nuestros clientes que han depositado su confianza.
											Vamos creciendo gracias a la recomendación de muchos de nuestros clientes que cada día ven la diferencia en nuestro servicios, siempre ofrecemos nuestra atención a nuestros clientes de la mejor manera ya que ellos son las personas que hablan de nosotros son parte de nuestra imagen y prestigio.</p>
                                    </div>
                                    <div style="margin:1em;">
                                        <img style="margin-right:1em;" src="img/page6_pic2.jpg" width="300" class="fleft mar5" alt>
                                        <p>El éxito de toda empresa, va relacionado con la unidad y trabajo en equipo desde el personal de limpieza hasta el cargo mas alto siendo un líder y no un jefe, tenemos la frase de “Somos diferentes pero juntos hacemos familia, trabajo y sociedad”, y sobre todas las cosas vamos confiando en nuestro creador que es Dios.</p>
                                        
                                    </div>
                                    <div style="margin:1em;">
                                        <img style="margin-right:1em;" src="img/page6_pic3.jpg" width="300" class="fleft mar5" alt>
                                        <p>Gracias a todos los que pertenecen y son parte de la EMPRESA DE MARKETING Y PUBLICIDAD PUNTO 4, y  a todos aquellos que se irán sumando cada día, siempre avanzaremos pensando en Uds. Con la idea de ofrecerles el mejor servicio, todos nos merecemos lo mejor.</p>	
                                    </div>
                                </div>
                                <p class="nav_box" style="padding-bottom:10px; text-align:right; padding-right:10px;">
                                	<label class="readMore mar6" style="background-position: 50% 0%; ">Leer más</label>
                                	<a href="#" class="readMore2 mar7 active">1</a>
                                	<a href="#" class="readMore2 mar7">2</a>
                                	<a href="#" class="readMore2">3</a>
                                </p>
                            </div>
						</div>
	            	</center>
				</li>


	            <li id="NuestroPersonal">
	            	<center>
		            	<div  class="grid2col" id="whymac">
							<section class="column first content">
								<p style="padding-left:1em;">Nuestro personal se mantiene constantemente capacitado para compartir contigo un mismo objetivo: obtener la publicidad exterior más novedosa e impactante del mercado. Por eso, nuestra gente se identifica con tu producto como si fuera propio, llevando este sentimiento a cada una de nuestras diferentes áreas:</p>
								<img class="bottom" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-pgwQZq3BcSRbPv-2waOOADK9zTES5FYg75IH_HK-Itl5WKLVCQ" width="143" height="200" alt="">
							</section>
							<section class="column last content">
								<p style="padding-right:2em;">
									<ul class="square" style="padding-left:3em; ">
												<li>Área Administración.</li>
												<li>Área mercadotecnia o ventas</li>
												<li>Área finanzas</li>
												<li>Área de seguridad y producción</li>
												<li>Área de recursos humanos (personal)</li>
												<li>Área de Relaciones Municipales.</li>
												<li>Gerencia</li>
												<li>Area legal</li>
									</ul>
								</p>
								<img class="bottom" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRYZOgzlEWJIVQf4Ebs1bBwNELeKWoCvSUIMGyBqhapYTUlM_wolA" width="143" height="249" alt="">
							</section>
						</div>
						<div  class="grid2col" id="whymac">
							<div class="content">
								<div class="blog_slider">                                    
                                    <div style="margin:1em;">
                                        <img style="margin-right:1em;" src="img/page6_pic1.jpg" width="300" class="fleft mar5" alt>
                                        <p>El éxito de toda empresa, va relacionado con la unidad y trabajo en equipo desde el personal de limpieza hasta el cargo mas alto siendo un líder y no un jefe, tenemos la frase de “Somos diferentes pero juntos hacemos familia, trabajo y sociedad”, y sobre todas las cosas vamos confiando en nuestro creador que es Dios.</p>                                        
                                    </div>
                                    <br />
                                </div>
                            </div>
						</div>
	            	</center>
				</li>


	            <li id="Servicios">
					<center>
						<div  class="grid2col" id="whymac">
							<div class="content">
								<div class="blog_slider">                                    
                                    <div style="margin:1em;">
                                        <img style="margin-right:1em;" src="img/page6_pic1.jpg" width="380" class="fleft mar5" alt>
                                        <p style="padding-left:1em;">Gracias a las exigencias de nuestros clientes y sugerencias de muchos amigos cada día vamos innovando en nuestros servicios mejorando la calidad de impresión, calidad de material, maquinas de mejor resolución, realizamos letreros luminosos, en pana Flex, vinílico, y otros en traslucido, Grafica vehicular, Señaléticas en pvc, Acrílicos, Diseño grafico (Logos, imagen corporativa etc.), servicios de imprenta en general, fotocheck en pvc, enmicados, y mucho mas.</p>                                       
                                    </div>
                                    <br />
                                </div>
                            </div>
						</div>
		            	<div  class="grid2col" id="whymac">
							<section class="column first content" style="padding:0em; width:440px; text-align:center;">
								
								<img style="padding:1.6em;"  src="http://www.dpct.com.mx/images/servicios2.jpg" width="380" height="240"  alt="">
							</section>
							<section class="column last content">
								<p style="padding-right:2em;">
									Las exigencias de nuestros clientes nos motiva cada día para dar mejores servicios y atención a ellos; siempre pensamos en la satisfacción de nuestros cleintes. Tenemos en claro que la razón de que nuestra empresa esté abierta se lo debemos a ellos.
								</p>
								<img class="bottom" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRYZOgzlEWJIVQf4Ebs1bBwNELeKWoCvSUIMGyBqhapYTUlM_wolA" width="143" height="249" alt="">
							</section>
						</div>
	            	</center>
				</li>


	            <li id="NuestroLocal">
	            	<center>
						<div  class="grid2col" id="whymac">
							<div class="content">
								<div class="blog_slider">                                    
                                    <div style="margin:1em;">
                                        <img style="margin-right:1em;" src="http://www.arqhys.com/general/imagenes/locales.jpg" width="250" class="fleft mar5" alt>
                                        <p style="padding-left:1em;">Con la visión de poder contar muy pronto con nuestro propio local para una mayor y mejor atención de nuestros clientes, actualmente estamos en un local alquilado amplio y agradable también nos esforzarnos para mejorar cada día para que nuestros clientes se sientan a gusto como en casa, siempre innovando en publicidad, cuadros publicitarios en el interior.</p>                                       
                                    </div>
                                    <br />
                                </div>
                            </div>
						</div>
		            	<div  class="grid2col" id="whymac">
							<section class="column first content">
								<p style="padding-left:1em;">Es un grato recibir a nuestros clientes en nuestro local, por ello usted se puede sentir como en su casa. <br>
								Por ello hacemos lo posible que el ambiente en donde estamos ubicados sea de agrado para nuestros clientes y visitantes.</p>
								<img class="bottom" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRYZOgzlEWJIVQf4Ebs1bBwNELeKWoCvSUIMGyBqhapYTUlM_wolA" width="143" height="249" alt="">
							</section>
							<section class="column last content" style="padding:0em; width:440px; text-align:center;">
								<img style="padding:1.4em;"  src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNASXHKK77V56alwLRwFWGkfzx6kmcHleRiRTuRzTCZ6MA6030Lg" width="390" height="240"  alt="">
							</section>
						</div>
	            	</center>
				</li>


	            <li id="Meteriales">
	            	<center>
		            	<div  class="grid2col" id="whymac">
							<section class="column first content">
								<p style="padding-left:1em;">De primera, cuidadosamente seleccionados, especialmente pensados para hacer que cada elemento sea lo más seguro y eficiente posible. Los materiales con los que contamos para armar los avisos más impactantes son:</p>

								<img class="bottom" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSpUXGsCDXAZk35PDTBGX5PCTXeG2y20iYjo_TaYJoju-oLSp47" width="143" height="249" alt="">
							</section>
							<section class="column last content">
							<h3>Materiales</h3>								
	                                    <ul>
	                                    	<li>Fierro.</li>
											<li>Fluorescentes</li>
											<li>PVC</li>
											<li>Madera</li>
											<li>Banner.</li>
											<li>Vinil.</li>
											<li>Pinturas.</li>
											<li>Entre otros según el <br> requerimiento y la necesidad.</li>
	                                    </ul>
	                            
                                	<img class="bottom" src="http://3.bp.blogspot.com/-sM9wUa0C2ro/TX1Lot71V5I/AAAAAAAAAPQ/TNJTju3eQ9I/s1600/material01.png" width="143" height="249" alt="">
							</section>
						</div>
						<style type="text/css">
							#buy{
								width: 96%;
							}
							#buy #buystrip{
								width: 100%;
							}
							#buy #buystrip div{
								width: 23%;
							}
						</style>
						<div id="buy" class="content">
							<div id="buystrip" class="grid4col roundedtop">
								<div class="column first" >
									<h3>Vinilo</h3>	
									<img class="product" style="margin:22% 0 0 -10%;" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTXHyHHQE7TCGPeOESGllsRV0qWRcAenPCFojHX4R_v9f2wjcxICg" width="190" height="140" alt="">
								</div>
								<div class="column second">	
								<h3>Fluorescentes</h3>								
									<img style="margin:0 0 0 -10%;" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQK89d2UTHWW-5ul4zz6lBw22RJkcP1kwOYyfMoSEFEXlUDpwyvBg" width="190" height="140" alt="Shop online.">
								</div>
								<div class="column third">
									<h3>Madera</h3>	
									<img style="margin:0 0 0 -10%;" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT8_CXB3zkXs5k0M1jdAvBCwFlzl1d5wahsmFyIG-dKIcbPoVi5jDyKvIE" width="190" height="140" alt="Shop online.">
								</div>
								<div class="column last">
									<h3>PVC</h3>	
									<img style="margin:0 0 0 -10%;" src="http://image.made-in-china.com/4f0j00JesTCvotbQcU/PVC-Foam-Board.jpg" width="190" height="140" alt="Shop online.">
								</div>
							</div>
						</div>
	            	</center>
				</li>


	            <li id="Proveedores">
	            	<center>
		            	<div  class="grid2col" id="whymac">
							<section class="column first content">
								<p style="padding-left:1em;">Invitamos a todos los proveedores de los materiales que usamos se sirvan enviar su propuesta ofreciendo sus mejores productos con la que nos caracteriza en los trabajos que realizamos, el área de compras estará dispuesto a contactarse</p>
								<img class="bottom" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRTxKQU4EVJP3YgdohOheVCkb1WpsF0OQBV1jSKC1JQfz-MnNK6" width="143" height="249" alt="">
							</section>
							<section class="column last content">						
								<h3>Más información: </h3>
								<p>ventas@publiciadadpunto4.com</p>
								<p>Jr.Arequipa 915-Abancay-Apurimac-Perú</p>
								<p>rpm: #021 44 44</p>
								<p>Tlf: 322934</p>
								<p>Cel: 983708020</p>
								<ul class="gf-links piped">
									<li><a title="Síguenos en facebook" target="_blank" href="http://facebook.com/punto4" class="choose"><img src="img/social/Facebook.png" height="30" width="30"></a></li>
									<li><a title="Síguenos en twitter" target="_blank" href="http://twitter.com/punto4" class="choose"><img src="img/social/twitter.png" height="30" width="30"></a></li>
									<li><a title="Síguenos en g+" target="_blank" href="http://pluss.com/punto4" class="choose"><img src="img/social/g_plus.png" height="30" width="30"></a></li>
								</ul>
							</section>
						</div>
						<div id="buy" class="content">
							<div id="buystrip" class="grid4col roundedtop">
								<div class="column first" >
									<h3>Proveedor 1</h3>	
									<img class="product" style="margin:22% 0 0 -10%;" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSCkK6qpkt9HD0YfYGFWDZnkSmjj3P9yaVbIi0aZet0O28xEbSj1Q" width="190" height="140" alt="">
								</div>
								<div class="column second">	
								<h3>Proveedor 2</h3>								
									<img style="margin:0 0 0 -10%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpdWRLk25Jny7LSX6BpvVc8sdCe890GtQwTQFthI1v1-d6II_VaZIPtA" width="190" height="140" alt="Shop online.">
								</div>
								<div class="column third">
									<h3>Proveedor 3</h3>	
									<img style="margin:0 0 0 -10%;" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRrsG0qPizQMzbvpIqrub4BzXlSHk3LaALCJV7dMNvdNeGA_8zPKg" width="190" height="140" alt="Shop online.">
								</div>
								<div class="column last">
									<h3>Proveedor 4</h3>	
									<img style="margin:0 0 0 -10%;" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTuqlzzm-xL78EF0iLxCo4crBmvfQrFzM-Ea1RimavWnlBrxh-FaA" width="190" height="140" alt="Shop online.">
								</div>
							</div>
						</div>
	            	</center>
				</li>
			</ul >
        </div>
		<!-- </div> -->

	</div><!--/main-->
	<!-- Incluimos el footer -->
	<?php include("footer.php") ?>

</body>
</html>