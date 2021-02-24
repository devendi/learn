<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Malaikat extends CI_Controller {

	public function index()
	{
		$this->load->model('Malaikat_model');
		$data['rows'] = $this->Malaikat_model->get_entries();

		$this->load->view('list_malaikat', $data);
	}

	public function detil($key)
	{
		$nama_malaikat = decrypt_url($key);
		$data['user']= "Malaikat ". $nama_malaikat;
		$this->load->model('Malaikat_model');
		if($nama_malaikat){
			$data['detil'] = $this->Malaikat_model->get_detil($nama_malaikat);
		}
		

		$this->load->view('profile', $data);
	}
}
