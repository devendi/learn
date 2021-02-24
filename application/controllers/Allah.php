<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allah extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *  endi efendi
	 */
	public function index()
	{
		$this->load->view('allah');
    }
    
	public function sifat()
	{
		$this->load->view('allah/sifat');
	}
	
}
