<?php
/**
 *
 * @since 2016-11-11
 */
class Contact_model extends CI_Model {
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
	public function getContactDuring($offset,$row){
		$this->load->database();
		$sql="select * from contact order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}