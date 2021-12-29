<?php
/**
 * 
 * @since 2017-07-15
 */
class Articles_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllArticles(){
		$this->load->database();
		$sql="select * from articles";
		$query=$this->db->query($sql);
		foreach($query->result_array() as $row){
			$data[]=$row;
		}
		return $data;
	}
	public function getArticle($id){
		$this->load->database();
		$sql="select * from articles where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getFeeds($limit = 5){
		$this->load->database();
		$sql="select * from articles order by published_at DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyArticles($limit = 3){
		$this->load->database();
		$sql="select * from articles order by published_at DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getRecentlyUpdate($limit = 3){
		$this->load->database();
		$sql="select * from version order by updatetime DESC limit {$limit}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getArticlesDuring($offset,$row){
		$this->load->database();
		$sql="select * from articles order by published_at DESC limit {$offset},{$row}";
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

	// COUNT
	public function countgallery(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM gallery');
		return $query->num_rows();
	}
	public function countnewsletter(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM newsroom where category="newsletter"');
		return $query->num_rows();
	}
	public function countannualreport(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM newsroom where category="annualreport"');
		return $query->num_rows();
	}
	public function countmedia(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM newsroom where category="media"');
		return $query->num_rows();
	}
	public function countevents(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM events');
		return $query->num_rows();
	}
	public function countimpactstories(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM impact');
		return $query->num_rows();
	}
	public function countvolunteer(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM volunteers');
		return $query->num_rows();
	}
	public function countinternship(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM internships');
		return $query->num_rows();
	}
	public function countpartnership(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM partnerships');
		return $query->num_rows();
	}
	public function countjob(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM career');
		return $query->num_rows();
	}
	public function countjobapplication(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM job_application');
		return $query->num_rows();
	}
	public function countnotice(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM notice');
		return $query->num_rows();
	}
	public function countteam(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM teams');
		return $query->num_rows();
	}
	public function countcontactlist(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM contact');
		return $query->num_rows();
	}
	

}