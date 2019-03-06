<?php
class Rsresource extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function Add($data){
		$this->db->insert('tbl_resource',$data);
		return $this->db->insert_id();
	}
	public function getCourses(){
		$data = $this->db->get('tblcourse');
		return $data->result();
	}
	public function getAll(){
		$data = $this->db->get('tbl_resource');
		return $data->result();
	}
	public function getByCourse($id){
		$this->db->where('course',$id);
		$data = $this->db->get('tbl_resource');
		return $data->result();
	}
	public function Delete($id){
		$this->db->where("id",$id);
		$this->db->delete('tbl_resource');
	}

}
?>