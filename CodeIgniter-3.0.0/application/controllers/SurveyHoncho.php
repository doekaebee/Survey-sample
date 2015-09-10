<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SurveyHoncho extends CI_Controller {

	public function index()
	{
		$this->load->view('displayer');
	}

	public function process()
	{
		if($this->input->post())
		{

			$count = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $count + 1);
			$this->session->set_userdata('post_data', $this->input->post());


			redirect('SurveyHoncho/results');
		}
		else
			redirect('SurveyHoncho/index');
	}

	public function results()
	{
		$this->load->view('results');
	}
}
