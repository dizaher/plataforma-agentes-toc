<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctocadmin extends CI_Controller {

	function __construct()
	  {
	 
	    parent::__construct();
	 
	    /* Cargamos la base de datos */
	    $this->load->database();
	 
	    /* Cargamos la libreria*/
	    $this->load->library('grocery_crud');
	 
	    /* Añadimos el helper al controlador */
	    $this->load->helper('url');
	  }

	 public function index()
	 {
	  
	  $this->load->view('Admin/index'); 
	 }
	 /////////////////////////////////////////////////////////////////////////////////////
	 //////////////////////FUNCIONALIDADES ///////////////////////////////////////////
	 /////////////////////////////////////////////////////////////////////////////////////

	 function administracion()
	  {
	    try{

	    /* Creamos el objeto */
	    $crud = new grocery_CRUD();

	    /* Seleccionamos el tema */
	    $crud->set_theme('twitter-bootstrap');

	    /* Seleccionmos el nombre de la tabla de nuestra base de datos*/
	    $crud->set_table('at_noticias');

	    /* Le asignamos un nombre */
	    $crud->set_subject('Noticias');

	    /* Asignamos el idioma español */
	    $crud->set_language('spanish');
	    $crud->display_as('atu_nombre','Titulo de la noticia');
	    $crud->display_as('atu_descripcion','Redacción de la noticia');
	    $crud->display_as('atu_imagen','Insertar imagen');
	    $crud->display_as('atu_fecha','Fecha');
	    $crud->field_type('fruits','multiselect',
                   array( "1"  => "banana", "2" => "orange", "3" => "apple"));
	    /* Asignamos el directorio de la subida de imagenes */
	    $crud->set_field_upload('atu_imagen','img/Noticias');
	    
	    /* Aqui le decimos a grocery que estos campos son obligatorios */
	    $crud->required_fields(
	      'atu_idnotice',
	      'atu_nombre',
	      'atu_descripcion',
	      'atu_imagen'      ,
	      'atu_fecha'
	    );

	    /* Aqui le indicamos que campos deseamos mostrar */
	    $crud->columns(
	      'atu_nombre',
	      'atu_descripcion',
	      'atu_imagen'      ,
	      'atu_fecha'
	    );

	    /* Generamos la tabla */
	    $output = $crud->render();

	    /* La cargamos en la vista situada en
	    /applications/views/productos/administracion.php */
	    $this->load->view('Admin/noticiasadmin_view', $output);

	    }catch(Exception $e){
	      /* Si algo sale mal cachamos el error y lo mostramos */
	      show_error($e->getMessage().' --- '.$e->getTraceAsString());
	    }
	  }

	 public function ingreso()
	 {
	  $data['contenido']='ingreso_view';
	  $this->load->view('index',$data); 
	 }	
	 
	 /////////////////////////////////////////////////////////////////////////////////////
	 //////////////////////SITIOS DE INTERES ///////////////////////////////////////////
	 /////////////////////////////////////////////////////////////////////////////////////
	 public function interes()
	 {
	  $data['contenido']='sitios_view';
	  if($this->session->userdata('usuario'))//si hay sesion iniciada 
	   {	                           
         $this->load->view('session_view',$data);   	     
	   }
	   else//si no hay sesion iniciada
	   {
	  	$this->load->view('index',$data); 
	  }
	 }	
	
}

/* End of file ctoc.php */
/* Location: ./application/controllers/ctoc.php */