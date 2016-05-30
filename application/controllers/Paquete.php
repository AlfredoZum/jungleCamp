<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paquete extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->database('default');
        $this->load->model('home_db');
    }
	
	/**
	* Despliega la vista principal
	**/
	public function index()
	{
		$data['package'] = $this->home_db->getPackage();
		$this->load->view('wvPaquete', $data);
	}
	
	
	
}
