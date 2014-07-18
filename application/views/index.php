<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Plataforma Tecnologica</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>css/estilosExtras.css" rel="stylesheet" type="text/css" />
  	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	<script ></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span1">
				<a href="<?php echo site_url('toc_controller') ?>">
				<img src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="Logo TOC"></a>										
			</div>
			<div class="span10">
				<h2>Technology Outsourcing Center</h2>	
				<h6>Ecosistema de Innovación</h6>			
			</div>			
			<div class="span1">
				<small>Apoyado</small>	
				<a href="http://www.conacyt.mx/" target="_blank"><img src="http://fca.uaq.mx/img/logo-conacyt.png" alt="Conacyt"></a>
			</div>
			
		</div>			
	</div>
	<div class="container">
		<div class="row">
			<div class="span9">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container" style="width: auto;">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>					
							<div class="nav-collapse">
								<ul class="nav">							
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>img/simbolo_toc.png" alt="toc" width="14" heigth="14" ></a>								
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('toc_controller/quienes') ?>">Quiénes Somos</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/servicios') ?>">Servicios</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/difusion') ?>">Difusión</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/operaytec') ?>">Operaciones Y tecnologías</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/contacto') ?>">Contacto</a></li>									
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Agentes de Innovación<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo site_url('toc_controller/empresas') ?>">Empresas</a></li>											
						                    <li><a href="<?php echo site_url('toc_controller/ies') ?>">IES</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/centros') ?>">Centros de Investigación</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/nivelesgobierno') ?>">Niveles de Gobierno</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/poderesgobierno') ?>">Poderes de Gobierno</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/finan') ?>">FIA</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/orgciviles') ?>">Organizaciones Civiles</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/sociedad') ?>">Sociedad en General</a></li>									
										</ul>
									</li>
									<li class="dropdown">
					                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Areas<b class="caret"></b></a>
						                <ul class="dropdown-menu">
						                    <li><a href="<?php echo site_url('toc_controller/agua') ?>">Agua</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/energia') ?>">Energía</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/alimentacion') ?>">Alimentación</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/transporte') ?>">Transporte</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/vivienda') ?>">Vivienda</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/seguridad') ?>">Seguridad</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/residuos') ?>">Residuos Sólidos Urbanos</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/salud') ?>">Salud</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/educacion') ?>">Educación</a></li>			                    
						                </ul>
					            	</li>
					            	<li class="dropdown">
					                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Información<b class="caret"></b></a>
						                <ul class="dropdown-menu">
						                    <li><a href="<?php echo site_url('toc_controller/estudios') ?>">Estudios</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/programas') ?>">Programas</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/cadenas') ?>">Cadenas y Sectores</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/prodserv') ?>">Productos y Servicios</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/apoyos') ?>">Apoyos</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/progcap') ?>">Programas de Capacitación</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/politicas') ?>">Políticas y Marco Jurídico</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/herramientas') ?>">Tecnológicas de Articulación</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/clientesec') ?>">Clientes y Sectores</a></li>			                    
						                </ul>
					            	</li>
					            	<li class="dropdown">
					                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilares<b class="caret"></b></a>
						                <ul class="dropdown-menu">
						                    <li><a href="<?php echo site_url('toc_controller/mercado') ?>">Mercado</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/marco') ?>">Marco Regulatorio</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/capihumano') ?>">Capital Humano</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/finanincu') ?>">FIA</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/forta') ?>">Innovación Empresarial</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/genconocimiento') ?>">Conocimiento estratégico</a></li>				                   		                   
						                </ul>
					            	</li>
					            	<li class="dropdown">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Premisas<b class="caret"></b></a>
						                <ul class="dropdown-menu">
						                    <li><a href="<?php echo site_url('toc_controller/innovacion') ?>">Estrategia de Innovación</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/areasimpacto') ?>">Áreas de Impacto</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/mecanismo') ?>">Coordinación entre Agentes</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/cuentas') ?>">Rendición de Cuentas</a></li>				                    			                   
						                </ul>
					           		</li>
					           		<li class="dropdown">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Necesidades a Satisfacer<b class="caret"></b></a>
						                <ul class="dropdown-menu">
						                    <li><a href="<?php echo site_url('toc_controller/nichos') ?>">Nichos de Mercado</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/promocion') ?>">Apoyo I+D+i</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/financiamiento') ?>">Financiamiento</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/capital') ?>">Capital Humano</a></li>
						                    <li><a href="<?php echo site_url('toc_controller/regularizacion') ?>">Legislación y Normatividad</a></li>				                   			                   
						                </ul>
						            </li>				            
								</ul>										
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar-inner -->
				</div>
			</div>
			<div class="span3">
				<script>
				  (function() {
				    var cx = '011058425245224211510:egqlma4imlq';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				        '//www.google.com/cse/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
				<div class="gcse-search"></div>
			</div>
		</div>
	</div>				           			            			           			            			          
	<div class="container">
		<?php $this->load->view($contenido) ?>
	</div>
		<footer class="piePagina">
			&copy; Copyright 2013 Todos los derechos Reservados. <img src="<?php echo base_url(); ?>img/mano-toc1.png" alt="Mano" width="30px" heigth="30px">
			    <address>
			    <strong>TOC Technology Outsourcing Center</strong><br>
			    Calle México # 34,Colonia Pumar, Xalapa , Veracruz, México    
			    <abbr title="Teléfono">Tel:</abbr> +052 (228) 8419919<br>
			    www.tocveracruz.com.mx, RFC: TTO0804297VA<br>
			    <a href="mailto:#">contacto@tocveracruz.com.mx</a>
			    </address>
			    			    
		</footer>
	</div> <!-- /container -->	
	<script src="<?php echo base_url(); ?>js/jquery.js"></script>		
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>