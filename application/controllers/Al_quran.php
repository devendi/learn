<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class al_quran extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *  endi efendi
	 */
	public function index()
	{
		$this->load->model('alquran_model');
		$data['row'] = $this->alquran_model->get_entries();

		$this->load->view('al_quran', $data);
	}
	
	public function detil($surah)
	{
		$this->load->model('alquran_model');
		$data['row'] = $this->alquran_model->detil_get_entries($surah);
		$id_data = $this->alquran_model->detil_get($surah)->id+1;
		$data['next_link'] = $this->alquran_model->detil_id_get($id_data)->link;
		$data['surah'] = $surah;

		$this->load->view('detil_alquran', $data);
	}
	public function detil_awalan($surah)
	{
		$this->load->model('alquran_model');
		$data['row'] = $this->alquran_model->detil_get_entries($surah);
		$id_data = $this->alquran_model->detil_get($surah)->id+1;
		$data['next_link'] = $this->alquran_model->detil_id_get($id_data)->link;
		$data['surah'] = $surah;

		$this->load->view('detil_alquran_awalan', $data);
	}
	public function detil_murokkab($surah)
	{
		$this->load->model('alquran_model');
		$data['row'] = $this->alquran_model->murokab_get_entries($surah);
		$data['surah'] = $surah;

		$this->load->view('detil_alquran_murokkab', $data);
	}

	/****************** version */
	public function version()
	{
		$this->load->view('version/version_alquran');
	}

	public function v_detil($versi)
	{
		$this->load->model('alquran_model');
		$data['row'] = $this->alquran_model->get_entries();
		$data['versi'] = $versi;

		$this->load->view('version/al_quran_version', $data);
	}

	public function v_detil_surah($versi,$surah)
	{
		$this->load->model('alquran_model');
		$data['rows'] = $this->alquran_model->version_get_entries($versi,$surah);
		$data['versi'] = $versi;

		if ($versi != 'tematik' ){
			$this->load->view('version/detil_alquran_verion', $data);
		}else{
			$this->load->view('version/detil_alquran_verion_tematik', $data);
		}
	}
	
	/****************** end version */
	
}
