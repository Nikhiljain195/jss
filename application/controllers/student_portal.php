<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_portal extends CI_Controller {

	public function index()
	{
		$this->load->view('student_portal/index');
	}
}
