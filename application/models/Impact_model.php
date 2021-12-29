<?php
/**
 * 
 * @since 2017-07-15
 */
class Impact_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllImpact(){
		$this->load->database();
		$sql="select * from impact";
		$data=$this->db->query($sql)->result_array() ;
		return $data;
	}
	public function getImpact($id){
		$this->load->database();
		$sql="select * from impact where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getFeeds($limit = 5){
		$this->load->database();
		$sql="select * from impact order by id DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyImpact($limit = 3){
		$this->load->database();
		$sql="select * from impact order by id DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyUpdate($limit = 3){
		$this->load->database();
		$sql="select * from version order by updatetime DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getImpactDuring($offset,$row){
		$this->load->database();
		$sql="select * from impact order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getimpactTag($tag_id){
		$this->load->database();
		$sql="select c.id, c.title,c.published_at,c.category, c.tag, a.id as tag_id, a.tag_name, a.tag_button_type from tag as a join impact_tag as b on b.tag_id=a.id join impact as c on c.id=b.impact_id where a.id='{$tag_id}'";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagsType(){
		$this->load->database();
		$sql="select * from tag";
		$data['button_type'] = $this->db->query($sql)->result_array();
		return $data;
	}
}