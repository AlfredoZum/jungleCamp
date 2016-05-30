
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class slider_db extends CI_MODEL
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
	
	public function deleteSlider($data){
		$this->db->where('id', $data['id']);
		$this->db->update('slider', $data); 
	}
}
//end model