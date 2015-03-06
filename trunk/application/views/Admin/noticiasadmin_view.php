<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Plataforma Tecnologica TOC</title>
    <meta name="description" content="TOC Technology Outsourcing Center">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">        

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/iconTOC.png">  

     
    <?php
foreach($css_files as $file): ?>

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?> 
</head>
<body class="metro">
  <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo site_url('ctocadmin') ?>"></a>
                <h3 id="encabezado">Ecosistema de Innovación</h3>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">                                                                                                          
                         
                        <li>Bienvenid@ <?=$this->session->userdata('usuario'); ?>!</li>                                                                                                    
                        <li><a href="<?php echo site_url('cingresoadmin/logout') ?>">Cerrar Sesión</a></li>                                
                            
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>   
    <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Administración de Noticias</h1>
        </div>
        <div class="span6">
          
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->

  <section id="career" class="container">
    <div>
    <?php echo $output; ?>
    </div>
  </section>
</body>
</html>