<?php

class Index extends CI_Controller {

	public function index()
	{
		$data['guru'] = $this->model_guru->tampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('guru/index' ,$data);
        $this->load->view('templates/footer');
	}

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('guru/tambah');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama_guru          = $this->input->post('nama_guru');
        $nip                = $this->input->post('nip');
        $jk_guru            = $this->input->post('jk_guru');
        $guru_status        = $this->input->post('guru_status');
        $status_pegawai     = $this->input->post('status_pegawai');

        $data = array (
            'nama_guru'        => $nama_guru,
            'nip'              => $nip,
            'jk_guru'          => $jk_guru,  
            'guru_status'      => $guru_status, 
            'status_pegawai'   => $status_pegawai,

        );
        $this->model_guru->tambah_data($data, 'tbl_guru');
        redirect('guru/index/index');
    }

    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['guru'] = $this->model_guru->edit_data($where, 'tbl_guru')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('guru/edit' ,$data );
        $this->load->view('templates/footer');

    }
    public function update()
    {
        $id                 = $this->input->post('id');
        $nama_guru          = $this->input->post('nama_guru');
        $nip                = $this->input->post('nip');
        $jk_guru            = $this->input->post('jk_guru');
        $guru_status        = $this->input->post('guru_status');
        $status_pegawai     = $this->input->post('status_pegawai');

        $data = array (
            'nama_guru'        => $nama_guru,
            'nip'              => $nip,
            'jk_guru'          => $jk_guru,  
            'guru_status'      => $guru_status, 
            'status_pegawai'   => $status_pegawai,
        );

        $where = array(
            'id' =>$id
        );

        $this->model_profil->update_data($where,$data, 'tbl_guru');
        redirect('guru/index/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_guru->hapus_data($where, 'tbl_guru');
        redirect('guru/index/index');
    }
    public function kembali()
    {
        redirect('guru/index/index');
    }
}