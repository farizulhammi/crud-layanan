<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Model
{
    public function read()
    {
        return $this->db->get('produk');
    }
    public function delete($id)
    {
        $this->db->delete('produk', $id);
    }
    public function add($data)
    {
        $this->db->insert("produk", $data);
    }
    /////
    public function get_kategori()
    {
        // $this->db->distinct();
        return $this->db->get("kategori");
    }
    public function get_produk($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori');
        $this->db->where($id);
        return $this->db->get();
    }
    public function update($id, $data)
    {
        $this->db->where($id);
        $this->db->update('produk', $data);
    }


    //////// KATEGORI
    public function delete_kat($id)
    {
        $this->db->delete('kategori', $id);
    }
    public function add_kat($data)
    {
        $this->db->insert('kategori', $data);
    }
    public function get_kat($id)
    {

        return $this->db->get_where('kategori', $id);
    }
    public function update_kat($id, $data)
    {
        $this->db->where($id);
        $this->db->update('kategori', $data);
    }
}
