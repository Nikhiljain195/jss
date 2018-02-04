<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutus extends CI_Controller {


	public function index()
	{
		$this->load->view('aboutus');
	}
	public function aboutus1()
	{
		$this->load->view('aboutus1');
	}
}
