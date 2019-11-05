<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry_model extends CI_Model 
{
    public function getAllBarang()
    {
        $this->db->select('*');
        $this->db->order_by('kode_barang', 'asc');
        $this->db->from('barang');
        $this->db->join('layanan', 'layanan.kode_layanan = barang.kode_layanan');
        
        return $this->db->get()->result_array();
    }
    public function getAllLayanan()
    {
        return $this->db->get('layanan')->result_array();
    }
}


/* End of file Laundry_model.php */
