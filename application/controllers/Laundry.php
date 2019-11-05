<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laundry_model');
        $this->load->model('Order_model');
        
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Data Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laundry'] = $this->Laundry_model->getAllBarang();
        $data['layanan'] = $this->Laundry_model->getAllLayanan();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('laundry/index', $data);
        $this->load->view('templates/user_footer');
    }
    public function FunctionName(Type $var = null)
    {
        # code...
    }
    public function order()
    {
        $data['title'] = 'Order';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->Order_model->getAllOrder();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('laundry/order', $data);
        $this->load->view('templates/user_footer');
    }
    public function detailorder($id_order)
    {
        $data['title'] = 'Order Detail';
        $data['no'] = $id_order;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->Order_model->getOrderDetailById($id_order);
        $data['total'] = $this->Order_model->hitungTotal($id_order);

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('laundry/orderdetail', $data);
        $this->load->view('templates/user_footer');
    }
}


/* End of file Laundry.php */
