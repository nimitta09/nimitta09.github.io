<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whoweare extends CI_Controller {
    public function index()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('origin', $data);
	}
	public function origin()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('origin',$data);
	}
	public function org()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('organizational-structure',$data);
	}
	public function team()
	{

		 $this->load->model('team_model');    
         $data['data'] = $this->team_model->getAllteams();

         $this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('our-team', $data);
	}
	public function partners()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('partners',$data);
	}
	public function legalstatus()
	{
		$this->load->model('notice_model');
        $data['dataNotice'] = $this->notice_model->getAllNotice();
		$this->load->view('legal-status',$data);
	}
}
