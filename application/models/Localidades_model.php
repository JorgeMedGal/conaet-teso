<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Localidades_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getEstados(){
		$this->db->select('idEstado,nombreEstado');
		$this->db->from('estados');
		return $this->db->get()->result();
	}

	public function getMunicipios($idEstado){
		$this->db->select('idDelegacion,nombreDelegacion');
		$this->db->from('delegaciones');
		$this->db->where('relIdEstado',$idEstado);
		return $this->db->get()->result();
	}

	public function getColonias($idMunicipio){
		$this->db->select('idColonia,nombreColonia');
		$this->db->from('colonias');
		$this->db->where('relIdMunicipio',$idMunicipio);
		return $this->db->get()->result();
	}

}

/* End of file Localidades_model.php */
/* Location: ./application/models/Localidades_model.php */