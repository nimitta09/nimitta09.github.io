<?php
/**
 * 
 * @since 2017-07-15
 */
class Dashboard_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function countGallery(){
		return $this->db->count_all('gallery');
	}
    public function countNewsLetter(){
		$this->db->where('category =', 'newsletter');
        $query = $this->db->get('newsroom');
        return $query->num_rows();
	}
	
}
