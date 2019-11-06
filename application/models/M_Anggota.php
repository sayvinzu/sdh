<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Anggota extends CI_Model {

  public function view(){
    return $this->db->get('tb_anggota')->result(); // Tampilkan semua data yang ada di tabel siswa
  }
  
  // Fungsi untuk melakukan proses upload file
  public function upload_file($filename){
    $this->load->library('upload'); // Load librari upload
    
    $config['upload_path'] = './assets/excel/';
    $config['allowed_types'] = 'xlsx';
    $config['max_size']  = '2048';
    $config['overwrite'] = true;
    $config['file_name'] = $filename;
  
    $this->upload->initialize($config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  public function cek_input($table, $field, $input)
  {
    
    $this->db->where($field, $input);
    return $this->db->get($table)->row();
  }

  public function cek_input2($table, $field1, $input1, $field2, $input2)
  {
    
    $this->db->where($field1, $input1);
    $this->db->where($field2, $input2);
    return $this->db->get($table)->row();
  }

  public function add_data($table, $data)
  {
    return $this->db->insert($table, $data);
  }
  
  // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
  public function insert_multiple($data){
    $this->db->insert_batch('tb_anggota', $data);
  }

  public function buat_kode($id_dpd){
    $this->db->select('RIGHT(tb_keanggotaan.id_kta,8) as kode', FALSE);
    $this->db->where('id_dpd',$id_dpd);
    $this->db->order_by('id_kta','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_keanggotaan');      //cek dulu apakah ada sudah ada kode di tabel.    
    if($query->num_rows() <> 0){      
     //jika kode ternyata sudah ada.      
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }
    $kodemax = str_pad($kode, 8, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
    $kodejadi = $id_dpd.$kodemax;    // hasilnya ODJ-9921-0001 dst.
    return $kodejadi;  
  }


  public function alert_error($pesan)
  {
    $this->session->set_flashdata('msg', 
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error ! </strong> '.$pesan.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');     
  }

  public function alert_success($pesan)
  {
    $this->session->set_flashdata('msg', 
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Error ! </strong> '.$pesan.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');     
  }
}