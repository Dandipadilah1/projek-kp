<?php

class kelas_11 extends CI_Controller {

	public function index()
	{
        $data['rapor'] = $this->db->query ("SELECT nama,nisn,nama_kelas,id_semester,tahun_ajar,nama_mapel,SUM(nilai_umum) AS totalnilai,nilai_huruf,ekstra,nilai_ekstra,sakit,izin,alfa,akhlak,kepribadian,ket,kd_raport  FROM tbl_nilai WHERE nama_kelas = '8' GROUP BY kd_raport ") ->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('rapor/kelas_11' ,$data);
        $this->load->view('templates/footer'); 
    }
    public function hapus($kd_raport)
    {
        $where = array('kd_raport' => $kd_raport);
        $this->model_rapor->hapus_data($where, 'tbl_nilai');
        redirect('rapor/kelas_11/index');
    }

}