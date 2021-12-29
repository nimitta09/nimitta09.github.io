<?php
/**
 *
 * @since 2016-11-11
 */
class Career_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getAllCareer(){
		$this->load->database();
		$sql="select * from career order by id DESC";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}

	public function getcareer($id){
		$this->load->database();
		$sql="select * from career where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getCareerDuring($offset,$row){
		$this->load->database();
		$sql="select * from career order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}

	public function getJobApplicationDuring($offset,$row){
		$this->load->database();
		$sql="select * from job_application order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}