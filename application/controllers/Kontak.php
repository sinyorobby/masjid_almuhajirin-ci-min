<?php
class Kontak extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Masjid Al-Muhajirin Sidokare";
        $data['footnote'] = "Masjid Al-Muhajirin";
        $data['modal_title'] = "Masjid Al-Muhajirin";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('main/kontak');
        $this->load->view('layout/footnote', $data);
        $this->load->view('layout/footer');
    }
}
