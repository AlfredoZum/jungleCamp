<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->database('default');
        $this->load->model('admin_user_db');
    }
	
	/**
	* Despliega la vista principal
	**/
	public function index()
	{
		$this->load->view('wvLogin');
	}
	
	public function login(){
		if($this->input->is_ajax_request()){
			
			$data = $this->admin_user_db->get(array("email" => $_POST['email'], "password" => md5($_POST['password'])));
			if(count($data) > 0){
				
				$newdata = array(
					'pkUser'  => $data[0]->id,
					'email'     => $data[0]->email,
					'user' => $data[0]->user
				);

				$this->session->set_userdata($newdata);
				
				$message = array('success' => true, 'message' => "logueado");
			}else{
				$message = array('success' => false, 'message' => "Usuario no encontrado");
			}
			
			echo json_encode($message);
			
		}
	}
}
