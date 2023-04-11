<?php

class Index extends CI_Controller {

	public function index()
	{
        
        $data ['mapel'] = $this->model_mapel->tampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('mapel/index' ,$data);
        $this->load->view('templates/footer');
	}

    public function edit($id_mapel)
	{
        $data ['datakategori'] = $this->model_mapel->getdata();
        $where = array('id_mapel' =>$id_mapel);
        $data['mapel'] = $this->model_mapel->edit_data($where, 'tbl_mapel')->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('mapel/edit' ,$data);
        $this->load->view('templates/footer');
	}

    public function update()
    {
        $id_mapel                 = $this->input->post('id_mapel');
        $nama_mapel               = $this->input->post('nama_mapel');
        $kode_mapel               = $this->input->post('kode_mapel');
        $id_semester              = $this->input->post('id_semester');
        $nama_guru                = $this->input->post('nama_guru');
        

        $data = array (
            'nama_mapel'        => $nama_mapel,
            'kode_mapel'        => $kode_mapel,
            'id_semester'       => $id_semester,
            'nama_guru'         => $nama_guru,
        );

        $where = array(
            'id_mapel' =>$id_mapel
        );

        $this->model_mapel->update_data($where,$data, 'tbl_mapel');
        redirect('mapel/index/index');
    }
    public function hapus($id_mapel)
    {
        $where = array('id_mapel' => $id_mapel);
        $this->model_mapel->hapus_data($where, 'tbl_mapel');
        redirect('mapel/index/index');
    }
    public function tambah()
    {
        $data ['datakategori'] = $this->model_mapel->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mapel/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama_mapel               = $this->input->post('nama_mapel');
        $kode_mapel               = $this->input->post('kode_mapel');
        $id_semester              = $this->input->post('id_semester');
        $nama_guru                = $this->input->post('nama_guru');

        $data = array (
            'nama_mapel'        => $nama_mapel,
            'kode_mapel'        => $kode_mapel,
            'id_semester'       => $id_semester,
            'nama_guru'         => $nama_guru,
        );
        $this->model_mapel->tambah_data($data, 'tbl_mapel');
        redirect('mapel/index/index');
    }
    public function kembali()
    {
        redirect('mapel/index/index');
    }

}