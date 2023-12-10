<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
		if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
    }
	public function index()
	{
        $this->db->from('user');
		$this->db->order_by('level','ASC');
		$user = $this->db->get()->result_array();
		
		$data = array(
			'judul_halaman' => 'Halaman User',
            'user' => $user
		);
		$this->template->load('template_admin','admin/user_index',$data);
	}
    public function simpan()
    {
        $this->db->from('user');
		$this->db->where('username',$this->input->post('username'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible" role="alert">
			Username telah digunakan
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		  redirect('admin/user');	
		}
        $this->User_model->simpan();
        $this->session->set_flashdata('alert','<div class="alert alert-primary alert-dismissible" role="alert">
                        Berhasil
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>');
        redirect('admin/user');
    }
    public function update(){
        $where = array(
            'id_user' => $this->input->post('id_user')
		);
        $data = array(
            'nama' => $this->input->post('nama')
        );
		$this->db->update('user',$data,$where);
        $this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible" role="alert">
			Data diupdate
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
        redirect('admin/user');
	}
    public function delete($id)
    {
		$where = array('id_user' => $id);
		$this->db->delete('user',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible" role="alert">
			Data dihapus
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		redirect('admin/user');
	}
}
