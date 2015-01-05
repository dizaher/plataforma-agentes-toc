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
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />

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
            
                <div class="span4 ">
                    <small class="place-left">Apoyado</small><br><a href="http://www.conacyt.mx/" title="" target="_new">
                    <img align="left" src="http://www.coepesoaxaca.org.mx/wp-content/uploads/2012/03/conacyta.jpg" width="50px"></a>    
                   <br><br>
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
                <div class="span2 place-right">
                    <a href="<?php echo site_url('ctocadmin') ?>">
                    <img src="<?php echo base_url(); ?>img/Logo_TOC.png" alt="TOC"></a><br>                    
                </div>
                <div class="span6 place-right">
                    <h2 class="text-right">TOC</h2>
                    <h3 class="text-right">Technology Outsourcing Center</h3>
                    <h5 class="text-right">Ecosistema de innovación</h6>
                </div>                                         
            </div>
        </header>       
            <div class="grid fluid">
                <div class="row">
                    <div class="span3"></div>
                    <div class="span6">
                        <h2>Administración</h2>
                        <div class="panel">
                            <div class="panel-header">
                                Iniciar Sesión
                            </div>
                            <div class="panel-content">
                                <?php echo form_open('cingresoadmin'); ?>

                                <?php echo validation_errors('<button class="warning">', '</button><br>'); ?>                     
                                
                                <label>Correo electrónico o id de usuario</label>                                           
                                <div class="input-control text"><input type="text" name="correo" value="<?php echo set_value('correo'); ?>">
                                <button class="btn-clear"></button></div> 
                                <label>Contraseña</label>
                                <div class="input-control password">
                                <input type="password" name="clave">
                                <button class="btn-reveal"></button></div> 
                                
                                <div class="form-actions">
                                    <button class="button primary">Iniciar sesión</button> 
                                    <button class="button" type="reset">Cancelar</button> 
                                </div>
                                </form>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        
  </div> 
                                                                          
    <div class="container">
        <div class="row">
  <center>
    <img src="<?php echo base_url(); ?>img/logos2.png" alt="CIE" width="500px" height="10px" align="center"></center>        
    <footer class="piePagina">                  
    &copy; Copyright 2013 Todos los derechos Reservados. 
        <address>
        <strong>TOC Technology Outsourcing Center</strong><br>
        Calle México # 34,Colonia Pumar, Xalapa , Veracruz, México    
        <abbr title="Teléfono">Tel:</abbr> +052 (228) 8419919<br>
        www.tocveracruz.com.mx, RFC: TTO0804297VA<br>
        <a href="mailto:#">contacto@tocveracruz.com.mx</a>
        </address>

        
    </footer>
        </div>
  </div> <!-- /container -->  
</body>
</html>