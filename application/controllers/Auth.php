<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->library('template','pagination');
	}

	public function index()
	{
		
		$this->template->user('Org/v_profil');
	}

}
