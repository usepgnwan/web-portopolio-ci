<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('M_login');


	}
	public function admin(){
		if($this->session->userdata('status') != null){
			redirect(base_url("Admin/home"));
		}else{
			$this->load->view('login/login');
		}
		
	
	}
	public function action_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
			$where = array('username' => $username,
						   'password' => md5($password) );


	$cek = $this->M_login->cek_login("tb_login",$where)->num_rows();
		if($cek > 0){
	 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
	 
			$this->session->set_userdata($data_session);
	 
			redirect(base_url("Admin/home"));
		}else{
			$pesan = '<div  class="alert alert-danger alert-dismissible fade show box-alert text-center"><h5> Username atau Password Salah! </h5> 
			
										</div>' ;

		$this->session->set_flashdata('gagal', $pesan);
		redirect(base_url("Login/admin"));
		}


	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login/admin'));
	}
}