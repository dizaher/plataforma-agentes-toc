<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Plataforma Tecnologica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/estilosExtras.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />       
  </head>

  <body>
  <div class="container">
    <div class="row">
      <div class="span4">        
        <div id='cse' style='width: 100%;'>Loading</div>
          <script src='//www.google.com/jsapi' type='text/javascript'></script>
          <script type='text/javascript'>
          google.load('search', '1', {language: 'es', style: google.loader.themes.V2_DEFAULT});
          google.setOnLoadCallback(function() {
            var customSearchOptions = {};
            var orderByOptions = {};
            orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
            customSearchOptions['enableOrderBy'] = true;
            customSearchOptions['orderByOptions'] = orderByOptions;
            customSearchOptions['overlayResults'] = true;
            var customSearchControl =   new google.search.CustomSearchControl('011058425245224211510:upvcvmmqkte', customSearchOptions);
            customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
            var options = new google.search.DrawOptions();
            options.setAutoComplete(true);
            customSearchControl.draw('cse', options);
          }, true);
          </script>
          <link href="<?php echo base_url(); ?>css/search.css" rel="stylesheet" type="text/css" />
          <!--<form class="form-inline">
        <input type="text" class="input-small" placeholder="Email">
        <input type="password" class="input-small" placeholder="Password">              
        <button type="submit" class="btn">Sign in</button>
        </form>-->
          <hr>
      </div>
      <div class="span4" align="center"><a href="<?php echo site_url('ctoc') ?>">
          <img src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="Logo TOC"></a></div>
      <div class="span4" align="right">              
        <a href="http://www.conacyt.mx/" target="_blank"><img src="<?php echo base_url(); ?>img/logo-conacyt.png" alt="Conacyt"></a>              
        <hr>
      </div>            
    </div>
  </div>    
  <div class="container">
    <div class="row">
      <div class="span4">        
          <ul class="nav nav-pills">
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>img/iconTOC.png" alt="toc" width="13" heigth="13" ></a>               
              <ul class="dropdown-menu" >
                <li><a href="<?php echo site_url('ctoc/quienes') ?>">Quiénes Somos</a></li>
                <li><a href="<?php echo site_url('ctoc/servicios') ?>">Productos y Servicios</a></li>
                <li><a href="<?php echo site_url('ctoc/difusion') ?>">Noticias y Difusión</a></li>
                <li><a href="<?php echo site_url('ctoc/operaytec') ?>">Operaciones y Tecnologías</a></li>
                <li><a href="<?php echo site_url('ctoc/contacto') ?>">Contacto</a></li>                 
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agentes de Innovación<b class="caret"></b></a>
              <ul class="dropdown-menu">
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
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Areas<b class="caret"></b></a>
              <ul class="dropdown-menu">
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
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">I+D+i<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('ctoc/estudios') ?>">Estudios</a></li>
                  <li><a href="<?php echo site_url('ctoc/programas') ?>">Programas</a></li>
                  <li><a href="<?php echo site_url('ctoc/cadenas') ?>">Cadenas y Sectores</a></li>
                  <li><a href="<?php echo site_url('ctoc/prodserv') ?>">Productos y Servicios</a></li>
                  <li><a href="<?php echo site_url('ctoc/apoyos') ?>">Apoyos</a></li>
                  <li><a href="<?php echo site_url('ctoc/progcap') ?>">Programas de Capacitación</a></li>
                  <li><a href="<?php echo site_url('ctoc/politicas') ?>">Políticas y Marco Jurídico</a></li>
                  <li><a href="<?php echo site_url('ctoc/herramientas') ?>">Tecnológicas de Articulación</a></li>
                  <li><a href="<?php echo site_url('ctoc/clientesec') ?>">Clientes y Sectores</a></li>                          
              </ul>
            </li>
          </ul>      
      </div>
      <div class="span4">        
        <h2 class="text-center">Technology Outsourcing Center</h2>  
        <h6 class="text-center">Ecosistema de Innovación</h6>
      </div>
      <div class="span4">      
         <ul class="nav nav-pills">
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilares<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('ctoc/mercado') ?>">Mercado</a></li>
                    <li><a href="<?php echo site_url('ctoc/marco') ?>">Marco Regulatorio</a></li>
                    <li><a href="<?php echo site_url('ctoc/capihumano') ?>">Capital Humano</a></li>
                    <li><a href="<?php echo site_url('ctoc/finanincu') ?>">FIA</a></li>
                    <li><a href="<?php echo site_url('ctoc/forta') ?>">Innovación Empresarial</a></li>
                    <li><a href="<?php echo site_url('ctoc/genconocimiento') ?>">Conocimiento estratégico</a></li>                                                 
                </ul>
            </li>
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Premisas<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('ctoc/innovacion') ?>">Estrategia de Innovación</a></li>
                    <li><a href="<?php echo site_url('ctoc/areasimpacto') ?>">Áreas de Impacto</a></li>
                    <li><a href="<?php echo site_url('ctoc/mecanismo') ?>">Coordinación entre Agentes</a></li>
                    <li><a href="<?php echo site_url('ctoc/cuentas') ?>">Rendición de Cuentas</a></li>                                                     
                </ul>
            </li>
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Necesidades a Satisfacer<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('ctoc/nichos') ?>">Nichos de Mercado</a></li>
                    <li><a href="<?php echo site_url('ctoc/promocion') ?>">Apoyo I+D+i</a></li>
                    <li><a href="<?php echo site_url('ctoc/financiamiento') ?>">Financiamiento</a></li>
                    <li><a href="<?php echo site_url('ctoc/capital') ?>">Capital Humano</a></li>
                    <li><a href="<?php echo site_url('ctoc/regularizacion') ?>">Legislación y Normatividad</a></li>                                                  
                </ul>
            </li>
            <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesa de Negocios<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('ctoc/nichos') ?>">Espacio para Agentes</a></li>
                    <li><a href="<?php echo site_url('ctoc/promocion') ?>">Espacios Publicitarios</a></li>
                    <li><a href="<?php echo site_url('ctoc/financiamiento') ?>">Concreción o cierre de actividad</a></li>
                    <li><a href="<?php echo site_url('ctoc/capital') ?>">Gestión Financiera a Proyecto</a></li>
                    <li><a href="<?php echo site_url('ctoc/regularizacion') ?>">Promoción de proyectos</a></li>                                                  
                    <li><a href="<?php echo site_url('ctoc/regularizacion') ?>">Información especializada</a></li> 
                </ul>
            </li>-->         
          </ul> 
      </div>
    </div>
  </div>
  <div class="container">
    <?php $this->load->view($contenido) ?>
  </div>
  <!-- FOOTER -->
  <footer class="piePagina">    
    <hr>
    <img src="<?php echo base_url(); ?>img/logos2.png" alt="CIE" width="500px" height="10px">    
    <br>
    &copy; Copyright 2013 Todos los derechos Reservados. 
        <address>
        <strong>TOC Technology Outsourcing Center</strong><br>
        Calle México # 34,Colonia Pumar, Xalapa , Veracruz, México    
        <abbr title="Teléfono">Tel:</abbr> +052 (228) 8419919<br>
        www.tocveracruz.com.mx, RFC: TTO0804297VA<br>
        <a href="mailto:#">contacto@tocveracruz.com.mx</a>
        </address>
                  
  </footer>
  </body>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>js/jquery.js"></script>   
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
</html>
