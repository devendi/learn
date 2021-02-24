<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tajwid extends CI_Controller {
    
	public function index()
	{
		$this->load->view('tajwid');
	}

	public function detil($dataview)
	{
		$this->load->view("tajwid/".$dataview);
	}
	public function detil_detil($detil, $dataview)
	{
		$this->load->view("tajwid/".$dataview);
	}
}