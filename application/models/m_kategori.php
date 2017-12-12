<?php
class m_kategori extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get(){
		$query = $this->db->get('kategori');
		return $query->result_array();
	}

	public function pilih($id){
			$this->db->where('id', $id);
			return $this->db->get('kategori');
	}
}

