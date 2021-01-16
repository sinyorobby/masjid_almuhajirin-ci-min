<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }
    public function index()
    {
        $data['title'] = "Masjid Al-Muhajirin Sidokare";
        $data['footnote'] = "Masjid Al-Muhajirin";
        $data['modal_title'] = "Masjid Al-Muhajirin";
        $data['produk'] = $this->Produk_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('main/produk', $data);
        $this->load->view('layout/footnote', $data);
        $this->load->view('layout/footer');
    }
}
