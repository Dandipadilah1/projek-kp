<?php

class kelas11 extends CI_Controller {


	public function index()
	{
		$data['rapor'] = $this->db->query ("SELECT nama,nisn,nama_kelas,id_semester,tahun_ajar,nama_mapel,SUM(nilai_umum) AS totalnilai,nilai_huruf,ekstra,nilai_ekstra,sakit,izin,alfa,akhlak,kepribadian,ket,kd_raport  FROM tbl_nilai WHERE nama_kelas = '8' GROUP BY kd_raport ") ->result();
		$this->load->view('template2/navbar');
		$this->load->view('template3/header');
        $this->load->view('template2/sidebar2');
        $this->load->view('template3/sidebar');
        $this->load->view('orangtua/kelas11' ,$data);
        $this->load->view('template3/footer');
	}

	public function detail($kd_raport)
    {
		$data['rapor'] = $this->db->query ("SELECT nama_mapel,nilai_umum,nilai_huruf FROM tbl_nilai WHERE kd_raport ='$kd_raport' ") ->result();
        $this->load->view('template2/navbar');
		$this->load->view('template3/header');
        $this->load->view('template2/sidebar2');
        $this->load->view('template3/sidebar');
        $this->load->view('orangtua/detail' ,$data);
        $this->load->view('template3/footer');
    }
}