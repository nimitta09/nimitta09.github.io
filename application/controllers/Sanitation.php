<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sanitation extends CI_Controller {
    public function __construct() {
      parent::__construct ();
    
      $this->load->model('siteinfo_model');
      define ('LANG', $this->siteinfo_model->getLang());
      $this->lang->load('admin', LANG);
     }
    public function index(){

        $this->load->view('sanitation');
    }
}
