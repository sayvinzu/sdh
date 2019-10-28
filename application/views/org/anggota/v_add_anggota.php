<div class="page-header">
	<h3 class="page-title">
	  Anggota
	</h3>
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="#">DPP</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Anggota</li>
	    <li class="breadcrumb-item active" aria-current="page">Tambah Anggota</li>
	  </ol>
	</nav>
</div>

 <div class="row">
	<div class="col-12 grid-margin">
	  <div class="card">
	    <div class="card-body">
	      <h4 class="card-title text-center">Tambah Anggota</h4>
	      <hr>

	      <?= password_hash('Sedekah99', PASSWORD_DEFAULT) ?>
		    <div class="row">
		      	<div class="col-md-6">
		      		<a href="<?= base_url('assets/excel/form_member.xlsx'); ?>" class="btn btn-outline-primary btn-sm btn-icon-text">
		              <i class="mdi mdi mdi-file-excel btn-icon-prepend"></i>
		              Download Form Anggota 
		            </a>
		      	</div>
		      	<div class="col-md-6">
		      		<form method="post" action="<?= base_url('/Org/Anggota/form'); ?>" enctype="multipart/form-data">
					  <div class="form-group">
					   <!--  <label for="exampleFormControlFile1">Example file input</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
					     <input type="file" name="file" class="file-upload-default">
					    <div class="input-group col-xs-12">
			                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload File">
			                <span class="input-group-append">
			                  <button class="file-upload-browse btn btn-gradient-primary btn-sm" type="button">Upload</button>
			                </span>
			              </div>

					  </div>
					
		      	</div>
	      </div>
	      <hr>

	      <button type="submit" name="preview" value="Preview" class="btn btn-outline-info btn-icon-text btn-sm float-right">Tambah Anggota</button>
	      </form>
	  </div>
	</div>
</div>