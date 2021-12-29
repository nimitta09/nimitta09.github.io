<?php
/**
 *
 * @since 2016-11-11
 */
class Joinus_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getAllContact(){
		$this->load->database();
		$sql="select * from contact order by id desc";
		$data_tmp =$this->db->query($sql)->result_array();
		foreach ($data_tmp as $value) {
			$contact_id = $value['id'];
			$data["$contact_id"]['id'] = $value['id'];
			$data["$contact_id"]['name'] = $value['name'];
			$data["$contact_id"]['email'] = $value['email'];
			$data["$contact_id"]['title'] = $value['title'];
			$data["$contact_id"]['message'] = $value['message'];
		}
		return $data;
	}
	public function getVolunteerDuring($offset,$row){
		$this->load->database();
		$sql="select * from volunteers order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getInternshipDuring($offset,$row){
		$this->load->database();
		$sql="select * from internships order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	
	public function getPartnershipDuring($offset,$row){
		$this->load->database();
		$sql="select * from partnerships order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}