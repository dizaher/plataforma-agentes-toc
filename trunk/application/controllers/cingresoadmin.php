<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Plataforma Tecnologica TOC</title>
</head>
<body>
  
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cingresoadmin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('muser','',TRUE);
   $this->load->library("encrypt");
 }

 function index()
 {
   //El método tiene la validación de credenciales o usuarios
   $this->load->library('form_validation');

   $this->form_validation->set_rules('correo', 'Nombre de usuario','trim|required|xss_clean');
   $this->form_validation->set_rules('clave', 'Contraseña', 'trim|required|xss_clean|callback_busca_usuario');

   if($this->form_validation->run() == FALSE)
   {
     //Validación de campo fallado. Usuario redirigido a la página iniciar sesión
        $data['contenido']='ingreso_view';
        $this->load->view('index',$data);
   }
   else
   {                           
    redirect('ctocadmin/administracion');  
   }

 }

 function busca_usuario($clave)
 {
   //Validación de campo tuvo éxito. Validar contra la base de datos
   $usuario = $this->input->post('correo');        

   //consultar la base de datos
   $result = $this->muser->busca_user($usuario);

   if($result)
   {      
      foreach($result as $row)
      {    
               
        if ($this->encrypt->decode($row->atu_clave) == $clave) {          
          return TRUE;  
        }
        else{
          $this->form_validation->set_message('busca_usuario', 'Tu usuario o contraseña es incorrecta');                  
          return false;

        }
      }                
    }
    else{
      $this->form_validation->set_message('busca_usuario', 'El usuario no se encuentra en la base de datos');
          return false;
    }   
 }
}
?>
</body>
</html>