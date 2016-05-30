<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->database('default');
       // $this->load->model('dashboard_db');
	   if(!$this->session->userdata('pkUser')){
			redirect('login');
		}
    }
	
	/**
	* Despliega la vista principal
	**/
	public function index()
	{
		
		$this->load->view('admin/wvHome');
	}
}
