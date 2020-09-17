<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_get_data');
	}


	public function portofolio(){
			$data['data_project'] = $this->M_get_data->get_project()->result();
			$data['data_blog'] = $this->M_get_data->get_project()->row_array();
		$data['data_about'] = $this->M_get_data->get_about()->result();
		$data['data_skill'] = $this->M_get_data->get_skil()->result();
		$data['data_bahasa'] = $this->M_get_data->get_bahasa()->result();
	
		$this->load->view('v_portofolio',$data);
	}

	public function sendemail(){
		$date = date("Y-m-d h:i:s");
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');
		$data = array(  'nama' => $nama,
						'email' => $email,
						'subjek' => $subjek,
						'pesan' => $pesan,
						'date' => $date);

		$pesan = '<div class="alert alert-dismissible fade show box-alert" style="
			background: #0069d9; color:white;"><h5> Thank You! for your message, '.  $nama .' </h5> 
			<button type ="button" class="close" data-dismiss="alert" aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
			</button>
										</div>' ;
		$this->M_get_data->kirim_pesan('tb_sendemail', $data);
		$this->session->set_flashdata('msg', $pesan);
		redirect("halaman/portofolio");
	}
/*
	public function testemail(){
		$config = array(
			    'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => '',
                'smtp_pass' => '',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1');
  		$this->load->library('email', $config);
        $this->email->set_newline("\r\n");   
		$this->email->from('usepgnwan76@gmail.com','USEP');
		$this->email->to('usepgnwan@gmail.com');
		$this->email->subject('hehe');
		$this->email->message('gagag');	
		return $this->email->send();	
	}
*/
}
