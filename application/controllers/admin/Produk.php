<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Produk_model');
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['produk'] = $this->Produk_model->getid();
        $data['title'] = "Admin - Produk Masjid Al-Muhajirin Sidoarjo";
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/produk/index', $data);
        $this->load->view('admin/layout/footer');
        $this->load->view('admin/layout/configpage');
    }


    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'jenis',
            'Jenis Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'harga_beli',
            'Harga Beli Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'harga_jual',
            'Harga Jual Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = "Admin - Produk Masjid Al-Muhajirin Sidoarjo";
            $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/navbar', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/produk/tambah');
            $this->load->view('admin/layout/footer');
            $this->load->view('admin/layout/configpage');
        } else {
            $this->Produk_model->tambah();
            $this->session->set_flashdata('produk', 'Ditambah');
            redirect('admin/produk');
        }
    }

    public function ubah($id = '$id')
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'jenis',
            'Jenis Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'harga_beli',
            'Harga Beli Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'harga_jual',
            'Harga Jual Produk',
            'required',
            [
                'required' => 'Wajib diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Admin - Produk Masjid Al-Muhajirin Sidoarjo";
            $data['produk'] = $this->Produk_model->getid($id);
            $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/navbar', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/produk/ubah', $data);
            $this->load->view('admin/layout/footer');
            $this->load->view('admin/layout/configpage');
        } else {
            $this->Produk_model->ubah();
            $this->session->set_flashdata('produk', 'Diubah');
            redirect('admin/produk');
        }
    }

    public function hapus($id = '$id')
    {
        $this->form_validation->set_rules(
            'id',
            'Produk',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Admin - Produk Masjid Al-Muhajirin Sidoarjo";
            $data['produk'] = $this->Produk_model->getid($id);
            $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/navbar', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/produk/hapus', $data);
            $this->load->view('admin/layout/footer');
            $this->load->view('admin/layout/configpage');
        } else {
            $data = [
                'id' => htmlspecialchars($this->input->post('id', TRUE))
            ];
            $this->Produk_model->hapus($id);
            $this->session->set_flashdata('produk', 'Dihapus');
            redirect('admin/produk');
        }
    }
}
