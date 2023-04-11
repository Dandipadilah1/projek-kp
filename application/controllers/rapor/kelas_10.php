<?php

class kelas_10 extends CI_Controller {

	public function index()
	{
        
        $data['rapor'] = $this->db->query ("SELECT nama,nisn,nama_kelas,id_semester,tahun_ajar,nama_mapel,SUM(nilai_umum) AS totalnilai,nilai_huruf,ekstra,nilai_ekstra,sakit,izin,alfa,akhlak,kepribadian,ket,kd_raport  FROM tbl_nilai WHERE nama_kelas = '7' GROUP BY kd_raport ") ->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('rapor/kelas_10' ,$data);
        $this->load->view('templates/footer'); 
    }

    public function tambah()
	{
        $data ['datakategori'] = $this->model_rapor->getdata();
        $data ['profil'] = $this->model_rapor->getprofil();
        $data ['tahun'] = $this->model_rapor->gettahun();
        $data ['mapel'] = $this->model_rapor->getmapel();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('rapor/tambah' ,$data);
        $this->load->view('templates/footer'); 
    }

    public function tambah_aksi()
    {
        $nama                   = $this->input->post('nama');
        $nisn                   = $this->input->post('nisn');
        $nama_kelas             = $this->input->post('nama_kelas');
        $id_semester            = $this->input->post('id_semester');
        $tahun_ajar             = $this->input->post('tahun_ajar');
        $nama_mapel             = $this->input->post('nama_mapel');
        $nilai_umum             = $this->input->post('nilai_umum');
        $nilai_huruf            = $this->input->post('nilai_huruf');
        $ekstra                 = $this->input->post('ekstra');
        $nilai_ekstra           = $this->input->post('nilai_ekstra');
        $sakit                  = $this->input->post('sakit');
        $izin                   = $this->input->post('izin');
        $alfa                   = $this->input->post('alfa');
        $akhlak                 = $this->input->post('akhlak');
        $kepribadian            = $this->input->post('kepribadian');
        $ket                    = $this->input->post('ket');
        $kd_raport              = $this->input->post('kd_raport');

        $data = array (
            'nama'              => $nama,
            'nisn'              => $nisn,
            'nama_kelas'        => $nama_kelas,  
            'id_semester'       => $id_semester, 
            'tahun_ajar'        => $tahun_ajar,
            'nama_mapel'        => $nama_mapel,
            'nilai_umum'        => $nilai_umum,
            'nilai_huruf'       => $nilai_huruf,
            'ekstra'            => $ekstra,
            'nilai_ekstra'      => $nilai_ekstra,
            'sakit'             => $sakit,
            'izin'              => $izin,
            'alfa'              => $alfa,
            'akhlak'            => $akhlak,
            'kepribadian'       => $kepribadian,
            'ket'               => $ket,
            'kd_raport'         => $kd_raport,

        );
        $this->model_rapor->tambah_data($data, 'tbl_nilai');
        redirect('rapor/kelas_10/index');
    }

    public function hapus($kd_raport)
    {
        $where = array('kd_raport' => $kd_raport);
        $this->model_rapor->hapus_data($where, 'tbl_nilai');
        redirect('rapor/kelas_10/index');
    }

    public function print($kd_raport)
    {
        $data['nilai'] = $this->db->query ("SELECT nama_mapel,nilai_umum,nilai_huruf,ekstra FROM tbl_nilai WHERE kd_raport ='$kd_raport' ") ->result();
        $data['print'] = $this->db->query ("SELECT id,nama,nisn,nama_kelas,id_semester,tahun_ajar,nama_mapel, SUM(nilai_umum) AS totalnilai,nilai_huruf,ekstra,nilai_ekstra,sakit,izin,alfa,akhlak,kepribadian,ket,kd_raport FROM tbl_nilai WHERE kd_raport='$kd_raport' GROUP BY kd_raport") ->result();
		$this->load->view('rapor/print' ,$data);
    }



}