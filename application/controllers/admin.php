<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('admin_dashboard');
		$this->load->view('layout/admin/footer');
	}
	public function change_jumbotron()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('jumbotron_edit');
		$this->load->view('layout/admin/footer');
	}
	public function changeJumbotron()
	{
		$jumbotron_update = $this->input->post('jumbotron-content');
		$update_data = [
			'content' => $jumbotron_update,
		];
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("name", 'jumbotron');
		$this->db->update('content', $update_data);
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('jumbotron_edit');
		$this->load->view('layout/admin/footer');
	}
	public function change_keunggulan()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('keunggulan_edit');
		$this->load->view('layout/admin/footer');
	}
	public function changeKeunggulan()
	{
		$keunggulan_update = $this->input->post('keunggulan-content');
		$update_data = [
			'content' => $keunggulan_update,
		];
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("name", 'keunggulan');
		$this->db->update('content', $update_data);
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('keunggulan_edit');
		$this->load->view('layout/admin/footer');
	}
	public function changeTentangKami()
	{
		$tentang_kami_update = $this->input->post('tentang_kami-content');
		$update_data = [
			'content' => $tentang_kami_update,
		];
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("name", 'tentang_kami');
		$this->db->update('content', $update_data);
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('tentang_kami_edit');
		$this->load->view('layout/admin/footer');
	}
	public function changeFooter()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['footer']=$this->db->get('footer')->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('footer_edit',$data);
		$this->load->view('layout/admin/footer');
	
		// $this->input->post('tentang_kami-content');
	}
	public function change_footer(){
		$footer_update = [
			'alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'whatsapp'=>$this->input->post('whatsapp'),
		];
		$this->db->where('id',1);
		$this->db->update('footer',$footer_update);
		redirect('admin/changeFooter');
	}

	public function topProduk(){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk']=$this->db->get('top_produk')->result_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('admin_top_produk',$data);
		$this->load->view('layout/admin/footer');
	}
	public function changeTopProduk($id){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk']=$this->db->get_where('top_produk',['id'=>$id])->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('top_produk_edit',$data);
		$this->load->view('layout/admin/footer');
	}
}
