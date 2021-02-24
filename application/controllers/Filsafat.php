<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filsafat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *  endi efendi
	 */
	public function index()
	{
		$this->load->view('filsafat');
    }
    
	public function detil($filsafat)
	{
		$this->load->view('filsafat/'.$filsafat);
	}
	
}
