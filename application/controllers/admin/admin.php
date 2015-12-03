<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function autenticar_admin()
	{
		$this->load->helper('form');
		$this->load->view('admin/admin_cadastrar');
	}

	public function cadastrar_admin()
	{
		
	}
}