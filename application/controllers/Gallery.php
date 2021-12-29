<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{

		$this->load->model('gallery_model');
        $data['data'] = $this->gallery_model->getAllGallery();

        $this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();

		$this->load->view('gallery', $data);
	}

}
