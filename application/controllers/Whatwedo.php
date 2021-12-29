<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatwedo extends CI_Controller {
	public function index()
	{

		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();

		$this->load->view('health-nutrition', $data);
	}
    public function health()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('health-nutrition',$data);
	}
    public function livelyhood()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('livelihood-promotion',$data);
	}
    public function nrm()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('natural-resource-mgmt',$data);
	}
    public function tms()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('techno-managerial-support',$data);
	}
    public function advocacy()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('protection-advocacy',$data);
	}
    public function balbhavan()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('bal-bhavan',$data);
	}
    public function foryou()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('for-you',$data);
	}
}
