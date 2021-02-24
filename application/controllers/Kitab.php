<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitab extends CI_Controller {

	/**
	 * endi efendi
	 */
	public function index()
	{
        $this->load->view('kitab');
    }
    
	public function kitab_kuning($file)
	{
		$this->load->view('kitab_kuning/'.$file);
	}
}
