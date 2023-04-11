<?php

class SiswaIndex extends CI_Controller {
    

	public function index()
	{
        $data['profil'] = $this->model_profil->nampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('siswa/siswaindex' ,$data);
        $this->load->view('templates/footer');
	}

    public function detail($id)
    {
        $data['detail'] = $this->model_profil->detail_data($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('siswa/detail' ,$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('siswa/tambah');
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $nis            = $this->input->post('nis');
        $nisn           = $this->input->post('nisn');
        $nama           = $this->input->post('nama');
        $jk             = $this->input->post('jk');
        $tmp_lahir      = $this->input->post('tmp_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $agama          = $this->input->post('agama');
        $alamat         = $this->input->post('alamat');
        $namaayah       = $this->input->post('namaayah');
        $namaibu        = $this->input->post('namaibu');
        $kerjaayah       = $this->input->post('kerjaayah');
        $kerjaibu       = $this->input->post('kerjaibu');

        $data = array (
            'nis'           => $nis,
            'nisn'           => $nisn,
            'nama'          => $nama,  
            'jk'            => $jk, 
            'tmp_lahir'     => $tmp_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'agama'         => $agama, 
            'alamat'        => $alamat,  
            'namaayah'      => $namaayah,   
            'namaibu'       => $namaibu,  
            'kerjaayah'      => $kerjaayah,   
            'kerjaibu'      => $kerjaibu, 
        );

        $this->model_profil->tambah_data($data, 'tbl_siswa');
        redirect('siswaindex/index');

    }

    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['profil'] = $this->model_profil->edit_data($where, 'tbl_siswa')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('siswa/edit' ,$data);
        $this->load->view('templates/footer');

    }

    public function update(){
        $id             = $this->input->post('id');
        $nis            = $this->input->post('nis');
        $nisn            = $this->input->post('nisn');
        $nama           = $this->input->post('nama');
        $jk             = $this->input->post('jk');
        $tmp_lahir      = $this->input->post('tmp_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $agama          = $this->input->post('agama');
        $alamat         = $this->input->post('alamat');
        $namaayah       = $this->input->post('namaayah');
        $namaibu        = $this->input->post('namaibu');
        $kerjaayah      = $this->input->post('kerjaayah');
        $kerjaibu       = $this->input->post('kerjaibu');

        $data = array (
            'nis'           => $nis,
            'nisn'           => $nisn,
            'nama'          => $nama,  
            'jk'            => $jk, 
            'tmp_lahir'     => $tmp_lahir,
            'tgl_lahir'     => $tgl_lahir, 
            'agama'         => $agama, 
            'alamat'        => $alamat,  
            'namaayah'      => $namaayah,   
            'namaibu'       => $namaibu,  
            'kerjaayah'     => $kerjaayah,   
            'kerjaibu'      => $kerjaibu, 
        );

        $where = array(
            'id' =>$id
        );

        $this->model_profil->update_data($where,$data, 'tbl_siswa');
        redirect('siswaindex/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_profil->hapus_data($where, 'tbl_siswa');
        redirect('siswaindex/index');
    }
    public function kembali()
    {
        redirect('siswaindex/index');
    }

    
}