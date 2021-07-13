<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Shopping extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('m_keranjang');
    }
    public function index()
    {
        //load library
        $this->load->library('pagination');
        //pagination
        $config['base_url'] = 'http://localhost/ecommers/shop/shopping/index';
        $config['total_rows'] = $this->m_keranjang->count_all_data();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 3;
        
        $data['start'] = $this->uri->segment(4);

        // Agar bisa mengganti stylenya sesuai class2 yg ada dibootstrap
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // End style pagination

        $this->pagination->initialize($config);

        $data['title'] = "Layanan";
        $data['prodall']  = $this->m_keranjang->get_produk_pagination($config['per_page'], $data['start']);
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        //W$this->load->view('template/shop/topbar_shop', $data);
        // $this->load->view('template/shop/sidebar_shop', $data);
        $this->load->view('shopping/product', $data);
        $this->load->view('template/shop/footer_shop');
    }

   
    public function detail($id)
    {
        $data['title'] = "Detail";
        $data['produk'] = $this->m_keranjang->get_detail($id);
        $data['prodall']  = $this->m_keranjang->get_produk_all();

        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('shopping/detail', $data);
        $this->load->view('template/shop/footer_shop');
    }
    public function cart()
    {
        $data['title'] = "Cart";
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('shopping/cart', $data);
        $this->load->view('template/shop/footer_shop');
    }
    public function checkout()
    {
        $data['title'] = "Order";
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('template/shop/header_shop', $data);
        $this->load->view('template/shop/navbar_shop', $data);
        $this->load->view('template/shop/topbar_shop', $data);
        $this->load->view('shopping/checkout', $data);
        $this->load->view('template/shop/footer_shop');
    }
    

    public function cari()
    {
        $search = $_GET['search'];
        $data['produk']  = $this->m_keranjang->find($search);
        $hasil = $this->load->view('shopping/view_search', $data);

    }
}
