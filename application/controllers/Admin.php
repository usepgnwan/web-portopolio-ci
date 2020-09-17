<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login/admin"));
		}
		$this->load->model('M_get_data');
		$this->load->model('M_bahasa');
		$this->load->model('M_email');
		$this->load->model('M_skill');
		$this->load->model('M_upload');

	}

		public function home()
	{
		$data['data_about'] = $this->M_get_data->get_about()->result();

		$data['jumlah_email'] = $this->M_get_data->jumlah_email();
		$data['data_email_batas'] = $this->M_get_data->get_email_notif()->result();

		$data['data_foto'] = $this->M_upload->get_test()->row_array();
		$data['error'] = '';
		$this->template->load('v_template_admin','v_about',$data );
	}

	public function delete_foto_profil($id){
		$data = $this->M_upload->get_test()->row();
		$nama = './file/images/'.$data->foto;
		if (is_readable($nama) && unlink($nama)) {
			$delete = $this->M_upload->hapus_file($id);
			redirect('admin/home');
		}else{
			echo "gagal";
		}
	}
	public function update_foto()
        
        {
				$config['upload_path']          = './file/images';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 4000;
                $config['max_height']           = 4000;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                      $error = $this->upload->display_errors();
                      $this->session->set_flashdata('gagal', $error);
                      redirect('admin/home');      
                }
                else
                {		

	        	$id_biodata = $this->input->post('id_biodata');
	           	$data = $this->M_upload->get_test()->row();
				$nama = './file/images/'.$data->foto;
					if (is_readable($nama) && unlink($nama)) {
	                		$upload_data = $this->upload->data();
	                		$nama = $upload_data['file_name'];
	                        $sukses = "Sukses Ganti profil";
							$datas = array('foto' => $nama);

							$update = $this->M_upload->update_poto($id_biodata, $datas,'tb_biodata');
	                        $this->session->set_flashdata('gagal', $sukses);	
							redirect('admin/home');
	                }else{
	                	$this->session->set_flashdata('gagal', 'gagal');
					}
                }
			
                
        }

        	public function update_cv()
        
        {
				$config['upload_path']          = './file/cv';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 12048;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                      $error = $this->upload->display_errors();
                      $this->session->set_flashdata('gagalcv', $error);
                      redirect('admin/home');      
                }
                else
                {		

	        	$id_biodata = $this->input->post('id_biodata');
	           	$data = $this->M_upload->get_test()->row();
				$nama = './file/cv/'.$data->cv;
					if (is_readable($nama) && unlink($nama)) {
	                		$upload_data = $this->upload->data();
	                		$nama = $upload_data['file_name'];
	                        $sukses = "Sukses Ganti CV";
							$datas = array('cv' => $nama);

							$update = $this->M_upload->update_cv($id_biodata, $datas,'tb_biodata');
	                        $this->session->set_flashdata('gagalcv', $sukses);	
							redirect('admin/home');
	                }else{
	                	$this->session->set_flashdata('gagalcv', 'gagal');
					}
                }
			
                
        }








			public function skill()
	{
		$data['data_project'] = $this->M_get_data->get_project()->result();
		$data['data_skill'] = $this->M_get_data->get_skil()->result();
		$data['data_bahasa'] = $this->M_get_data->get_bahasa()->result();
		$data['jumlah_email'] = $this->M_get_data->jumlah_email();
		$data['data_email_batas'] = $this->M_get_data->get_email_notif()->result();
		$this->template->load('v_template_admin','v_skill',$data);
	}
		public function email()
	{
		$data['data_email'] = $this->M_get_data->get_email()->result();
		$data['data_email_batas'] = $this->M_get_data->get_email_notif()->result();
		$data['jumlah_email'] = $this->M_get_data->jumlah_email();
		$this->template->load('v_template_admin','v_email',$data);
	}
	public function update_biodata(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$moto = $this->input->post('moto');
		$profesi = $this->input->post('profesi');
		$ttl = $this->input->post('ttl');

		$data =  array(
						'nama' => $nama,
						'ttl' => $ttl,
						'address' => $address,
						'phone' => $phone,
						'email' => $email,
						'moto' => $moto,
						'profesi' => $profesi
						);
		$where = array('id_biodata' => $id );
		$this->M_get_data->updatebiodata($where,$data, 'tb_biodata');
		redirect('admin/home');
	}

	public function update_project(){
		$jumlah = $this->input->post('jumlah');
		$id = $this->input->post('id');
		$alamat = $this->input->post('alamat');		
		$alamat_blog = $this->input->post('alamat_blog');
		$jml = array('jumlah' => $jumlah,
					  'alamat' => $alamat,
					  'alamat_blog' =>$alamat_blog);
		$where = array('id_project' => $id );
		$this->M_get_data->updateproject($where,$jml, 'tb_project');
		redirect('admin/skill');
	}
	public function tambah_skill(){
		$lable = $this->input->post('label');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'jumlah' => $jumlah,
						'label' => $lable );
		 $this->M_get_data->simpan_skill($data,'tb_skill');
        redirect('admin/skill');
	}


	/*server side skill*/
	    public function ajax_list_skil()
    {
        $list = $this->M_skill->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
           $no++;
            $row = array();
             $row[] =  "<center>$no<center>";
            $row[] = $key->label;
            $row[] = $key->jumlah;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_skill('."'".$key->id_skill."'".')"><i class="fas fa-edit"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_skill('."'".$key->id_skill."'".')"><i class="fas fa-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_skill->count_all(),
                        "recordsFiltered" => $this->M_skill->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

	}
	/*penutup server side*/
	    public function ajax_delete_skill($id)
    {
        $this->M_skill->delete_skill_id($id);
        echo json_encode(array("status" => TRUE));
    }

       public function add_skill()
    {
        $data = array(
                'label' => $this->input->post('label'),
                'jumlah' => $this->input->post('jumlah'),
              
            );

        $insert = $this->M_skill->save_skill($data);
     
        echo json_encode(array("status" => TRUE));
    }

        public function ajax_edit_skill($id)
    {
        $data = $this->M_skill->get_by_id($id);
        
        echo json_encode($data);
    }
      public function ajax_update_skill()
    {
        $data = array(
                'label' => $this->input->post('label'),
                'jumlah' => $this->input->post('jumlah')
            );
        $this->M_skill->update_skill(array('id_skill' => $this->input->post('id_skill')), $data);
        echo json_encode(array("status" => TRUE));
    }
	/*penutup crud skill*/

		    public function ajax_list_bahasa()
	    {
	        $list = $this->M_bahasa->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $key) {
	           $no++;
	            $row = array();
	             $row[] =  "<center>$no<center>";
	            $row[] = $key->label;
	            $row[] = $key->jumlah;
	            //add html for action
	            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_bahasa('."'".$key->id_bahasa."'".')"><i class="fas fa-edit"></i> Edit</a>
	                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_bahasa('."'".$key->id_bahasa."'".')"><i class="fas fa-trash"></i> Delete</a>';
	         
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                        "recordsTotal" => $this->M_bahasa->count_all(),
	                        "recordsFiltered" => $this->M_bahasa->count_filtered(),
	                        "data" => $data,
	                );
	        //output to json format
	        echo json_encode($output);

		}

		/*penutup server side*/
		    public function ajax_delete_bahasa($id)
	    {
	        $this->M_bahasa->delete_bahasa_id($id);
	        echo json_encode(array("status" => TRUE));
	    }
	       public function add_bahasa()
	    {
	        $data = array(
	                'label' => $this->input->post('label'),
	                'jumlah' => $this->input->post('jumlah'),
	              
	            );
	        $insert = $this->M_bahasa->save_bahasa($data);
	        echo json_encode(array("status" => TRUE));
	    }
	    public function ajax_edit_bahasa($id)
	    {
	        $data = $this->M_bahasa->get_by_id($id);
	        
	        echo json_encode($data);
	    }
	     public function ajax_update_bahasa()
	    {
	        $data = array(
	                'label' => $this->input->post('label'),
	                'jumlah' => $this->input->post('jumlah')
	            );
	        $this->M_bahasa->update_bahasa(array('id_bahasa' => $this->input->post('id_skill')), $data);
	        echo json_encode(array("status" => TRUE));
	    }
		/*penutup bahasa*/
		/*server side send mail*/
		public function ajax_list_send_email()
	    {
	        $list = $this->M_email->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $key) {
	            $no++;
	            $row = array();
	            $row[] =  "<center>$no<center>";
	            $row[] = $key->nama;
	            $row[] = $key->email;
	            $row[] = $key->subjek;
	            $row[] = $key->pesan;
	            $row[] = $key->date;
	            //add html for action
	            $row[] = '
	                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_email('."'".$key->id_send."'".')"><i class="fas fa-trash"></i> Delete</a>';
	         
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                        "recordsTotal" => $this->M_email->count_all(),
	                        "recordsFiltered" => $this->M_email->count_filtered(),
	                        "data" => $data,
	                );
	        //output to json format
	        echo json_encode($output);

		}
		    public function ajax_delete_email($id)
		    {
		        $this->M_email->delete_email_id($id);
		        echo json_encode(array("status" => TRUE));
		    }
		/*penutup server side send mail*/
}
