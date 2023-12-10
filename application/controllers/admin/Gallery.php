<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
        $this->db->from('gallery');
		$gallery = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Halaman gallery',
            'gallery' => $gallery
		);
		$this->template->load('template_admin','admin/gallery_index',$data);
	}
    public function simpan()
    {
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/gallery';
        $config['max_size'] = 1280 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']        = 'png|jpeg|jpg';
        $config['file_name']            = $namafoto;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 1280 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 1000 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/gallery_index');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
			'judul' => $this->input->post('judul'),
			'foto' => $namafoto,
            'tanggal' => date('Y-m-d')
		);
        $this->db->insert('gallery',$data);
        $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
                        Berhasil menambahkan foto
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>');
        redirect('admin/gallery_index');
    }
    public function delete($id)
    {
        $filename=FCPATH.'/assets/upload/gallery/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/gallery/".$id);
            }
		$where = array('foto' => $id);
		$this->db->delete('gallery',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible" role="alert">
			Data dihapus
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		redirect('admin/gallery_index');
	}
}
