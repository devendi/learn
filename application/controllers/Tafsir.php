<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tafsir extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *  endi efendi
	 */
	public function index()
	{
		$this->load->view('tafsir');
	}
    
	public function detil($tafsir)
	{
	
		$this->load->view('tafsir/'.$tafsir);
	}
	
}
