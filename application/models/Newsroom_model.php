<?php
/**
 * 
 * @since 2017-07-15
 */
class Newsroom_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllNewsroom($cat){
		$this->load->database();
		$sql="select * from newsroom where category='{$cat}'";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function getNewsroom($id){
		$this->load->database();
		$sql="select * from newsroom where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getFeeds($limit = 5){
		$this->load->database();
		$sql="select * from newsroom order by id DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyNewsroom($limit = 3){
		$this->load->database();
		$sql="select * from newsroom order by id DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyUpdate($limit = 3){
		$this->load->database();
		$sql="select * from version order by updatetime DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getNewsletterDuring($offset,$row){
		$this->load->database();
		$sql="select * from newsroom where category='newsletter' order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getAnnualReportDuring($offset,$row){
		$this->load->database();
		$sql="select * from newsroom where category='annualreport' order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getMediaDuring($offset,$row){
		$this->load->database();
		$sql="select * from newsroom where category='media' order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getArticlesTag($tag_id){
		$this->load->database();
		$sql="select c.id, c.title,c.published_at,c.category, c.tag, a.id as tag_id, a.tag_name, a.tag_button_type from tag as a join article_tag as b on b.tag_id=a.id join articles as c on c.id=b.article_id where a.id='{$tag_id}'";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagsType(){
		$this->load->database();
		$sql="select * from tag";
		$data['button_type'] = $this->db->query($sql)->result_array();
		return $data;
	}

	public function countAll(){
		$this->load->database();
		$sql="select * from tag";
		$data['button_type'] = $this->db->query($sql)->result_array();
		return $data;
	}


}