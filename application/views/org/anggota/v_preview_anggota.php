
<?php 
	$numrow = 0;
	$sukses = 0;
	$gagal = 0;
	$kosong = 0;
	$data = [];
	// $nama = array();
 ?>

 <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#sukses").hide();
    $("#gagal").hide();
  });
  </script>

<nav aria-label="breadcrumb" class="float-right">
  <ol class="breadcrumb">
    <!-- <li class="breadcrumb-item"><a href="#">Organisasi</a></li> -->
    <li class="breadcrumb-item" >Anggota</li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Anggota</li>
  </ol>
</nav>
<h2 class="content-heading">Tambah Anggota</h2>
<a class="block block-rounded block-link-shadow" href="javascript:void(0)">
<div class="block-content block-content-full" id="sukses">
    <p class="font-size-sm text-muted float-sm-right mb-5"><em>sukses</em></p>
    <h4 class="font-size-default text-success mb-0">
        <i class="fa fa-check text-success mr-5"></i> <span id='jumlah_sukses'></span> Data dapat di Tambahkan
    </h4>
</div>
</a>
<a class="block block-rounded block-link-shadow" href="javascript:void(0)">
<div class="block-content block-content-full" id="gagal">
    <p class="font-size-sm text-muted float-sm-right mb-5"><em>gagal</em></p>
    <h4 class="font-size-default text-danger mb-0">
        <i class="fa fa-close text-danger mr-5"></i> <span id='jumlah_gagal'></span> Data tidak dapat di Tambahkan
    </h4>
</div> 
</a>    


