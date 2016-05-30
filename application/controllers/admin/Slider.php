<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->database('default');
        $this->load->model('slider_db');
	   if(!$this->session->userdata('pkUser')){
			redirect('login');
		}
    }
	
	/**
	* Despliega la vista principal
	**/
	public function index()
	{	
		$data['slider'] = $this->slider_db->getSlider();
		$this->load->view('admin/vwSlider', $data);
	}
	
	public function deleteSlider(){
		if($this->input->is_ajax_request()){
			
			$update = array(
				'id'			=> $_POST['id'],
				'status'		=> 0,
			);
			
			$this->slider_db->deleteSlider($update);
			$data = $this->slider_db->getSlider();
			echo json_encode(array('items' => $data));
		}
	}
}
