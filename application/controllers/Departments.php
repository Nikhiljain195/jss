<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller {


	public function index()
	{
		$this->load->view('Departments');
	}
	public function cs()
	{
		$this->load->view('cs');
	}
}
