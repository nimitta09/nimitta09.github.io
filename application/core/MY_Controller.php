<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('user');
		
		$file=FCPATH.'install.lock';
		if (!is_file($file)){
			redirect(site_url('install'));
		}
		$this->load->database();
		
		checkLogin();
	}
}
?>