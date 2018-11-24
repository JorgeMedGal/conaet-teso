<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Principal extends CI_Controller {

    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $this->load->view('main_view');
    }

    public function login(){
      $this->load->view('');
    }

    public function prueba(){
      $this->load->view('generica_view');
    }
}
