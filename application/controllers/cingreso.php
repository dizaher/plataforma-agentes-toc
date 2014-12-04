<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Plataforma Tecnologica TOC</title>
</head>
<body>
  
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cingreso extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('muser','',TRUE);
 }

 function index()
 {
   //El método tiene la validación de credenciales o usuarios
   $this->load->library('form_validation');

   $this->form_validation->set_rules('usuario', 'Nombre de usuario', 'trim|required|xss_clean');
   $this->form_validation->set_rules('clave', 'Contraseña', 'trim|required|xss_clean|callback_busca_usuario');

   if($this->form_validation->run() == FALSE)
   {
     //Validación de campo fallado. Usuario redirigido a la página iniciar sesión
        $data['contenido']='noticias_view';
        $this->load->view('index',$data);
   }
   else
   {
     //Go to private area
     redirect('ctoc', 'refresh');
   }

 }

 function busca_usuario($password)
 {
   //Validación de campo tuvo éxito. Validar contra la base de datos
   $username = $this->input->post('username');

   //consultar la base de datos
   $result = $this->muser->busca_user($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'cve_usuario' => $row->cve_usuario,
         'nombre' => $row->nombre,
         'perfil_cve_perfil' => $row->perfil_cve_perfil
       );
       $this->session->set_userdata('usuario', $usuario);
     }
     return TRUE;
   }
   else  { 
     $this->form_validation->set_message('busca_usuario', 'Tu usuario o contraseña es incorrecta');
     return false;
   }
 }
}
?>
</body>
</html>