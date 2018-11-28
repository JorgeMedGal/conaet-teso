<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getInfoByMail($userMail){
		$this->db->select('idEmpleado,nombreEmpleado,aPaternoEmpleado,aMaternoEmpleado,encargadoArea,password_empleado,correoEmpleado,imagenEmpleado,idArea,nombreArea,idCargo,nombreCargo');
		$this->db->from('empleados');
		$this->db->join('areas','relIdArea = idArea','inner');
		$this->db->join('cargos','relIdCargo = idCargo','inner');
		$this->db->where('correoEmpleado',$userMail);
		return $this->db->get()->result();
	}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */