<?php

class Index extends CI_Controller {

	public function index()
	{
        $data ['ajar'] = $this->model_ajar->tampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('tahun_ajar/index' ,$data);
        $this->load->view('templates/footer');
	}

	public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tahun_ajar/tambah');
        $this->load->view('templates/footer');
    }

	public function tambah_aksi()
    {
        $id         		= $this->input->post('id');
		$tahun_ajar         = $this->input->post('tahun_ajar');

        $data = array (
            'id'        	=> $id,
			'tahun_ajar'    => $tahun_ajar,

        );
        $this->model_ajar->tambah_data($data, 'tbl_tahun');
        redirect('tahun_ajar/index/index');
    }

	public function edit($id)
    {
        $where = array('id' =>$id);
        $data['ajar'] = $this->model_guru->edit_data($where, 'tbl_tahun')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tahun_ajar/edit' ,$data );
        $this->load->view('templates/footer');

    }
    public function update()
    {
        $id                 = $this->input->post('id');
        $tahun_ajar          = $this->input->post('tahun_ajar');

        $data = array (
            'tahun_ajar'        => $tahun_ajar,
        );

        $where = array(
            'id' =>$id
        );

        $this->model_ajar->update_data($where,$data, 'tbl_tahun');
        redirect('tahun_ajar/index/index');
    }

	public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_ajar->hapus_data($where, 'tbl_tahun');
        redirect('tahun_ajar/index/index');
    }
	public function kembali()
    {
        redirect('tahun_ajar/index/index');
    }

}