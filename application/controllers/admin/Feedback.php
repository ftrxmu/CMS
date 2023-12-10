<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }
	public function index()
	{
        $this->db->from('saran');
		$saran = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Halaman Feedback',
            'saran' => $saran
		);
		$this->template->load('template_admin','admin/feedback_index',$data);
	}
    public function delete($id)
    {
		$where = array('id_saran' => $id);
		$this->db->delete('saran',$where);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible" role="alert">
			Data dihapus
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		redirect('admin/feedback');
	}
}

