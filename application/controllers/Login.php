<?php
defined('BASEPATH') OR exit('No direct script access allowe');
class Login extends CI_Controller{
		public function index()
		{
		$this->load->view('login');
		}

}