<?php

class index extends CI_Controller {


	public function index()
	{
		$data['user']  = $this->model_user->tampil_data()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/index' ,$data);
        $this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$where = array('id' =>$id); 
        $data['update'] = $this->model_user->edit_data($where,'tb_user')->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/edit' ,$data);
        $this->load->view('templates/footer');
	}
	public function update()
    {
        $id        		= $this->input->post('id');
        $nama       	= $this->input->post('nama');
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $role_id    	= $this->input->post('role_id');

        $data = array (
            'nama'      => $nama, 
            'username'  => $username,
            'password'  => $password,
            'role_id'  	=> $role_id,


        );

        $where = array(
            'id' =>$id
        );

        $this->model_user->update_data($where,$data, 'tb_user');
        redirect('user/index/index');
    }
}