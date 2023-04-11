<?php

class dashboard2 extends CI_Controller {

	public function index()
    {	
        $this->load->view('template2/navbar');
        $this->load->view('template2/sidebar');
        $this->load->view('dashboard2');
        $this->load->view('template2/footer');
    }
}