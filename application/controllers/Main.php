<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $user = $this->db->get('admin')->result_array();


        $data['jumbotron'] = $this->db->get('jumbotron')->row_array();
        $data['logo']= $this->db->get('logo')->row_array();
        $data['tentangKami_content'] = $this->db->get_where('content', ['name' => "tentang_kami"])->row_array();
        // $data['footer_alamat'] = $this->db->get_where('footer', ['name' => "alamat"])->row_array();
        // $data['footer_email'] = $this->db->get_where('footer', ['name' => 'email'])->row_array();
        // $data['footer_whatsapp'] = $this->db->get_where('footer', ['name' => "whatsapp"])->row_array();
       
        $data['footer']=$this->db->get('footer')->row_array();
        $data['top_produk']=$this->db->get('top_produk')->result_array();
        // data keunggulan
        $data['top_produk1']=$this->db->get_where('top_produk',['id'=>1])->row_array();
        $data['top_produk2']=$this->db->get_where('top_produk',['id'=>2])->row_array();
        $data['top_produk3']=$this->db->get_where('top_produk',['id'=>3])->row_array();
        $data['keunggulan']=$this->db->get('keunggulan')->row_array();
        $data['gallery']=$this->db->get('gallery')->result();


      $this->load->view('index', $data);
    }
}
