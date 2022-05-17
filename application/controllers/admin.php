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
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('admin_dashboard');
		$this->load->view('layout/admin/footer');
	}
	public function change_jumbotron()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['jumbotron']=$this->db->get('jumbotron')->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('jumbotron_edit');
		$this->load->view('layout/admin/footer');
	}
	public function changeJumbotron()
	{
		$jumbotron_top = $this->input->post('jumbotron-top');
		$jumbotron_bottom = $this->input->post('jumbotron-bottom');
		
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
               

    	 $this->load->library('upload', $config);
		 if ( $this->upload->do_upload('jumbotron_logo'))
		 {
			 $image = $this->upload->data('file_name');   
				//  $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				//  $this->load->view('upload_form', $error);
					
			$update_data = [
			
			'jumbotron_top' => $jumbotron_top,
			'jumbotron_bottom'=>$jumbotron_bottom,
			'logo'=>$image
			];
			$this->db->where('name','jumbotron');
			$this->db->update('jumbotron',$update_data);	

		 }
		 else
		 {
			$update_data = [
			
				'jumbotron_top' => $jumbotron_top,
				'jumbotron_bottom'=>$jumbotron_bottom
				
				];
		$this->db->where('name','jumbotron');
		$this->db->update('jumbotron',$update_data);
		 }
		

		// $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		// $this->db->where("name", 'jumbotron');
		// $this->db->update('jumbotron',$update_data);
		// $this->load->view('layout/admin/header', $data);
		// $this->load->view('layout/admin/sidebar');
		// $this->load->view('layout/admin/navbar', $data);
		// $this->load->view('jumbotron_edit');
		// $this->load->view('layout/admin/footer');
		redirect('admin/change_jumbotron');
	}

	public function change_keunggulan()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['keunggulan']=$this->db->get('keunggulan')->row_array();
		
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('keunggulan_edit',$data);
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
		$this->db->update('keunggulan', $update_data);
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('keunggulan_edit');
		$this->load->view('layout/admin/footer');
	}
	public function changeTentangKami()
	{   $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['tentang_kami']=$this->db->get_where('tentang_kami',['name'=>'tentang_kami'])->row_array();
		
		
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('tentang_kami_edit');
		$this->load->view('layout/admin/footer');
			
	}
	public function edit_tentang_kami(){
		$tentang_kami_update = $this->input->post('tentang_kami-content');
		$update_data = [
			'content' => $tentang_kami_update,
		];
		
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("name", 'tentang_kami');
		$this->db->update('tentang_kami', $update_data);
		redirect('admin/changeTentangKami');
	}
	public function changeFooter()
	{
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['top_produk']=$this->db->get('top_produk')->row_array();
		$data['footer']=$this->db->get('footer')->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
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
			'link_facebook'=>$this->input->post('link_facebook'),
			'link_instagram'=>$this->input->post('link_instagram')
		];
		$this->db->where('id',1);
		$this->db->update('footer',$footer_update);
		redirect('admin/changeFooter');
	}

	public function topProduk(){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk']=$this->db->get('top_produk')->result_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('admin_top_produk',$data);
		$this->load->view('layout/admin/footer');
	}
	public function changeTopProduk($id){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk']=$this->db->get_where('top_produk',['id'=>$id])->row_array();
		
		

		
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('top_produk_edit',$data);
		$this->load->view('layout/admin/footer');
		
		
	}
	public function update_top_produk($id){
		
		
		// $this->db->where('id',$id);
		// $this->db->update('top_produk',$update);


		$upload_image=$_FILES['image']['name'];
		
		
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
               

    	 $this->load->library('upload', $config);
		 if ( $this->upload->do_upload('image'))
		 {
			 $image = $this->upload->data('file_name');   
				//  $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				//  $this->load->view('upload_form', $error);
			$update=[
				
					'title'=>$this->input->post('header'),
					'description'=>$this->input->post('description'),
					'img'=>$image
				];	
			$this->db->where('id',$id);
			$this->db->update('top_produk',$update);
			redirect('admin/topProduk');	

		 }
		 else
		 {
			$update=[
			
				'title'=>$this->input->post('header'),
				'description'=>$this->input->post('description'),
				
			];	
		$this->db->where('id',$id);
		$this->db->update('top_produk',$update);
		redirect('admin/topProduk');
	}
		
	}
	public function edit_admin_profile(){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('admin_edit',$data);
		$this->load->view('layout/admin/footer');
	}
	public function editadmin(){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$update=[
			'username'=>$this->input->post('username')
		];
		$this->db->where('username',$this->session->userdata('username'));
		$this->db>update('user',$update);
		$this->session->set_userdata('email',);
		
	}
	public function doUpload(){
		$upload_image=$_FILES['image']['name'];

		
		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
               

    	 $this->load->library('upload', $config);
		 if ( $this->upload->do_upload('image'))
		 {
			 $image = $this->upload->data('file_name');   
				//  $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				//  $this->load->view('upload_form', $error);
				echo 'succes';
		 }
		 else
		 {
				// $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				echo'error';
				//  $this->load->view('upload_success', $data);
		 }
		}
		public function gallery(){
			$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['gallery']=$this->db->get('gallery')->result_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('admin_gallery',$data);
		$this->load->view('layout/admin/footer');
		
		}
		public function galleryForm($name){
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data['gallery']=$this->db->get_where('gallery',['name'=> $name])->row_array();
		$this->load->view('layout/admin/header', $data);
		$this->load->view('layout/admin/sidebar',$data);
		$this->load->view('layout/admin/navbar', $data);
		$this->load->view('gallery_edit',$data);
		$this->load->view('layout/admin/footer');
		
		}
		public function update_gallery($name){
			$upload_image=$_FILES['image']['name'];

		
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
               

    	 $this->load->library('upload', $config);
		 if ( $this->upload->do_upload('image'))
		 {
			 $image = $this->upload->data('file_name');   
				//  $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				//  $this->load->view('upload_form', $error);
			$update=[
			
					'name'=>$this->input->post('name'),
					
					'img'=>$image
				];	
			$this->db->where('name',$name);
			$this->db->update('gallery',$update);	
			redirect('admin/gallery');
		 }
		 else
		 {
			$update=[
			
				'name'=>$this->input->post('name'),
				
				
			];	
		$this->db->where('name',$name);
		$this->db->update('gallery',$update);
		redirect('admin/gallery');
		 }
		
		}
		public function change_logo(){
			$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
			$data['logo']=$this->db->get('logo')->row_array();
			$this->load->view('layout/admin/header', $data);
			$this->load->view('layout/admin/sidebar',$data);
			$this->load->view('layout/admin/navbar', $data);
			$this->load->view('logo_edit',$data);
			$this->load->view('layout/admin/footer');
				
		}
		public function update_logo(){
		

		
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
               

    	 $this->load->library('upload', $config);
		 if ( $this->upload->do_upload('logo'))
		 {
			 $image = $this->upload->data('file_name');   
				//  $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				//  $this->load->view('upload_form', $error);
			$update=[
			
					'logo'=>$image
				];	
			$this->db->where('name','logo');
			$this->db->update('logo',$update);	
			redirect('admin/change_logo');
		 }
		}
		public function change_avatar(){
			$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
			$data['logo']=$this->db->get('logo')->row_array();
			$user_edit=$this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
			$this->load->view('layout/admin/header', $data);
			$this->load->view('layout/admin/sidebar',$data);
			$this->load->view('layout/admin/navbar', $data);
			$this->load->view('avatar_edit',$data);
			$this->load->view('layout/admin/footer');			
			$config['upload_path']          = './assets/img/user/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
               

    	 $this->load->library('upload', $config);
		 if ( $this->upload->do_upload('avatar'))
		 {
			 $image = $this->upload->data('file_name');   
				//  $error = array('error' => $this->upload->display_errors());
				//  $data = array('upload_data' => $this->upload->data());
				//  $this->load->view('upload_form', $error);
			$update=[
			
					'avatar'=>$image
				];	
			$this->db->where('username',$user_edit['username']);
			$this->db->update('admin',$update);	
			redirect('admin/change_avatar');
		 }
		 else{
			
		 }		
		}
}
