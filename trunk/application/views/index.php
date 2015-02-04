<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Plataforma Tecnologica TOC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="REINTECH Recycled, Innovation and Technology">
  <meta name="author" content="">

  <!-- Le styles -->  
  <link href="<?php echo base_url(); ?>css/estilosExtras.css" rel="stylesheet">    
  <link href="<?php echo base_url(); ?>css/metro-bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/metro-bootstrap-responsive.css" rel="stylesheet">  
    <link href="<?php echo base_url(); ?>css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>min/iconFont.min.css">  


    <!-- Load JavaScript Libraries -->
    <script src="<?php echo base_url(); ?>js/jquery-2.0.0.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>    
    <script src="<?php echo base_url(); ?>js/jquery.widget.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url(); ?>js/prettify.js"></script>
    <script src="<?php echo base_url(); ?>js/holder/holder.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="<?php echo base_url(); ?>js/load-metro.js"></script>
    
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 

    <!-- Local JavaScript -->   
    <script src="<?php echo base_url(); ?>min/metro.min.js"></script>    
    <script src="<?php echo base_url(); ?>min/metro-bootstrap-responsive.min.css"></script>

    <style>
        .container {
            width: 1040px;
        }
    </style>    
</head>
<body class="metro">
  <div class="container">
        
            
        <header class="margin20 nrm nlm">
            <div class="row">
                <div class="span8 place-left">
                    <a href="<?php echo site_url('ctoc') ?>">
                    <img src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="TOC" style="float:left; margin-right:10px;"></a>                    
                
                    <h2 >TOC Technology Outsourcing Center</h2>                 
                    <h5 >Ecosistema de innovación</h6>
                </div>
                <div class="span4 place-right">
                    
                    <div id='cse' style='width: 100%;'>Cargando...</div>
                    <script src='//www.google.com/jsapi' type='text/javascript'></script>
                    <script type='text/javascript'>
                    google.load('search', '1', {language: 'es', style: google.loader.themes.DEFAULT});
                    google.setOnLoadCallback(function() {
                      var customSearchOptions = {};
                      var orderByOptions = {};
                      orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                      customSearchOptions['enableOrderBy'] = true;
                      customSearchOptions['orderByOptions'] = orderByOptions;
                      customSearchOptions['overlayResults'] = true;
                      var customSearchControl =   new google.search.CustomSearchControl('011058425245224211510:byt-fahik08', customSearchOptions);
                      customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                      var options = new google.search.DrawOptions();
                      options.setAutoComplete(true);
                      customSearchControl.draw('cse', options);
                    }, true);
                    </script>
                    <link rel='stylesheet' href='<?php echo base_url(); ?>css/default.css' type='text/css'/>
                               
                </div>
                                                         
            </div>
        </header>       
            <div class="grid fluid">
                <div class="row">
                    <div class="span12">
                        <!--MENU DE NAVEGACION-->
                        <nav class="navigation-bar light">
                            <div class="navigation-bar-content">
                            <a href="#" class="element"> <img src="<?php echo base_url(); ?>img/iconTOC.png" alt="" >    </a>                       
                            <a class="pull-menu" href="#"></a>                    
                                <ul class="element-menu drop-down">                        
                                    <li>
                                        <a class="dropdown-toggle" href="#">Nosotros</a>                              
                                        <ul class="dropdown-menu" data-role="dropdown">
                                            <li><a href="<?php echo site_url('ctoc/quienes') ?>">Quiénes Somos</a></li>                                            
                                            <li><a href="<?php echo site_url('ctoc/difusion') ?>">Noticias y Difusión</a></li>                                            
                                            <li><a href="<?php echo site_url('ctoc/contacto') ?>">Contacto</a></li> 
                                            <li><a href="<?php echo site_url('ctoc/cie') ?>">Aliados</a></li>                                  
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-toggle" href="#">Productos y Servicios<b class="caret"></b></a>
                                        <ul class="dropdown-menu" data-role="dropdown">
                                            <li><a href="<?php echo site_url('ctoc/prodserv') ?>">Ecotecnologías</a></li>
                                            <li><a href="<?php echo site_url('ctoc/asesorias') ?>">Asesorías</a></li>
                                            <li><a href="<?php echo site_url('ctoc/progcap') ?>">Programas de Capacitación</a></li>
                                                                                                                                                                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-toggle" href="#">I+D+i<b class="caret"></b></a>
                                        <ul class="dropdown-menu" data-role="dropdown">
                                            <li><a href="<?php echo site_url('ctoc/proyectos') ?>">Proyectos</a></li>
                                            <li><a href="<?php echo site_url('ctoc/estudios') ?>">Estudios</a></li>                                            
                                            <li><a href="<?php echo site_url('ctoc/cadenas') ?>">Cadenas y Sectores</a></li>                                           
                                            <li><a href="<?php echo site_url('ctoc/apoyos') ?>">Apoyos</a></li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">Áreas<b class="caret"></b></a>
                                                <ul class="dropdown-menu" data-role="dropdown">
                                                    <li><a href="<?php echo site_url('ctoc/agua') ?>">Agua</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/energia') ?>">Energía</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/alimentacion') ?>">Alimentación</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/transporte') ?>">Transporte</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/vivienda') ?>">Vivienda</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/seguridad') ?>">Seguridad</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/residuos') ?>">Residuos Sólidos Urbanos</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/salud') ?>">Salud</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/educacion') ?>">Educación</a></li>                                                                
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">Agentes de Innovación</a>
                                                <ul class="dropdown-menu" data-role="dropdown">
                                                    <li><a href="<?php echo site_url('ctoc/empresas') ?>">Empresas</a></li>                     
                                                    <li><a href="<?php echo site_url('ctoc/ies') ?>">IES</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/centros') ?>">Centros de Investigación</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/nivelesgobierno') ?>">Niveles de Gobierno</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/poderesgobierno') ?>">Poderes de Gobierno</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/finan') ?>">Financieras, Incubadoras y Aceleradoras</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/orgciviles') ?>">Organizaciones Civiles</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/sociedad') ?>">Sociedad en General</a></li>                 
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">Pilares<b class="caret"></b></a>
                                                <ul class="dropdown-menu" data-role="dropdown">
                                                    <li><a href="<?php echo site_url('ctoc/mercado') ?>">Mercado</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/marco') ?>">Marco Regulatorio</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/capihumano') ?>">Capital Humano</a></li>                                           
                                                    <li><a href="<?php echo site_url('ctoc/forta') ?>">Innovación Empresarial</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/genconocimiento') ?>">Conocimiento estratégico</a></li>                                                                                                       
                                                </ul>
                                                </li>
                                            
                                            <li>
                                            <a class="dropdown-toggle" href="#">Premisas<b class="caret"></b></a>
                                                <ul class="dropdown-menu" data-role="dropdown">                    
                                                    <li><a href="<?php echo site_url('ctoc/innovacion') ?>">Estrategia de Innovación</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/areasimpacto') ?>">Áreas de Impacto</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/mecanismo') ?>">Coordinación entre Agentes</a></li>
                                                    <li><a href="<?php echo site_url('ctoc/cuentas') ?>">Rendición de Cuentas</a></li>                                                        
                                                </ul>
                                            </li>                                                                                                                                                                                                                                                                                                      
                                        </ul>
                                    </li>
                                    
                                                                                                                                                                                
                                     
                                    <li><a href="<?php echo site_url('ctoc/interes') ?>">Sitios de interés</a></li>                                                                       
                                </ul> 
                                <div class="element place-right">
                                    <a class="dropdown-toggle" href="#">
                                    <span class="icon-cog"></span>
                                    </a>
                                    <ul class="dropdown-menu place-right" data-role="dropdown">
                                    <li><a href="<?php echo site_url('ctoc/registro') ?>">Registro</a></li>
                                    <li><a href="<?php echo site_url('ctoc/ingreso') ?>">Ingresar</a></li>                                                                
                                    </ul>
                                </div>                                                
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        
  </div> 
                                                                         
  <div class="container">
  <?php $this->load->view($contenido) ?>
  </div>
    <div class="container">
        <div class="row">
            <center><img src="<?php echo base_url(); ?>img/logos2.png" alt="CIE" width="500px" height="10px" align="center"></center>        
            <footer class="piePagina">                  
                &copy; Copyright 2013 Todos los derechos Reservados. 
                <address>
                <strong>TOC Technology Outsourcing Center</strong><br>
                Calle México # 34,Colonia Pumar, Xalapa , Veracruz, México    
                <abbr title="Teléfono">Tel:</abbr> +052 (228) 8419919<br>
                www.tocveracruz.com.mx, RFC: TTO0804297VA<br>
                <a href="mailto:#">contacto@tocveracruz.com.mx</a>
                </address>
            <center><small class="place-center">Apoyado por</small><br><a href="http://www.conacyt.mx/" title="" target="_new">
            <img align="center" src="http://www.coepesoaxaca.org.mx/wp-content/uploads/2012/03/conacyta.jpg" width="50px"></a>
            </center>
            </footer>            
        </div>
  </div> <!-- /container -->  
</body>
</html>