
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class home_db extends CI_MODEL
{
    public function __construct(){
        parent::__construct();
    }
    /**
     * Obtiene todos los registros activos del catalogo
     */
    public function insert($data){
        $this->db->insert('admin_user', $data);
    }
    /**
     * Obtiene todos los registros activos del catalogo
     */
    public function getSlider(){
        $this->db->from('slider');
        $this->db->where('status = 1');
        return $this->db->get()->result();
    }
	
	public function getCamp(){
		$this->db->from('camp');
        $this->db->where('status = 1');
        return $this->db->get()->result(); 
	}
	
	public function getCampById($id){
		$this->db->from('camp');
        $this->db->where('id = ', $id);
		$this->db->where('status = 1');
        return $this->db->get()->result(); 
	}
	
	public function getActivity(){
		$this->db->from('activity');
		$this->db->where('status = 1');
        return $this->db->get()->result(); 
	}
	
	public function getInstallation(){
		$this->db->from('installation');
		$this->db->where('status = 1');
        return $this->db->get()->result(); 
	}
	
	public function getPackage(){
		$this->db->from('package');
		//$this->db->where('status = 1');
        return $this->db->get()->result(); 
	}
	
}
//end model