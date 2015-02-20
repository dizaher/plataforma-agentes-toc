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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sl-slide.css">

    <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/iconTOC.png">   
    
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo site_url('ctoc') ?>"></a>
                <h3 id="encabezado">TOC Technology Outsourcing Center <br>ECOSISTEMA</h4>
            </div>
        </div>
    </header>   
    <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Ingreso Administración</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>            
            <li class="active">Career</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->
  <section id="registration-page" class="container">
    <?php echo form_open('cingresoadmin' , 'class="center"'); ?>
    <?php echo validation_errors('<button class="warning">', '</button><br>'); ?>
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- Username -->
          <div class="controls">
            <label>Correo electrónico</label>
            <input type="text" id="email" name="correo" class="input-xlarge" value="<?php echo set_value('correo'); ?>">            
          </div>
        </div>      

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <label>Contraseña</label>                        
            <input type="password" id="password" class="input-xlarge" name="clave">            
          </div>
        </div>
        

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">Iniciar sesión</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>
  <!-- /#registration-page -->   
                                                                          
   <!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <!--/Copyright                    
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Formulario de Ingreso</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">            
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <!--<a href="#">Forgot your password?</a>-->
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="<?php echo base_url(); ?>js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>