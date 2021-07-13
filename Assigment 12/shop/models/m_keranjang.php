<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_keranjang extends CI_Model
{
    public function get_produk_all()
    {

        return $this->db->get('keahlian')->result_array();
    }

    
    public function get_produk_pagination($limit, $start)
    {
        
        return $this->db->get('tbl_produk', $limit, $start)->result_array();
    }

    public function count_all_data(){
        return $this->db->get('tbl_produk')->num_rows();

    }

    
    public function get_detail($detail)
    {
        $this->db->from('keahlian');
        //$this->db->join('mitra', 'tbl_produk.id_mitra=mitra.id_mitra', 'left');
        $this->db->where('id_keahlian', $detail);
        return $this->db->get()->row_array();
    }
    public function get_kategori_all()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }
    public function get_produk_id($id)
    {
        $this->db->select('tbl_produk.*,nama_kategori');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'kategori=tbl_kategori.id_kategori', 'left');
        $this->db->where('id_produk', $id);
        return $this->db->get();
    }
    
    
   public function find($search){
       $this->db->select('*');
       $this->db->from('tbl_produk');
       if ($search!= '') {
            $this->db->like('nama_produk', $search);
       }
      
       return $this->db->get()->result_array();
   }
} 
