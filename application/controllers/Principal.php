<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Principal extends CI_Controller {

    public function index(){
      $this->load->view('main_view');
    }

    public function login(){
      $this->load->view('login');
    }

    public function nosotros(){
      $this->load->view('nosotros_view');
    }
}
