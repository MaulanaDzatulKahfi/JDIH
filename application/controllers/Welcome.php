<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jdih_Model');
	}
	public function index()
	{
		$data['judul'] = "Jdih";
		$data['jdih'] = $this->jdih_Model->tampil('produk_jdih');
		$this->load->view('layout/header', $data);
		$this->load->view('produk/index', $data);
		$this->load->view('layout/footer');
	}
	public function formtambah()
	{
		if (!$this->session->userdata('username')) {
			redirect('Auth');
		}
		$this->_tambah();
	}
	private function _tambah()
	{
		if (!$this->session->userdata('username')) {
			redirect('Auth');
		}
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('terbit', 'Terbit', 'trim|required|numeric', [
			'required' => 'harus diisi',
			'numeric' => 'harus berupa angka',
		]);
		$this->form_validation->set_rules('no_peraturan', 'No Peraturan', 'trim|required|numeric', [
			'required' => 'harus diisi',
			'numeric' => 'harus berupa angka',
		]);
		$this->form_validation->set_rules('singkatan', 'Singkatan', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('tempat_penetapan', 'Tempat_penetapan', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('abstrak', 'abstrak', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('sumber_peraturan', 'sumber peraturan', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('subjek', 'Subjek', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('status', 'Status', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', [
			'required' => 'harus diisi'
		]);
		if ($this->form_validation->run() === FALSE) {
			$data['judul'] = 'Form Tambah';
			$this->load->view('layout/header', $data);
			$this->load->view('produk/form_tambah');
			$this->load->view('layout/footer');
		} else {
			$judul = htmlspecialchars($this->input->post('judul'));
			$terbit = htmlspecialchars($this->input->post('terbit'));
			$no_peraturan = htmlspecialchars($this->input->post('no_peraturan'));
			$singkatan = htmlspecialchars($this->input->post('singkatan'));
			$tempat_penetapan = htmlspecialchars($this->input->post('tempat_penetapan'));
			$jenis = htmlspecialchars($this->input->post('jenis'));
			$abstrak = htmlspecialchars($this->input->post('abstrak'));
			$sumber_peraturan = htmlspecialchars($this->input->post('sumber_peraturan'));
			$subjek = htmlspecialchars($this->input->post('subjek'));
			$status = htmlspecialchars($this->input->post('status'));
			$tanggal = htmlspecialchars($this->input->post('tanggal'));
			$file = $_FILES['file']['name'];

			if ($file) {
				$config['allowed_types'] = 'pdf';
				$config['max_size'] = '10240';
				$config['upload_path'] = './assets/file/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')) {
					$file_baru = $this->upload->data('file_name');
					$data = [
						'jdihproduk_judul' => $judul,
						'jdihproduk_terbit' => $terbit,
						'jdihproduk_noperaturan' => $no_peraturan,
						'jdihproduk_singkatan' => $singkatan,
						'jdihproduk_tempatpenetapan' => $tempat_penetapan,
						'jdihproduk_jenis' => $jenis,
						'abstrak' => $abstrak,
						'jdihproduk_sumberperaturan' => $sumber_peraturan,
						'jdihproduk_subjek' => $subjek,
						'jdihproduk_status' => $status,
						'tanggal' => $tanggal,
						'jdihproduk_file' => $file_baru
					];
					$this->jdih_Model->tambah('produk_jdih', $data);
					$this->session->set_flashdata('message', 'Berhasil DiSimpan');
					redirect('Welcome');
				} else {
					$this->session->set_flashdata('message', $this->upload->display_errors());
					redirect('Welcome/formtambah');
				}
			} else {
				$this->session->set_flashdata('message', 'file tidak ada');
				redirect('Welcome/formtambah');
			}
		}
	}
	public function formedit($id)
	{
		if (!$this->session->userdata('username')) {
			redirect('Auth');
		}
		$this->_edit($id);
	}
	private function _edit($id)
	{
		if (!$this->session->userdata('username')) {
			redirect('Auth');
		}
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('terbit', 'Terbit', 'trim|required|numeric', [
			'required' => 'harus diisi',
			'numeric' => 'harus berupa angka',
		]);
		$this->form_validation->set_rules('no_peraturan', 'No Peraturan', 'trim|required|numeric', [
			'required' => 'harus diisi',
			'numeric' => 'harus berupa angka',
		]);
		$this->form_validation->set_rules('singkatan', 'Singkatan', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('tempat_penetapan', 'Tempat_penetapan', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('jenis', 'Jenis', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('abstrak', 'Abstrak', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('sumber_peraturan', 'sumber peraturan', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('subjek', 'Subjek', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('status', 'Status', 'trim|required', [
			'required' => 'harus diisi'
		]);
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', [
			'required' => 'harus diisi'
		]);
		if ($this->form_validation->run() === FALSE) {
			$data['jenis'] = ['Peraturan Dprd', 'Keputusan Dprd', 'Keputusan Pimpinan'];
			$data['sumber'] = ['Pimpinan', 'Dprd'];
			$data['status'] = ['Aktif', 'Non-Aktif', 'Dicabut'];
			$data['judul'] = 'Form Edit';
			$data['jdih'] = $this->jdih_Model->formedit('produk_jdih', 'id_jdihproduk', $id);
			$this->load->view('layout/header', $data);
			$this->load->view('produk/form_edit', $data);
			$this->load->view('layout/footer');
		} else {
			$jdih = $this->jdih_Model->formedit('produk_jdih', 'id_jdihproduk', $id);
			$judul = htmlspecialchars($this->input->post('judul'));
			$terbit = htmlspecialchars($this->input->post('terbit'));
			$no_peraturan = htmlspecialchars($this->input->post('no_peraturan'));
			$singkatan = htmlspecialchars($this->input->post('singkatan'));
			$tempat_penetapan = htmlspecialchars($this->input->post('tempat_penetapan'));
			$jenis = htmlspecialchars($this->input->post('jenis'));
			$abstrak = htmlspecialchars($this->input->post('abstrak'));
			$sumber_peraturan = htmlspecialchars($this->input->post('sumber_peraturan'));
			$subjek = htmlspecialchars($this->input->post('subjek'));
			$status = htmlspecialchars($this->input->post('status'));
			$tanggal = htmlspecialchars($this->input->post('tanggal'));
			$file = $_FILES['file']['name'];
			$data = [
				'jdihproduk_judul' => $judul,
				'jdihproduk_terbit' => $terbit,
				'jdihproduk_noperaturan' => $no_peraturan,
				'jdihproduk_singkatan' => $singkatan,
				'jdihproduk_tempatpenetapan' => $tempat_penetapan,
				'jdihproduk_jenis' => $jenis,
				'abstrak' => $abstrak,
				'jdihproduk_sumberperaturan' => $sumber_peraturan,
				'jdihproduk_subjek' => $subjek,
				'jdihproduk_status' => $status,
				'tanggal' => $tanggal
			];

			if ($file) {
				$config['allowed_types'] = 'pdf';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/file/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file')) {
					$file_lama = $jdih->jdihproduk_file;
					if ($file_lama) {
						unlink(FCPATH . 'assets/file/' . $file_lama);
					}
					$file_baru = $this->upload->data('file_name');

					$this->db->set('jdihproduk_file', $file_baru);
				} else {
					$this->session->set_flashdata('message', $this->upload->display_errors());
					redirect('Welcome/formedit/' . $jdih->id_jdihproduk);
				}
			}
			$this->db->where('id_jdihproduk', $id)->update('produk_jdih', $data);
			$this->session->set_flashdata('message', 'Berhasil Diedit');
			redirect('Welcome');
		}
	}
	public function detail($id)
	{
		$data['judul'] = 'Detail';
		$data['jdih'] = $this->jdih_Model->detail('produk_jdih', 'id_jdihproduk', $id);
		$this->load->view('layout/header', $data);
		$this->load->view('produk/detail', $data);
		$this->load->view('layout/footer');
	}
	public function hapus($id)
	{
		if (!$this->session->userdata('username')) {
			redirect('Auth');
		}
		$jdih = $this->jdih_Model->formedit('produk_jdih', 'id_jdihproduk', $id);
		$file_lama = $jdih->jdihproduk_file;
		unlink(FCPATH . 'assets/file/' . $file_lama);
		$this->jdih_Model->hapus('produk_jdih', 'id_jdihproduk', $id);
		$this->session->set_flashdata('message', 'Berhasil dihapus');
		redirect('welcome');
	}
}
