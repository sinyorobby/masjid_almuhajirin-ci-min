<?php

class Produk_model extends CI_Model
{
    public function get()
    {
        return $this->db->get('produk')->result_array();
    }

    public function countdata()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function getid($id = NULL)
    {
        if ($id == NULL) {
            return $this->db->get('produk')->result_array();
        } else {
            return $this->db->get_where('produk', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $upload_image = $_FILES['file_image']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 2048;
            $config['upload_path']  = './assets/img/upload/produk';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_image')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $newimage = $this->upload->data('file_name');
                $data = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                    'jenis' => htmlspecialchars($this->input->post('jenis', true)),
                    'stok' => htmlspecialchars($this->input->post('stok', true)),
                    'harga_beli' => htmlspecialchars($this->input->post('harga_beli', true)),
                    'harga_jual' => htmlspecialchars($this->input->post('harga_jual', true)),
                    'foto' => $newimage,
                ];
                $this->db->insert('produk', $data);
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id', TRUE));
        $nama = htmlspecialchars($this->input->post('nama', TRUE));
        $deskripsi = htmlspecialchars($this->input->post('deskripsi', TRUE));
        $jenis = htmlspecialchars($this->input->post('jenis', TRUE));
        $stok = htmlspecialchars($this->input->post('stok', TRUE));
        $harga_beli = htmlspecialchars($this->input->post('harga_beli', TRUE));
        $harga_jual = htmlspecialchars($this->input->post('harga_jual', TRUE));
        $upload_image = $_FILES['file_image']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 2048;
            $config['upload_path']  = './assets/img/upload/produk';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_image')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $newimage = $this->upload->data('file_name');
                $this->db->set('foto', $newimage);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('nama', $nama);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('jenis', $jenis);
        $this->db->set('stok', $stok);
        $this->db->set('harga_beli', $harga_beli);
        $this->db->set('harga_jual', $harga_jual);
        $this->db->where('id', $id);
        $this->db->update('produk');
    }

    public function hapus($id)
    {
        $this->db->delete('produk', ['id' => $id]);
    }
}
