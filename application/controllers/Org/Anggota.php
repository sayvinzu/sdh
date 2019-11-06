<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	private $filename = "import_data3"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent ::__construct();
		$this->load->library('template','pagination');
		$this->load->model('M_Anggota');
	}

	public function index()
	{
		$this->template->user('org/anggota/v_anggota');
	}


	public function Add()
	{
		$this->template->user('org/anggota/v_add_anggota');
	}


	public function form(){

	    $data = array(); // Buat variabel $data sebagai array
	    
	    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
	      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
	      $upload = $this->M_Anggota->upload_file($this->filename);
	      
	      if($upload['result'] == "success"){ // Jika proses upload sukses
	        // Load plugin PHPExcel nya
	        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
	        
	        $excelreader = new PHPExcel_Reader_Excel2007();
	        $loadexcel = $excelreader->load('assets/excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
	        // $sheet = $loadexcel->getSheetByName('Data')->toArray(null, true, true ,true);

	        if ($loadexcel->getSheetByName('Data') != NULL){
	        	$sheet = $loadexcel->getSheetByName('Data')->toArray(null, true, true ,true);
	        	$data['sheet'] = $sheet; 

	        	// var_dump($sheet);

					// $data = [
					//   ['id' => 1, 'userId' => 5],
					//   ['id' => 2, 'userId' => 5],
					//   ['id' => 3, 'userId' => 6],
					// ];
					// $userId = 5;

					
			

	        	// echo array_count_values(array_column($sheet, 'userId'))[$userId];
	        	$this->template->user('org/anggota/v_preview_anggota',$data);
	        }else{
	        	$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		        $this->M_Anggota->alert_error('File Excel bukan yang ini boss');
		        $this->template->user('org/anggota/v_add_anggota');
	        }
	        
	      }else{ // Jika proses upload gagal
	        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
	        $this->M_Anggota->alert_error('File Gagal di Upload');
	        $this->template->user('org/anggota/v_add_anggota');
	      }
	    }
	    
	    
	}
	  
	public function import(){

		$json = $this->input->post('dataku');
		$data = json_decode($json, true);	

		foreach ($data as $da) {

			$id_kta = $this->M_Anggota->buat_kode($da['id_dpd']);

			// inport ke tb_anggota

			$d_anggota = array(
				'id_kta' => $id_kta,
				'nama' => $da['nama'],
				'nik' => $da['nik'],
				'email' => $da['email'],
				'kontak' => $da['kontak'],
				'wa' => $da['wa'],
				'tmpt_lahir' => $da['tmpt_lahir'],
				'tgl_lahir' => $da['tgl_lahir'],
				'jk' => $da['jk'],
				'sts_pernikahan' => $da['sts_pernikahan'], 
				'gol_darah' => $da['gol_darah'],
				'pekerjaan' => $da['pekerjaan'],
				'id_prov' => $da['id_prov'],
				'id_kab' => $da['id_kab'],
				'id_kec' => $da['id_kec'],
				'alamat' => $da['alamat'],
				'foto' => '',
				'password' => password_hash('Bismillahsah', PASSWORD_DEFAULT), 
				'at_create' => date("Y-m-d H:i:s")
			);



			$add_da = $this->M_Anggota->add_data('tb_anggota', $d_anggota);

			if ($add_da == true) {
				
				// import ke tb_keanggotaan

				$d_keanggotaan = array(
					'id_kta' => $id_kta,
					'id_dpw' => $da['id_dpw'],
					'id_dpd' => $da['id_dpd'],
					'thn_gabung' => $da['thn_gabung'],
					'status' => $da['sts_anggota'],
					'at_create' => date("Y-m-d H:i:s")
				);

				$add_keang = $this->M_Anggota->add_data('tb_keanggotaan', $d_keanggotaan);

				// import ke tb_keturunan (ayah)
				$d_ayah = array(
					'ortu' => $da['ayah'],
					'anak' => $id_kta,
					'keterangan' => "ayah",
					'data' => '{"pekerjaan":"'.$da['p_ayah'].'", "alamat":"'.$da['alamat_ortu'].'"}',
					'status' => 0,
					'at_create' => date("Y-m-d H:i:s")
				);

				$add_ayah = $this->M_Anggota->add_data('tb_keturunan', $d_ayah);

				// import ke tb_keturunan (ibu)
				$d_ibu = array(
					'ortu' => $da['ibu'],
					'anak' => $id_kta,
					'keterangan' => "ibu",
					'data' => '{"pekerjaan":"'.$da['p_ibu'].'", "alamat":"'.$da['alamat_ortu'].'"}',
					'status' => 0,
					'at_create' => date("Y-m-d H:i:s")
				);

				$add_ibu = $this->M_Anggota->add_data('tb_keturunan', $d_ibu);

				// import ke tb_pasangan

				if ($da['jk'] == "L") {
					$suami = $id_kta;
					$istri = $da['pasangan'];
				}else{
					$istri = $id_kta;
					$suami = $da['pasangan'];
				}

				$d_pasangan = array(
					'suami' => $suami,
					'istri' => $istri,
					'status' => 0,
					'at_create' => date("Y-m-d H:i:s")
				);

				$add_pasangan = $this->M_Anggota->add_data('tb_pasangan', $d_pasangan);

			}
		}

	}
}