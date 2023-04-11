<?php

class Dashboard extends CI_Controller {


	public function index()
	{
		$this->load->view('template2/navbar');
        $this->load->view('template2/sidebar2');
        $this->load->view('orangtua/dashboard');
        $this->load->view('template2/footer');
	}
}