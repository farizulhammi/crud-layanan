<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function index()
    {
        $data['produk'] = $this->layanan->read()->result_array();
        $this->load->view("page/produk/index.php", $data);
    }
    public function delete($id)
    {
        $data = [
            "id_produk" => $id
        ];
        $this->layanan->delete($data);
        redirect(base_url("Produk"));
    }
    public function TambahDataProduk()
    {
        $data['kat'] = $this->layanan->get_kategori()->result_array();
        $this->load->view("page/produk/add.php", $data);
    }
    public function add()
    {
        $id_kat = $this->input->post('kategori');
        $nama = $this->input->post('nama_produk');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');

        $data = [
            "id_kategori" => $id_kat,
            "nama_produk" => $nama,
            "stok" => $stok,
            "harga" => $harga
        ];
        $this->layanan->add($data);
        redirect(base_url("Produk"));
    }
    public function PerbaruiDataProduk($id)
    {
        $where = ['id_produk' => $id];
        $data['produk'] = $this->layanan->get_produk($where)->result_array();
        $data['kat'] = $this->layanan->get_kategori()->result_array();

        $this->load->view('page/produk/update.php', $data);
    }
    public function update()
    {
        $id_produk = $this->input->post('id_produk');
        $id_kat = $this->input->post('kategori');
        $nama = $this->input->post('nama_produk');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $data = [
            "id_kategori" => $id_kat,
            "nama_produk" => $nama,
            "stok" => $stok,
            "harga" => $harga
        ];
        $where = ['id_produk' => $id_produk];
        $this->layanan->update($where, $data);
        redirect(base_url("Produk"));
    }
}
