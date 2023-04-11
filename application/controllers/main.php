<?php

class main extends CI_Controller {
	public function index()
	{
		$data["files"] = directory_map("./upload");
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('upload/main.php' ,$data);
		$this->load->view('templates/footer');
	}
	public function upload(){
		$config["upload_path"] = "./upload/";
		$config["allowed_types"] = "*";

		$this->load->library("upload" ,$config);

		if($this->upload->do_upload('file')){

		}else{
			echo "gagal upload file";
		}
		redirect('main/index');


	}

	public function delete($fileName){
		$fileName =urldecode($fileName);

		if(unlink("./upload/$fileName")){
			redirect("main");
		}else{
			echo "Gagal Menghapus File";
		}
		
	}
}
