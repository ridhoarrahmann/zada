<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
    public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}
     
    public function index(){
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run($this)==false){
			$this->load->view('login');
		}
		else{
			$this->_login();
            
		}
	}
	
	private function _login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$user = $this->db->get_where('admin',['username'=>$username])->row_array();
		if($username){
			if(password_verify($password, $user['password'])){
				$data['user']=array(
					'id'=>$user['id'],
					'username'=>$user['username'],
				);
				$this->session->set_userdata(array('username' => $user['username'],));
				echo "sukses";
				redirect('admin');
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
				password salah
				</div>');
				redirect('auth');	
			}
		}
		else{
			$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
			Username Salah
			  </div>');
			  redirect('auth');
		}
	}	

    public function register(){
       

            
            $this->form_validation->set_rules('username','Username','required|trim');   
            $this->form_validation->set_rules('password1','Password1','required|trim|min_length[3]|matches[password2]');
            $this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');
        
    
            if($this->form_validation->run($this)==false){
                $this->load->view('register');
            }
            else{
                // berhasil 
                $data = [ 
                    'username'=> htmlspecialchars($this->input->post('username',true)),
           
                    'password'=> password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                  
					'avatar'=>'user.png'
                ];
                $this->db->insert('admin', $data);
                $this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
                Please Login
              </div>');
                redirect('auth');
            }
        
    }
	public function logout(){
		$this->session->unset_userdata('username');
		redirect('auth');
	}
}
