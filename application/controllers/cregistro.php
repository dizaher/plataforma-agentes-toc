<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Plataforma Tecnologica TOC</title>
</head>
<body>
  
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cregistro extends CI_Controller {

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

    $this->form_validation->set_rules('nom','Nombre','required|trim|xss_clean');        
    $this->form_validation->set_rules('ape','Apellidos','required|trim|xss_clean');
    $this->form_validation->set_rules('correo','Correo','required|valid_email|trim|xss_clean|callback_check_database');
    $this->form_validation->set_rules('contra','Contraseña','required|trim|xss_clean|min_length[5]');
    $this->form_validation->set_rules('contra2','Repetir contraseña','required|trim|xss_clean|min_length[5]|matches[contra]');                
    

    if($this->form_validation->run() == FALSE)
     {
       //Validación de campo fallado. Usuario redirigido a la página iniciar sesión
        $data['contenido']='registro_view';
        $this->load->view('index',$data);
     }
     else
     {
        $nombre = $this->input->post('nom');
        $apellido = $this->input->post('ape');
        $correo_e = $this->input->post('correo');
        $p = $this->input->post('contra');         
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
        $result = $this->muser->new_user($nombre,$apellido,$correo_e,$p);//SE GUARDA EL USUARIO EN LA BASE DE DATOS 

        //***********************************************
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'mail.tocveracruz.com.mx',
        'smtp_port' => 25,
        'smtp_user' => 'dzacarias@tocveracruz.com.mx', // change it to yours
        'smtp_pass' => 'wWeQ]T5B}(bo', // change it to yours
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
      );
              
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('dzacarias@tocveracruz.com.mx'); // change it to yours
            $this->email->to($correo_e);// change it to yours
            $this->email->subject('Registro correcto');
            $this->email->message('Gracias por registrarte');
            if($this->email->send())
           {
            echo 'Email sent.';
           }
           else
          {
           show_error($this->email->print_debugger());
          }
        //**********************************************
        if ($result) {
          $this->session->set_userdata('usuario', $nombre);               
          $data['contenido']='noticias_view';
          $this->load->view('session_view',$data);
        }
        else{
          //Validación de registro fallada
          $data['contenido']='registro_view';
          $this->load->view('index',$data);
        }
        
     }

 }

 function check_database($correo)
 {
    //consultar la base de datos
   $result = $this->muser->consulta_user($correo);

   if($result)
   {
      return TRUE;      
   }
   else  { 
     $this->form_validation->set_message('check_database', 'La cuenta de correo ya se encuentra en uso');
     return FALSE;
   }
 }

 function logout()
 {     
    $this->session->sess_destroy();
    $data['contenido']='noticias_view';
    $this->load->view('index',$data);
 }
}
?>
</body>
</html>