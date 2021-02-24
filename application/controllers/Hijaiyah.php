<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hijaiyah extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('hijaiyah_model');
		$data['row'] = $this->hijaiyah_model->get_entries();

		$this->load->view('tajwid/hijaiyah', $data);
	}
	
	public function kolom()
	{
		$this->load->model('hijaiyah_model');
		$data['row'] = $this->hijaiyah_model->get_entries();

		$this->load->view('tajwid/hijaiyah_kolom', $data);
	}
	
	public function hodam()
	{
		$this->load->model('hijaiyah_model');
		$data['row'] = $this->hijaiyah_model->get_entries();

		$this->load->view('tajwid/hodam_hijaiyah', $data);
	}
	
}
