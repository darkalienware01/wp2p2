<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelBuku extends CI_Model
{
	
    public function getBuku()
    {
        return $this->db->get('tbl_buku');
    }
    public function bukuWhere($where)
    {
        return $this->db->get_where('tbl_buku', $where);
    }
    public function simpanBuku($data = null)
    {
        $this->db->insert('tbl_buku', $data);
    }
    public function updateBuku($data = null, $where = null)
    {
        $this->db->update('tbl_buku', $data, $where);
    }
    public function hapusBuku($where = null)
    {
        $this->db->delete('tbl_buku', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0)
        {
            $this->db->where($where);
        }
        $this->db->from('tbl_buku');
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('tbl_kategori');
    }
    public function kategoriWhere($where)
    {
        return $this->db->get_where('tbl_kategori', $where);
    }
    public function simpanKategori($data = null)
    {
        $this->db->insert('tbl_kategori', $data);
    }
    public function hapusKategori($where = null)
    {
        $this->db->delete('tbl_kategori', $where);
    }
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('tbl_kategori', $data, $where);
    }
    //join
    public function joinKategoriBuku($where)
    {
        $this->db->select('tbl_buku.id_kategori,tbl_kategori.kategori');
        $this->db->from('tbl_buku');
        $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}

