<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class general extends CI_Controller {

	/**
	 * endi efendi
	 */
	public function index()
	{
        $this->load->view('general');
	}
	
	public function informasi($file)
	{
        $this->load->view('informasi/'.$file);
	}
}