<div class="row">
	<div class="col-md-12">
	    <!-- Default Elements -->
	    <div class="block">
	        <div class="block-header block-header-default">
	            <h3 class="block-title">Preview Data Anggota</h3>
	            
	        </div>
	        <div class="block-content">

	       

	        	<div class="table-responsive">
	                <table class="table table-striped table-vcenter">
	                    <thead>
	                        <tr>
				              <th><i class="fa fa-square-o fa-2x"></i></th>
				              <th>Nama Lengkap</th>
						      <th>Nomor KTP</th>
						      <th>Email</th>
						      <th>Kontak</th>
						      <th>WA</th>
						      <th>Tempat Lahir</th>
						      <th>Tanggal Lahir</th>
						      <th>Jenis Kelamin</th>
						      <th>Status Pernikahan</th>
						      <th>Nama Pasangan</th>
						      <th>Golongan Darah</th>
						      <th>Pekerjaan</th>
						      <th>Provinsi</th>
						      <th>Kab/Kota</th>
						      <th>Kecamatan</th>
						      <th>Alamat Rumah</th>
						      <th>Nama Ayah</th>
						      <th>Pekerjaan Ayah</th>
						      <th>Nama Ibu</th>
						      <th>Pekerjaan Ibu</th>
						      <th>Alamat Orang Tua</th>
						      <th>Tahun Bergabung</th>
						      <th>DPW</th>
						      <th>DPD</th>
						      <th>Status Keanggotaan</th>
						      <th>Status Marhalah</th>
				            </tr>
	                    </thead>
	                    <tbody>

				            
				            <?php foreach ($sheet as $row) : ?>



				            	<?php 
				            	  $nama = $row['A'];
							      $nik = $row['B'];
							      $email = $row['C'];
							      $kontak = $row['D'];
							      $wa = $row['E'];
							      $tmpt_lahir = $row['F'];
							      $tgl_lahir = $row['G'];
							      $jk = $row['H'];
							      $sts_pernikahan = $row['I'];
							      $pasangan = $row['J'];
							      $gol_darah = $row['K'];
							      $pekerjaan = $row['L'];
							      $provinsi = $row['M'];
							      $kabupaten = $row['N'];
							      $kecamatan = $row['O'];
							      $alamat = $row['P'];
							      $ayah = $row['Q'];
							      $p_ayah = $row['R'];
							      $ibu = $row['S'];
							      $p_ibu = $row['T'];
							      $alamat_ortu = $row['U'];
							      $thn_gabung = $row['V'];
							      $dpw = $row['W'];
							      $dpd = $row['X'];
							      $sts_anggota = $row['Y'];
							      $sts_marhala = $row['Z'];
							    ?>




								<?php if ($numrow <= 0){
										$numrow++;
										continue; 
									}else{

										$cek = "sukses";

										$nikinik[]= $row["B"];

										$status = '<i class="fa fa-close fa-2x text-danger"></i>';

										$cek_n = $this->M_Anggota->cek_input('tb_anggota', 'nik', $nik);
								        $cek_e = $this->M_Anggota->cek_input('tb_anggota', 'email', $email);
								        $cek_p = $this->M_Anggota->cek_input('tb_provinsi', 'provinsi', $provinsi);
								        $cek_pw = $this->M_Anggota->cek_input('tb_dpw', 'nama', $dpw);

								       
								        
        

										$nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'";
								        $nik_td = ( ! empty($nik))? "" : " style='background: #E07171;'";
								        $email_td = ( ! empty($email))? "" : " style='background: #E07171;'";
								        $kontak_td = ( ! empty($kontak))? "" : " style='background: #E07171;'";
								        $wa_td = ( ! empty($wa))? "" : " style='background: #E07171;'";
								        $tmpt_lahir_td =( ! empty($tmpt_lahir))? "" : " style='background: #E07171;'";
								        $tgl_lahir_td = ( ! empty($tgl_lahir))? "" : " style='background: #E07171;'";
								        $jk_td = ( ! empty($jk))? "" : " style='background: #E07171;'";
								        $sts_pernikahan_td = ( ! empty($sts_pernikahan))? "" : " style='background: #E07171;'";
								        $pasangan_td = ( ! empty($pasangan))? "" : " style='background: #E07171;'";
								        $gol_darah_td = ( ! empty($gol_darah))? "" : " style='background: #E07171;'";
								        $pekerjaan_td = ( ! empty($pekerjaan))? "" : " style='background: #E07171;'";
								        $provinsi_td = ( ! empty($provinsi))? "" : " style='background: #E07171;'";
								        $kabupaten_td = ( ! empty($kabupaten))? "" : " style='background: #E07171;'";
								        $kecamatan_td = ( ! empty($kecamatan))? "" : " style='background: #E07171;'";
								        $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'";
								        $ayah_td = ( ! empty($ayah))? "" : " style='background: #E07171;'";
								        $p_ayah_td = ( ! empty($p_ayah))? "" : " style='background: #E07171;'";
								        $ibu_td = ( ! empty($ibu))? "" : " style='background: #E07171;'";
								        $p_ibu_td = ( ! empty($p_ibu))? "" : " style='background: #E07171;'";
								        $alamat_ortu_td = ( ! empty($alamat_ortu))? "" : " style='background: #E07171;'";
								        $thn_gabung_td = ( ! empty($thn_gabung))? "" : " style='background: #E07171;'";
								        $dpw_td = ( ! empty($dpw))? "" : " style='background: #E07171;'";
								        $dpd_td = ( ! empty($dpd))? "" : " style='background: #E07171;'";
								        $sts_anggota_td =( ! empty($sts_anggota))? "" : " style='background: #E07171;'";
								        $sts_marhala_td = ( ! empty($sts_marhala))? "" : " style='background: #E07171;'";

								        // Jika salah satu data ada yang kosong
								        if($nama == "" or $nik == "" or $email == "" or $kontak == "" or $wa == "" or $tmpt_lahir == "" or $tgl_lahir == "" or $jk == "" or $sts_pernikahan == "" or  $gol_darah == "" or $pekerjaan == "" or $provinsi == "" or $kabupaten == "" or $kecamatan == "" or $alamat == "" or $ayah == "" or $p_ayah == "" or $ibu == "" or $p_ibu == "" or $alamat_ortu == "" or $thn_gabung == "" or $dpw == "" or $dpd == "" or $sts_anggota == "" or $sts_marhala == ""){
								        	$cek = "gagal";
								          	$kosong++; // Tambah 1 variabel $kosong
								        }

								       

								        if (count($cek_n) > 0 or strlen($nik) != 16 or !is_numeric($nik)){
			          						$nik_td = " style='background: #FFD700;'";	
			          						$cek = "gagal";
			          						
								        }

								        if ($nik != "") {
								        	$j_nik = array_count_values(array_column($sheet, "B"))[$nik];
								        	if ($j_nik > 1) {
								        		$nik_td = " style='background: #FFD700;'";
								         		$cek = "gagal";
								        	}
								        }

								        if (count($cek_e) > 0 or !filter_var($email, FILTER_VALIDATE_EMAIL)){
								          	$email_td = " style='background: #FFD700;'";
								         	$cek = "gagal";
								        }

								        if ($email != "") {
								        	$j_email = array_count_values(array_column($sheet, "C"))[$email];
								        	if ($j_email > 1) {
								        		$email_td = " style='background: #FFD700;'";
								         		$cek = "gagal";
								        	}
								        }


								        if ($jk != "L" && $jk != "P"){
								          	$jk_td = " style='background: #FFD700;'";
								          	$cek = "gagal";
								        } 

								        if ($gol_darah != "A" && $gol_darah != "B" && $gol_darah != "AB" && $gol_darah != "O"){
								          	$gol_darah_td = " style='background: #FFD700;'";
								          	$cek = "gagal";
								        } 
								        
								        if ($sts_pernikahan != "Menikah" && $sts_pernikahan != "Belum Menikah" && $sts_pernikahan != "Duda" && $sts_pernikahan != "Janda"){
								          	$sts_pernikahan_td = " style='background: #FFD700;'";
								         	$cek = "gagal";
								        }

								        if (count($cek_p) == NULL) {
								           $provinsi_td = " style='background: #FFD700;'";
								           $kabupaten_td = " style='background: #FFD700;'";
								           $kecamatan_td = " style='background: #FFD700;'";
								           $cek = "gagal";
								        }else{
								        	$cek_ka = $this->M_Anggota->cek_input2('tb_kabupaten', 'id_prov', $cek_p->id_prov, 'kabupaten', $kabupaten);

								        	if (count($cek_ka) == NULL) {
									           $kabupaten_td = " style='background: #FFD700;'";
									           $kecamatan_td = " style='background: #FFD700;'";
									           $cek = "gagal";
									        }else{
									        	$cek_ke = $this->M_Anggota->cek_input2('tb_kecamatan', 'id_kab', $cek_ka->id_kab, 'Kecamatan', $kecamatan);
									        	if (count($cek_ke) == NULL) {
											         $kecamatan_td = " style='background: #FFD700;'";
											         $cek = "gagal";
											    }
									        }
								        }

								        if (count($cek_pw) == NULL) {
								           $dpw_td = " style='background: #FFD700;'";
								           $dpd_td = " style='background: #FFD700;'";
								           $cek = "gagal";
								        }else{
								        	$cek_pd = $this->M_Anggota->cek_input2('tb_dpd', 'id_dpw', $cek_pw->id_dpw, 'nama', $dpd);
								        	if (count($cek_pd) == NULL) {
										        $dpd_td = " style='background: #FFD700;'";
										       	$cek = "gagal";
										    }
								        }

								       	

								        if (strlen($thn_gabung) != 4 or !is_numeric($thn_gabung)){
			          						$thn_gabung_td = " style='background: #FFD700;'";
			          						$cek = "gagal";		
								        }

								        if ($sts_anggota != "Aktif" && $sts_anggota != "Tidak Aktif" && $sts_anggota != "Meninggal"){
			          						$sts_anggota_td = " style='background: #FFD700;'";	
			          						$cek = "gagal";
								        }

								        if ($sts_marhala != "Ula" && $sts_marhala != "Wustha" && $sts_marhala != "Ulya" && $sts_marhala != "Belum Marhalah"){
			          						$sts_marhala_td = " style='background: #FFD700;'";
			          						$cek = "gagal";
								        }
								        
								        
								        if ($cek == "sukses") {

								        	$dataku[$sukses] = 
								        		[
								        			"nama" => $nama,
								        			"nik" => $nik,
								        			"email" => $email,
								        			"kontak" => $kontak,
								        			"wa" => $wa,
								        			"tmpt_lahir" => $tmpt_lahir,
								        			"tgl_lahir" => $tgl_lahir,
								        			"jk" => $jk,
								        			"sts_pernikahan" => $sts_pernikahan,
								        			"pasangan" => $pasangan,
								        			"gol_darah" => $gol_darah,
								        			"pekerjaan" => $pekerjaan,
								        			"id_prov" => $cek_p->id_prov,
								        			"id_kab" => $cek_ka->id_kab,
								        			"id_kec" => $cek_ke->id_kec,
								        			"alamat" => $alamat,
								        			"ayah" => $ayah,
								        			"p_ayah" => $p_ayah,
								        			"ibu" => $ibu,
								        			"p_ibu" => $p_ibu,
								        			"alamat_ortu" => $alamat_ortu,
								        			"thn_gabung" => $thn_gabung,
								        			"id_dpw" => $cek_pw->id_dpw,
								        			"id_dpd" => $cek_pd->id_dpd,
								        			"sts_anggota" => $sts_anggota,
								        			"sts_marhala" => $sts_marhala,
								        		];

								        	$status = '<i class="fa fa-check fa-2x text-success"></i>';
								        	$sukses++;
								        	
								        }else{
								        	
								        	$gagal++;
								        }

								        echo "<tr>";
								        echo "<td>".$status."</td>";
								        echo "<td".$nama_td.">".$nama."</td>";
								        echo "<td".$nik_td.">".$nik."</td>";
								        echo "<td".$email_td.">".$email."</td>";
								        echo "<td".$kontak_td.">".$kontak."</td>";
								        echo "<td".$wa_td.">".$wa."</td>";
								        echo "<td".$tmpt_lahir_td.">".$tmpt_lahir."</td>";
								        echo "<td".$tgl_lahir_td.">".$tgl_lahir."</td>";
								        echo "<td".$jk_td.">".$jk."</td>";
								        echo "<td".$sts_pernikahan_td.">".$sts_pernikahan."</td>";
								        echo "<td".$pasangan_td.">".$pasangan."</td>";
								        echo "<td".$gol_darah_td.">".$gol_darah."</td>";
								        echo "<td".$pekerjaan_td.">".$pekerjaan."</td>";
								        echo "<td".$provinsi_td.">".$provinsi."</td>";
								        echo "<td".$kabupaten_td.">".$kabupaten."</td>";
								        echo "<td".$kecamatan_td.">".$kecamatan."</td>";
								        echo "<td".$alamat_td.">".$alamat."</td>";
								        echo "<td".$ayah_td.">".$ayah."</td>";
								        echo "<td".$p_ayah_td.">".$p_ayah."</td>";
								        echo "<td".$ibu_td.">".$ibu."</td>";
								        echo "<td".$p_ibu_td.">".$p_ibu."</td>";
								        echo "<td".$alamat_ortu_td.">".$alamat_ortu."</td>";
								        echo "<td".$thn_gabung_td.">".$thn_gabung."</td>";
								        echo "<td".$dpw_td.">".$dpw."</td>";
								        echo "<td".$dpd_td.">".$dpd."</td>";
								        echo "<td".$sts_anggota_td.">".$sts_anggota."</td>";
								        echo "<td".$sts_marhala_td.">".$sts_marhala."</td>";
								        echo "</tr>";
											
										
								    }

								    $numrow++;
							    ?>
							    

				            <?php endforeach ?>
	                        
	                    </tbody>
	                </table>
	            </div>


<?php if ($sukses > 0): ?>

	<script>
      $(document).ready(function(){
        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
        $("#jumlah_sukses").html('<?php echo $sukses; ?>');
        
        $("#sukses").show(); // Munculkan alert validasi kosong
      });
     </script>

	<hr>
			      
  	<form action="<?= site_url('Org/Anggota/import');  ?>" method="POST">

  		<?php 
  		 $json = json_encode($dataku);
  		?>
  		<textarea hidden name="dataku"><?= $json; ?></textarea>
	  	
	 	<button type="submit" name="import" class="btn btn-primary float-right">Lanjutkan</button>
	  	<a href="'.site_url('Org/Anggota/Add').'" class="btn btn-secondary float-right mr-2">Batal</a>
	  	<div style="clear: both;"></div>
  	</form>  

 <?php endif ?> 

<?php if ($gagal > 0): ?>

	<script>
      $(document).ready(function(){
        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
        $("#jumlah_gagal").html('<?php echo $gagal; ?>');
        
        $("#gagal").show(); // Munculkan alert validasi kosong
      });
    </script>
	
<?php endif ?>
	            

	        </div>
	    </div>
	</div>
</div>