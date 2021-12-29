<?php
/**
 *
 * @since 2016-11-11
 */
class Notice_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getAllNotice(){
		$this->load->database();
		$sql="select * from notice";
/*		$data_tmp =$this->db->query($sql)->result_array();
		foreach ($data_tmp as $value) {
			$Notice_id = $value['id'];
			$data["$Notice_id"]['id'] = $value['id'];
			$data["$Notice_id"]['link'] = $value['link'];
			$data["$Notice_id"]['link_name'] = $value['link_name'];
			$data["$Notice_id"]['link_order'] = $value['link_order'];
		}*/

		$dataNotice =$this->db->query($sql)->result_array();
		return $dataNotice;
	}

	public function getNotice($id){
		$this->load->database();
		$sql="select * from notice where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getNoticeDuring($offset,$row){
		$this->load->database();
		$sql="select * from notice order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}