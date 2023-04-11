<?php

class Index extends CI_Controller {

	public function index()
	{
        $data ['kelas'] = $this->model_kelas->tampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('kelas/index' ,$data);
        $this->load->view('templates/footer');
	}
	public function tambah()
    {
        $data ['datakategori'] = $this->model_kelas->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/tambah' ,$data);
        $this->load->view('templates/footer');
    }
	
	public function tambah_aksi()
    {
        $id_kelas         = $this->input->post('id_kelas');
        $nama_kelas       = $this->input->post('nama_kelas');
        $nama_guru        = $this->input->post('nama_guru');

        $data = array (
            'id_kelas'        => $id_kelas,
            'nama_kelas'      => $nama_kelas,
            'nama_guru'       => $nama_guru,  

        );
        $this->model_guru->tambah_data($data, 'tbl_kelas');
        redirect('kelas/index/index');
    }
	public function edit($id_kelas)
    {
        $data ['datakategori'] = $this->model_kelas->getdata();
        $where = array('id_kelas' =>$id_kelas);
        $data['kelas'] = $this->model_kelas->edit_data($where, 'tbl_kelas')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/edit' ,$data );
        $this->load->view('templates/footer');

    }
	public function update()
    {
        $id_kelas         = $this->input->post('id_kelas');
        $nama_kelas       = $this->input->post('nama_kelas');
        $nama_guru        = $this->input->post('nama_guru');

        $data = array (
            'id_kelas'        => $id_kelas,
            'nama_kelas'      => $nama_kelas,
            'nama_guru'       => $nama_guru,
        );

        $where = array(
            'id_kelas' =>$id_kelas
        );

        $this->model_kelas->update_data($where,$data, 'tbl_kelas');
        redirect('kelas/index/index');
    }
	public function hapus($id_kelas)
    {
        $where = array('id_kelas' => $id_kelas);
        $this->model_kelas->hapus_data($where, 'tbl_kelas');
        redirect('kelas/index/index');
    }
	public function kembali()
    {
        redirect('kelas/index/index');
		
    }

}