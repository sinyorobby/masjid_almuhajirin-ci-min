<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin/dashboard');
        }
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            [
                'required' => 'Wajib Diisi',
                'valid_email' => 'Harus berupa email',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            [
                'required' => 'Wajib Diisi',
            ]
        );

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = "Auth - Admin Masjid Al-Muhajirin Sidoarjo";
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/auth/index');
            $this->load->view('admin/layout/footer');
        } else {
            $this->private_login();
        }
    }

    private function private_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    unset($user['password']);
                    $data = [
                        'email' => $user['email'],
                        'nama' => $user['nama'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin/dashboard');
                    } else {
                        redirect('admin/auth');
                    }
                } else {
                    $this->session->set_flashdata('user', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    <strong> Username/Password salah </strong> </div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('user', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                <strong> Username Tidak Aktif, Hubungi Admin!  </strong> </div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('user', '<div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong> Username Tidak Ada </strong> </div>');
            redirect('admin/auth');
            // redirect('auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email|is_unique[user.email] ',
            [
                'required' => 'Wajib Diisi',
                'valid_email' => 'Harus berupa email',
                'is_unique' => 'Email sudah terpakai'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|matches[password_confirm] ',
            [
                'required' => 'Wajib Diisi',
                'matches' => 'Password tidak sesuai'
            ]
        );
        $this->form_validation->set_rules(
            'password_confirm',
            'Password Confirmation',
            'required|matches[password] ',
            [
                'required' => 'Wajib Diisi',
                'matches' => 'Password tidak sesuai'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Auth - Admin Masjid Al-Muhajirin Sidoarjo";
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/auth/registration');
            $this->load->view('admin/layout/footer');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s');
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'created_date' => $now
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('user', '<div class="alert alert-success mt-2 mb-2" role="alert">
			Registrasi Akun <strong> Berhasil! </strong> Silahkan Login </div>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');
        $this->session->all_userdata();
        $this->session->set_flashdata('user', '<div class="alert alert-success mb-2 mt-2" role="alert">
        Anda Berhasil <strong>Logout </strong> </div>');
        redirect('admin/auth');
        // redirect('auth');
    }
}
