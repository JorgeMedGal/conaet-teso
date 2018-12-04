<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('localidades_model','registros_model'));
	}

	public function index(){
		if($this->session->userdata('claveEmpleado') > 0)
			$this->load->view('registro_empleado_view',array(
				'estados'	=> $this->getEstados(),
				'areas'		=> $this->getAreas()
			));
		else
			redirect(base_url());
	}

	public function registraUsuario(){
		$post = $this->input->post();
		$arrayInsert = array(
			'nombreEmpleado'	=> $post['nombreUsuario'],
			'aPaternoEmpleado'  => $post['aPUsuario'],
			'aMaternoEmpleado'  => empty($post['aMUsuario']) ? "" : $post['aMUsuario'],
			'encargadoArea'     => (strcmp($post['checkEncargado'],"on") === 0),
			'telefonoEmpleado'	=> $post['telefonoUsuario'],
			'extEmp'			=> $post['extUsuario'],
			'password_empleado' => '$2a$08$YHspBEtlhtkBNJMZdBWr8O8U8uui8ocnNvLNo/hOoOa.S8v/xLTDW',
			'relIdArea'			=> $post['areaUsuario'],
			'cargoUsuario'		=> $post['cargoUsuario'],
			'correoEmpleado'	=> $post['correoUsuario']
		);
		$arrayDir = array(
			'calleEmpleado'		=> $post['calleUsuario'],
			'numIntEmpleado'	=> $post['nIntUsuario'],
			'numExtEmpleado'	=> $post['nExtUsuario'],
			'codPosEmpleado'	=> $post['codPosUsuario'],
			'relIdColoniaEmp'	=> $post['colUsuario'],
			'relIdEstadoEmpl'	=> $post['edoUsuario'],
			'relIdDelegacionEmp'=> $post['munUsuario']
		);
		$estatus = $this->registros_model->insertNewEmpleado($arrayInsert,$arrayDir);
		$this->session->set_userdata('correcto',$estatus);
		redirect(base_url('registrar-empleado'));
	}

	private function getEstados(){
		$estados = $this->localidades_model->getEstados();
		$selectEdos = "<option value='0'> Selecciona un estado </option>";
		foreach ($estados as $estado)
			$selectEdos .= "<option value='$estado->idEstado'>$estado->nombreEstado</option>";
		return $selectEdos;
	}

	public function getMunicipios(){
		$municipios = $this->localidades_model->getMunicipios($this->input->post('estado'));
		$selectMun = "<option value='0'> Selecciona una municipio</option>";
		foreach($municipios as $municipio)
			$selectMun .= "<option value='$municipio->idDelegacion'>$municipio->nombreDelegacion</option>";
		echo $selectMun;
	}

	public function getColonias(){
		$colonias = $this->localidades_model->getColonias($this->input->post('municipio'));
		$selectCol = "<option value='0'> Selecciona una colonia </option>";
		foreach($colonias as $colonia)
			$selectCol .= "<option value='$colonia->idColonia'>$colonia->nombreColonia</option>";
		$selectCol .= "<option value='x'> Otro... </option>";
		echo $selectCol;
	}

	public function getAreas(){
		$areas = $this->registros_model->getAllAreas();
		$selectArea = "<option value='0'>Selecciona el área a la que pertenecera el empleado</option>";
		foreach($areas as $area)
			$selectArea .= "<option value='$area->idArea'>$area->nombreArea</option>";
		return $selectArea;
	}

	public function getCargo(){
		$cargos = $this->registros_model->getAllCargos($this->input->post('area'));
		$selectCargos = "<option value=0> Selecciona el cargo que tendra el empleado </option>";
		foreach($cargos as $cargo)
			$selectCargos .= "<option value='$cargo->idCargo'>$cargo->nombreCargo</option>";
		echo $selectCargos;
	}

}

/* End of file registro_controller.php */
/* Location: ./application/controllers/registro_controller.php */