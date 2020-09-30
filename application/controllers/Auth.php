<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->_login();
    }
    private function _login()
    {
        $this->load->model('jdih_Model', 'Model');

        if ($this->session->userdata('username')) {
            redirect('Welcome');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login';
            $this->load->view('layout/header', $data);
            $this->load->view('login');
            $this->load->view('layout/footer');
        } else {
            $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
            $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

            $u = $this->Model->formedit('user', 'username', $username);
            if ($u) {
                if (password_verify($password, $u->password)) {
                    $data = [
                        'id_user' => $u->id_user,
                        'nama_user' => $u->nama_user,
                        'username' => $u->username,
                    ];
                    $this->session->set_userdata($data);
                    redirect('Welcome');
                } else {
                    $this->session->set_flashdata('message', 'password salah!!!');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', 'username tidak terdaftar!!!');
                redirect('Auth');
            }
        }
    }
    public function logout()
    {
        session_destroy();
        redirect('Welcome');
    }
}
