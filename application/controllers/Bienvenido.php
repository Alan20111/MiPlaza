<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bienvenido extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('inicio');
	}
	function Ubicacion()
	{
		$this->load->view('ubicacion');
	}
	function Nosotros()
	{
		$this->load->view('nosotros');
	}
}
