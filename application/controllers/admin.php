<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	
	
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
		$data['user'] = $this->db->get_where('admin',['username'=>$this->session->userdata('username')])->row_array();
        $this->load->view('layout/admin/header',$data);
        $this->load->view('layout/admin/sidebar');
        $this->load->view('layout/admin/navbar',$data);
        $this->load->view('admin_dashboard');	
        $this->load->view('layout/admin/footer');

    }
	public function change_jumbotron(){
		$data['user'] = $this->db->get_where('admin',['username'=>$this->session->userdata('username')])->row_array();
		$this->load->view('layout/admin/header',$data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar',$data);
		$this->load->view('jumbotron_edit');	
		$this->load->view('layout/admin/footer');
	}
	public function changeJumbotron(){
		$jumbotron_update=$this->input->post('jumbotron-content');
		$update_data=[
			'content'=>$jumbotron_update, 
		];
		$data['user'] = $this->db->get_where('admin',['username'=>$this->session->userdata('username')])->row_array();
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("name",'jumbotron');
		$this->db->update('content',$update_data);
		$this->load->view('layout/admin/header',$data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar',$data);
		$this->load->view('jumbotron_edit');	
		$this->load->view('layout/admin/footer');
	}
	public function change_keunggulan(){
		$data['user'] = $this->db->get_where('admin',['username'=>$this->session->userdata('username')])->row_array();
		$this->load->view('layout/admin/header',$data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar',$data);
		$this->load->view('keunggulan_edit');	
		$this->load->view('layout/admin/footer');
	}
	public function changeKeunggulan(){
		$keunggulan_update=$this->input->post('keunggulan-content');
		$update_data=[
			'content'=>$keunggulan_update, 
		];
		$data['user'] = $this->db->get_where('admin',['username'=>$this->session->userdata('username')])->row_array();
		// $data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("name",'keunggulan');
		$this->db->update('content',$update_data);
		$this->load->view('layout/admin/header',$data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar',$data);
		$this->load->view('keunggulan_edit');	
		$this->load->view('layout/admin/footer');
	}
	public function changeGallery(){
		$data['user'] = $this->db->get_where('admin',['username'=>$this->session->userdata('username')])->row_array();
		$this->load->view('layout/admin/header',$data);
		$this->load->view('layout/admin/sidebar');
		$this->load->view('layout/admin/navbar',$data);
		$this->load->view('gallery_edit');	
		$this->load->view('layout/admin/footer');

		
	}
	public function uploadGallery(){
		$config['upload_path']          = base_url('/assets/img/');
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 0;
    $config['max_width']            = 0;
    $config['max_height']           = 0;
    $this->load->library('upload', $config);
    // if (!$this->upload->do_upload('userfile')){
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->load->view('upload', $error);
    // }else{
        $_data = array('upload_data' => $this->upload->data());
         $data = array(
            // 'title'=> $this->input->post('title'),
            'image' => $_data['upload_data']['file_name']
            );
        $query = $this->db->insert('upload',$data);
        if($query){
            echo 'berhasil di upload';
            redirect('upload_gambar');
        }else{
            echo 'gagal upload';
        }
    // }
	}


	
    


	
		
	

	
}
