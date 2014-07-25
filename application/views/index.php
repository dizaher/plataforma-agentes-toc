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
        <div class="span1">
          <a href="<?php echo site_url('toc_controller') ?>">
          <img src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="Logo TOC"></a>                    
        </div>
        <div class="span10">
          <h2>Technology Outsourcing Center</h2>  
          <h6>Ecosistema de Innovación</h6>     
        </div>      
        <div class="span1" align="center">
          <small class="center">Apoyado</small>          
          <a href="http://www.conacyt.mx/" target="_blank"><img src="http://fca.uaq.mx/img/logo-conacyt.png" alt="Conacyt"></a>
        </div>
        
      </div>      
    </div>


    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>            
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">                
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>img/simbolo_toc_blanco.png" alt="toc" width="14" heigth="14" ></a>               
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo site_url('toc_controller/quienes') ?>">Quiénes Somos</a></li>
                                <li><a href="<?php echo site_url('toc_controller/servicios') ?>">Productos y Servicios</a></li>
                                <li><a href="<?php echo site_url('toc_controller/difusion') ?>">Noticias y Difusión</a></li>
                                <li><a href="<?php echo site_url('toc_controller/operaytec') ?>">Operaciones y Tecnologías</a></li>
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
                                <li><a href="<?php echo site_url('toc_controller/finan') ?>">Financieras, Incubadoras y Aceleradoras</a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">I+D+i<b class="caret"></b></a>
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesa de Negocios<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('toc_controller/nichos') ?>">Espacio para Agentes</a></li>
                                <li><a href="<?php echo site_url('toc_controller/promocion') ?>">Espacios Publicitarios</a></li>
                                <li><a href="<?php echo site_url('toc_controller/financiamiento') ?>">Concreción o cierre de actividad</a></li>
                                <li><a href="<?php echo site_url('toc_controller/capital') ?>">Gestión Financiera a Proyecto</a></li>
                                <li><a href="<?php echo site_url('toc_controller/regularizacion') ?>">Promoción de proyectos</a></li>                                                  
                                <li><a href="<?php echo site_url('toc_controller/regularizacion') ?>">Información especializada</a></li> 
                            </ul>
                        </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

<?php $this->load->view($contenido) ?>

<!-- FOOTER -->
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

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>   
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>    
    
  </body>
</html>
