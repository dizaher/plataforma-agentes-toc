<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctoc extends CI_Controller {

	function __construct()
	  {

	    parent::__construct();
	    $this->load->helper('url');    
	  }

	 public function index()
	 {
	  $data['contenido']='noticias_view';
	  $this->load->view('index',$data); 
	 }
	 /////////////////////////////////////////////////////////////////////
	 public function cie()
	 {
	  $data['contenido']='cie_view';
	  $this->load->view('index',$data); 
	 }
	 /////////////////////////////////////////////////////////////////////
	 public function interes()
	 {
	  $data['contenido']='sitios_view';
	  $this->load->view('index',$data); 
	 }/////////////////////////////////////////////////////////////////////////////////////
	 public function quienes()
	 {
	  $data['contenido']='Principal/quienesomos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function servicios()
	 {
	  $data['contenido']='Principal/servicios_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function difusion()
	 {
	  $data['contenido']='Principal/difusion_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function operaytec()
	 {
	  $data['contenido']='Principal/operaytec_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function contacto()
	 {
	  $data['contenido']='Principal/contacto_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ////////////////////////////////////////////////////////////////////////////////////////
	 public function centros()
	 {
	  $data['contenido']='Agentes/centros_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function empresas()
	 {
	  $data['contenido']='Agentes/empresas_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function finan()
	 {
	  $data['contenido']='Agentes/finan_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function ies()
	 {
	  $data['contenido']='Agentes/ies_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function nivelesgobierno()
	 {
	  $data['contenido']='Agentes/niveles_gobierno_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function orgciviles()
	 {
	  $data['contenido']='Agentes/orgciviles_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function poderesgobierno()
	 {
	  $data['contenido']='Agentes/poderes_gobierno_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function sociedad()
	 {
	  $data['contenido']='Agentes/sociedad_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	
	 /////////////////////////////////////////////////////////////////////////////////////////// 
	 public function agua()
	 {
	  $data['contenido']='Areas/agua_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	  public function alimentacion()
	 {
	  $data['contenido']='Areas/alimentacion_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function educacion()
	 {
	  $data['contenido']='Areas/educacion_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function energia()
	 {
	  $data['contenido']='Areas/energia_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	 
	 public function residuos()
	 {
	  $data['contenido']='Areas/residuos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function salud()
	 {
	  $data['contenido']='Areas/salud_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function seguridad()
	 {
	  $data['contenido']='Areas/seguridad_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function transporte()
	 {
	  $data['contenido']='Areas/transporte_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function vivienda()
	 {
	  $data['contenido']='Areas/vivienda_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ///////////////////////////////////////////////////////////////////////////////////////////
	 public function apoyos()
	 {
	  $data['contenido']='Informacion/ApoyosFIA_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function cadenas()
	 {
	  $data['contenido']='Informacion/CadenasProd_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function clientesec()
	 {
	  $data['contenido']='Informacion/ClientesSectores_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	 
	 public function estudios()
	 {
	  $data['contenido']='Informacion/Estudios_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function herramientas()
	 {
	  $data['contenido']='Informacion/Herramientas_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function politicas()
	 {
	  $data['contenido']='Informacion/Politicas_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function prodserv()
	 {
	  $data['contenido']='Informacion/ProdServ_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function progcap()
	 {
	  $data['contenido']='Informacion/ProgCap_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function programas()
	 {
	  $data['contenido']='Informacion/Programas_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	 
	 ///////////////////////////////////////////////////////////////////////////////////	 
	 public function capihumano()
	 {
	  $data['contenido']='Pilares/CapitalHumano_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function finanincu()
	 {
	  $data['contenido']='Pilares/FinanIncuAce_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function forta()
	 {
	  $data['contenido']='Pilares/FortalecimientoIE_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function genconocimiento()
	 {
	  $data['contenido']='Pilares/GeneracionConocimiento_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function marco()
	 {
	  $data['contenido']='Pilares/MarcoRegulatorio_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function mercado()
	 {
	  $data['contenido']='Pilares/MercadoNI_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 //////////////////////////////////////////////////////////////////////////////////////
	 public function areasimpacto()
	 {
	  $data['contenido']='Premisas/AreasImpacto_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function innovacion()
	 {
	  $data['contenido']='Premisas/InnovacionEstrategia_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function mecanismo()
	 {
	  $data['contenido']='Premisas/MecanismoCoordinacion_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function cuentas()
	 {
	  $data['contenido']='Premisas/RendicionCuentas_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ////////////////////////////////////////////////////////////////////////////////////
	 public function capital()
	 {
	  $data['contenido']='Necesidades/capital_humano_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function financiamiento()
	 {
	  $data['contenido']='Necesidades/Financiamiento_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	
	 public function nichos()
	 {
	  $data['contenido']='Necesidades/InformacionNichos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function promocion()
	 {
	  $data['contenido']='Necesidades/PromocionIDI_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function regularizacion()
	 {
	  $data['contenido']='Necesidades/Regularizacion_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ////////////////////////////////////////////////////////////////////////////////////
	 public function principal_notice(){
	 	$data['contenido'] = 'Noticias/principal_notice_view';
	 	$this->load->view('index',$data);
	 }
	 public function second_notice(){
	 	$data['contenido'] = 'Noticias/second_notice_view';
	 	$this->load->view('index',$data);
	 }
	 public function third_notice(){
	 	$data['contenido'] = 'Noticias/third_notice_view';
	 	$this->load->view('index',$data);
	 }
	 public function fourth_notice(){
	 	$data['contenido'] = 'Noticias/fourth_notice_view';
	 	$this->load->view('index',$data);
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */