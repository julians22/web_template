<?php
class Order_model extends CI_Model 
{
    public function getAllOrder()
    {
        return $this->db->get('order_satuan')->result_array();
    }
    public function getPendapatan()
    {
        $this->db->select_sum('total_harga');
        $query = $this->db->get('order_satuan');
        if ($query->num_rows() > 0) {
            return $query->row()->total_harga;
        }else {
            return 0;
        }
    }
    public function getOrderDetailById($id_order)
    {
        return $this->db->get_where('detail_order_satuan', ['id_order' => $id_order])->result_array();
    }
    public function hitungTotal($id_order)
    {
        $this->db->select_sum('subtotal');
        $this->db->where('id_order', $id_order);
        $query = $this->db->get('detail_order_satuan');
        if ($query->num_rows() > 0) {
            return $query->row()->subtotal;
        }else {
            return 0;
        }
    }
}
