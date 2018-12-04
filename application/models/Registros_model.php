<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getAllAreas(){
		$this->db->select('idArea,nombreArea');
		$this->db->from('areas');
		return $this->db->get()->result();
	}

	public function getAllCargos($idArea){
		$this->db->select('idCargo,nombreCargo');
		$this->db->from('cargos');
		$this->db->where('relIdArea',$idArea);
		return $this->db->get()->result();
	}

	public function insertNewEmpleado($dataEmp,$dataDir){
		$this->db->trans_begin();
		$this->db->insert('empleados',$dataEmp);
		$estatus = $this->db->trans_status();
		if($estatus === FALSE)
			$this->db->trans_rollback();
		else{
			$this->db->select('MAX(idEmpleado) as idEmp');
			$this->db->from('empleados');
			$query = $this->db->get()->result();
			$dataDir['relEmpleadoDir'] = $query[0]->idEmp;
			$this->db->insert('direccion_empleados',$dataDir);
			$estatus = $this->db->trans_status();
			if($estatus === FALSE)
				$this->db->trans_rollback();
			else
				$this->db->trans_commit();
		}
		return $estatus;		
	}

}

/* End of file Registros_model.php */
/* Location: ./application/models/Registros_model.php */