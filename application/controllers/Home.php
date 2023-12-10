<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('gallery');
		$this->db->order_by('judul','DESC');
		$this->db->limit(3);
		$gallery = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul' => "Beranda | Rapi",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'gallery' => $gallery,
			'konten' => $konten
		);
		$this->load->view('beranda',$data);
	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul' => $nama_kategori." | Rapi",
			'nama_kategori' => $nama_kategori,
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten
		);
		$this->load->view('kategori',$data);
	}
	public function artikel($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();


		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$this->db->limit(5);
		$recent = $this->db->get()->result_array();

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->where('slug',$id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul' => $konten->judul." | Rapi",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'recent' => $recent,
			'konten' => $konten
		);
		$this->load->view('detail',$data);
	}
	public function galeri()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('gallery');
		$this->db->order_by('tanggal','DESC');
		$gallery = $this->db->get()->result_array();

		$data = array(
			'judul' => "Galeri | Rapi",
			'gallery' => $gallery,
			'kategori' => $kategori,
			'konfig' => $konfig,
		);
		$this->load->view('gallery',$data);
	}
	public function feedback()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$data = array(
			'judul' => "Feedback | Rapi",
			'kategori' => $kategori,
			'konfig' => $konfig,
		);
		$this->load->view('feedback',$data);
	}
	public function addfeedback()
	{
		$this->db->from('saran');
		$data1 = array(
			'isi_saran' => $this->input->post('isi_saran'),
			'tanggal' => date('Y-m-d'),
			'nama' => $this->session->userdata('nama')
		);
		$this->db->insert('saran',$data1);
		redirect('feedback');
	}
}
