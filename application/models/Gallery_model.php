<?php
/**
 * 
 * @since 2017-07-15
 */
class Gallery_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllGallery(){
		$this->load->database();
		$sql="select * from gallery";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function getGallery($id){
		$this->load->database();
		$sql="select * from gallery where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getFeeds($limit = 5){
		$this->load->database();
		$sql="select * from gallery order by id DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyGallery($limit = 3){
		$this->load->database();
		$sql="select * from gallery order by published_at DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyUpdate($limit = 3){
		$this->load->database();
		$sql="select * from version order by updatetime DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getGalleryDuring($offset,$row){
		$this->load->database();
		$sql="select * from gallery order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getGalleryTag($tag_id){
		$this->load->database();
		$sql="select c.id, c.title,c.published_at,c.category, c.tag, a.id as tag_id, a.tag_name, a.tag_button_type from tag as a join article_tag as b on b.tag_id=a.id join gallery as c on c.id=b.article_id where a.id='{$tag_id}'";
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