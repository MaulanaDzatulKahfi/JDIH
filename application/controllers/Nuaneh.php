<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nuaneh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jdih_Model', 'Model');
        if (!$this->session->userdata('username')) {
            redirect('Welcome');
        }
    }
    public function index()
    {
        $data['judul'] = 'Data User';
        $data['user'] = $this->Model->tampil('user');
        $this->load->view('layout/header', $data);
        $this->load->view('nuaneh/index', $data);
        $this->load->view('layout/footer');
    }
    public function formtambah()
    {
        $this->_tambahuser();
    }
    private function _tambahuser()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', [
            'required' => 'harus diisi',
            'is_unique' =>  'username sudah ada'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password1]|min_length[6]', [
            'min_length' => 'minimal 6 karakter',
            'required' => 'harus diisi',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'trim|required', [
            'required' => 'harus diisi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Form Tambah User';
            $data['level'] = ['admin', 'user'];
            $this->load->view('layout/header', $data);
            $this->load->view('nuaneh/form_tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $user = htmlspecialchars($this->input->post('username'), true);
            $pass = htmlspecialchars($this->input->post('password'), true);
            $nama = htmlspecialchars($this->input->post('nama'), true);
            $data = [
                'username' => $user,
                'password' => password_hash($pass, PASSWORD_DEFAULT),
                'nama_user' => $nama
            ];
            $this->Model->tambah('user', $data);
            $this->session->set_flashdata('message', 'User Berhasil Ditambah');
            redirect('Nuaneh');
        }
    }
    public function formedit($id)
    {
        $this->_edituser($id);
    }
    private function _edituser($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'harus diisi'
        ]);
        $this->form_validation->set_rules('passBaru', 'Nama', 'trim|required|matches[passBaru1]|min_length[6]', [
            'min_length' => 'minimal 6 karakter',
            'required' => 'harus diisi',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('passBaru1', 'Nama', 'trim|required', [
            'required' => 'harus diisi'
        ]);

        $data['user'] = $this->Model->formedit('user', 'id_user', $id);
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Form Edit User';
            $data['level'] = ['admin', 'user'];
            $this->load->view('layout/header', $data);
            $this->load->view('nuaneh/form_edit', $data);
            $this->load->view('layout/footer');
        } else {
            $level = htmlspecialchars($this->input->post('level'), true);
            $nama = htmlspecialchars($this->input->post('nama'), true);
            $passLama = htmlspecialchars($this->input->post('passLama'), true);
            $passBaru = htmlspecialchars($this->input->post('passBaru'), true);
            if (!password_verify($passLama, $data['user']->password)) {
                $this->session->set_flashdata('message', 'Password yang anda masukan salah!');
                redirect('Nuaneh/formedit/' . $id);
            } else {
                if ($passLama == $passBaru) {
                    $this->session->set_flashdata('message', 'Password Tidak boleh sama, dengan password baru!');
                    redirect('Nuaneh/formedit/' . $id);
                } else {
                    $password = password_hash($passBaru, PASSWORD_DEFAULT);
                    $data = [
                        'nama_user' => $nama,
                        'password' => $password
                    ];
                    $this->Model->edit('user', 'id_user', $id, $data);
                    $this->session->set_flashdata('message', 'Data User Berhasil Diedit');
                    redirect('Nuaneh');
                }
            }
        }
    }
    public function hapus($id)
    {
        $this->Model->hapus('user', 'id_user', $id);
        $this->session->set_flashdata('message', 'User Berhasil Dihapus');
        redirect('Nuaneh');
    }
}
