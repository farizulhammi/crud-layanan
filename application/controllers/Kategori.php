<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function index()
    {
        $data['kat'] = $this->layanan->get_kategori()->result_array();
        $this->load->view('page/kategori/index.php', $data);
    }
    public function delete($id)
    {
        $data = [
            "id_kategori" => $id
        ];
        $this->layanan->delete_kat($data);
        redirect(base_url("Kategori"));
    }
    public function TambahDataKategori()
    {
        $this->load->view('page/kategori/add.php');
    }
    public function add()
    {
        $kat_ =  $this->input->post('nama_kategori');
        $data = ["nama_kategori" => $kat_];
        $this->layanan->add_kat($data);
        redirect(base_url('Kategori'));
    }
    public function PerbaruiDataKategori($id)
    {
        $where = ["id_kategori" => $id];
        $data['kat'] = $this->layanan->get_kat($where)->result_array();
        $this->load->view("page/kategori/update.php", $data);
    }
    public function update()
    {
        $id_kat = $this->input->post('id_kategori');
        $kat =  $this->input->post('nama_kategori');
        $data = ["nama_kategori" => $kat];
        $where = ["id_kategori" => $id_kat];
        $this->layanan->update_kat($where, $data);
        redirect(base_url("Kategori"));
    }
}
