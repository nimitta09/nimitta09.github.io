<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$this->load->view('contact');
	}

	public function add()
	{
		$this->load->database();

        if ($this->input->post('submit', TRUE)!='') {
            $data['data'] = array(
                'name' => $this->input->post('name', TRUE),  
                'email' => $this->input->post('email', TRUE), 
                'mob_no' => $this->input->post('mobno', TRUE), 
                'message' => $this->input->post('message', TRUE)      
            );

            //echo  $this->input->post('message');
            $this->db->insert('contact', $data['data']);
        }

        $this->session->set_flashdata('contactform','Thank You for reaching us.');
       redirect('/contact/index');

       
	}
}
