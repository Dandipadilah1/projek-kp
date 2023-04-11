<?php

class Index extends CI_Controller {

	public function index()
	{
		$data['profil'] = $this->model_profil->tampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('dashboard/index' ,$data);
        $this->load->view('templates/footer');
	}
}