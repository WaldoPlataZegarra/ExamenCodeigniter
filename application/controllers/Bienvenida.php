<?php
defined('BASEPATH') OR exit('No direct script access allowe');
class Bienvenida extends CI_Controller{
		public function index()
		{
		$this->load->view('bienvenida');
		}
}