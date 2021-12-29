<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joinus extends CI_Controller {
	public function index()
	{
		$this->load->view('joinus');
	}


	public  function addVolunteer(){
        $this->load->database();
        if ($this->input->post('submit', TRUE)!='') {
            

            $data['data'] = array(
                'name' => $this->input->post('name', TRUE),  
                'qualification' => $this->input->post('hq', TRUE), 
                'purpose' => $this->input->post('purpose', TRUE), 
                'nationality' => $this->input->post('nationality', TRUE), 
                'email' => $this->input->post('email', TRUE), 
                'mobile' => $this->input->post('contact', TRUE)
            );

            $this->db->insert('volunteers', $data['data']); 
        }

        $this->session->set_flashdata('volunteer','Thank You for your interest. We will get back to you.');
        redirect('/joinus/volunteer');
    }


}
