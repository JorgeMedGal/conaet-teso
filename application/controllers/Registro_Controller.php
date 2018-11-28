<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_Controller extends CI_Controller {

	public function index(){
		if($this->session->userdata('claveEmpleado') > 0)
			$this->load->view('registro_empleado_view');
		else
			redirect(base_url());
	}

	public function registraUsuario(){
		$post = $this->input->post();
	}

}

/* End of file registro_controller.php */
/* Location: ./application/controllers/registro_controller.php */