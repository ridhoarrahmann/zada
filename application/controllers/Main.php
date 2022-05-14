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


        $data['jumbotron_content'] = $this->db->get_where('content', ['name' => "jumbotron"])->row_array();
        $data['keunggulan_content'] = $this->db->get_where('content', ['name' => "keunggulan"])->row_array();
        $data['tentangKami_content'] = $this->db->get_where('content', ['name' => "tentang_kami"])->row_array();
        // $data['footer_alamat'] = $this->db->get_where('footer', ['name' => "alamat"])->row_array();
        // $data['footer_email'] = $this->db->get_where('footer', ['name' => 'email'])->row_array();
        // $data['footer_whatsapp'] = $this->db->get_where('footer', ['name' => "whatsapp"])->row_array();
        $data['footer']=$this->db->get('footer')->row_array();
        $data['top_produk']=$this->db->get('top_produk')->result_array();
        
        

      $this->load->view('index', $data);
    }
}
