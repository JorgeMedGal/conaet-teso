<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'phpass/PasswordHash.php';

class Login_Controller extends CI_Controller {

	var $hasher;

	public function __construct(){
		parent::__construct();
		$this->load->model(array('login_model','empleados_model'));
		$this->hasher = new PasswordHash(8,FALSE);
	}

	public function index(){
		if($this->session->userdata('claveEmpleado') > 0)
			$this->load->view('main_view');
		else
			$this->load->view('login');
	}

	public function validateLogin(){
		$post = $this->input->post(); // correo y usuario
		$userData = $this->login_model->getInfoByMail($post['userName']);
		if(!is_null($userData) || count($userData) > 0){
			echo $this->hasher->CheckPassword($post['password'],$userData[0]->password_empleado);
			$arrayUser = array(
				'claveEmpleado'  => $userData[0]->idEmpleado,
				'nombreEmpleado' => $userData[0]->nombreEmpleado." ".$userData[0]->aPaternoEmpleado." ".$userdata[0]->aMaternoEmpleado,
				'esEncargado'	 => $userData[0]->encargadoArea,
				'correoEmpleado' => $userData[0]->correoEmpleado,
				'imagenEmpleado' => $userData[0]->imagenEmpleado,
				'areaEmpleado'	 => $userData[0]->idArea,
				'areaNombre'	 => $userData[0]->nombreArea,
				'cargoEmpleado'	 => $userData[0]->idCargo,
				'cargoNombre'	 => $userData[0]->nombreCargo
			);
			$this->session->set_userdata($arrayUser);
			redirect(base_url());
		}else
			$this->session->set_userdata('noLogin',FALSE);
	}

	public function closeSession(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	private function getAllEmpleados(){
		$empleados = $this->empleados_model->getAll($this->session->userdata('claveEmpleado'));
		$rowsEmpleados = "";
		foreach ($empleados as $empleado) {
			$rowsEmpleados = "<tr></tr>";
		}
	}

	public function getChartData(){
		
	}

}

/* End of file Login_Controller.php */
/* Location: ./application/controllers/Login_Controller.php */