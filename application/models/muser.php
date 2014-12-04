<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Muser extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}
	
	//realizamos la inserción de los datos y devolvemos el 
	//resultado al controlador para envíar el correo si todo ha ido bien
	function new_user($nombre,$apellido,$correo_e,$contrasenia)
	{
       $data = array(
            'atu_nombre' => $nombre,
            'atu_apellidos' => $apellido,
            'atu_correo' => $correo_e,
            'atu_clave' => $contrasenia
        );
       	return $this->db->insert('at_users', $data);	
    }

    function consulta_user($correo)
	 {
	   	$query = $this->db->get_where('at_users',array('atu_correo' => $correo));
        if($query->num_rows() > 0 )
        {
            return false;
        }
        else{
        	return true;
        }
	 }

     function busca_user($username, $password)
     {
       $this -> db -> select('cve_usuario, nombre, clave, perfil_cve_perfil');
       $this -> db -> from('usuarios');
       $this -> db -> where('nombre', $username);
       $this -> db -> where('clave', $password);
       $this -> db -> limit(1);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {    
         return $query->result();
       }
       else
       {
         return false;
       }
     }
}