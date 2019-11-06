<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>

<style type="text/css">
	.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

</style>

<nav aria-label="breadcrumb" class="float-right">
  <ol class="breadcrumb">
    <!-- <li class="breadcrumb-item"><a href="#">Organisasi</a></li> -->
    <li class="breadcrumb-item" >Anggota</li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Anggota</li>
  </ol>
</nav>
<h2 class="content-heading">Tambah Anggota</h2>


<div class="row">
	<div class="col-md-12">
	    <!-- Default Elements -->
	    <div class="block">
	        <div class="block-header block-header-default">
	            <h3 class="block-title">Tambah Data Anggota Kolektif</h3>
	            
	        </div>
	        <div class="block-content">

	        	<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
	        	
		    	<form method="post" action="<?= base_url('/Org/Anggota/form'); ?>" enctype="multipart/form-data">
	        	<div class="row">
			      	<div class="col-md-6">
			      		<a href="<?= base_url('assets/excel/form_member.xlsx'); ?>" class="btn btn-outline-primary btn-sm btn-icon-text">
			              <i class="mdi mdi mdi-file-excel btn-icon-prepend"></i>
			              Download Form Anggota 
			            </a>
			      	</div>

			      	<div class="col-md-6">

			      		<div class="form-group">
					        <!-- <label>Upload Image</label> -->
					        <div class="input-group">
					        	<input type="text" class="form-control" style="border-color: #42a5f5;" placeholder="File name ...." readonly>
					            <span class="input-group-btn">
					                <span class="btn btn-file btn-outline-primary">
					                    Pilih File <input type="file" name="file">
					                </span>
					            </span>
					            
					        </div>
					    </div>
			      	</div>
			     </div>

  			<hr>
                <div class="form-group row" style="clear: both;">
                    <div class="col-12">
                        <button type="submit" name="preview" value="Preview" class="btn btn-primary float-right">Preview</button>
                    </div>
                </div>

	            </form>
	        </div>
	    </div>
	    <!-- END Default Elements -->
	</div>
	
	<div class="col-md-12">
	    <!-- Default Elements -->
	    <div class="block">
	        <div class="block-header block-header-default">
	            <h3 class="block-title">Tambah Data Anggota Individu</h3>
	            
	        </div>
	        <div class="block-content">

	        	<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
	        	
		    	<form action="be_forms_elements_bootstrap.html" method="post" enctype="multipart/form-data" >
                    <div class="form-group row">
                        <label class="col-12">Static</label>
                        <div class="col-md-9">
                            <div class="form-control-plaintext">Username</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-text-input">Text</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text..">
                            <div class="form-text text-muted">Further info about this input</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-email-input">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Email..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-password-input">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 form-control-label" for="example-text-input-valid">Valid State</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control is-valid" id="example-text-input-valid" name="example-text-input-valid" placeholder="Valid State..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 form-control-label" for="example-text-input-invalid">Invalid State</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control is-invalid" id="example-text-input-invalid" name="example-text-input-invalid" placeholder="Invalid State..">
                            <div class="invalid-feedback">Invalid feedback</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-disabled-input">Disabled</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled.." disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-textarea-input">Textarea</label>
                        <div class="col-12">
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-select">Select</label>
                        <div class="col-md-9">
                            <select class="form-control" id="example-select" name="example-select">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-multiple-select">Multiple Select</label>
                        <div class="col-md-9">
                            <select class="form-control" id="example-multiple-select" name="example-multiple-select" size="7" multiple>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Radios</label>
                        <div class="col-12">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="example-radio1" name="example-radios" value="option1" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Option 1</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="example-radio2" name="example-radios" value="option2">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Option 2</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="example-radio3" name="example-radios" value="option3">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Option 3</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Inline Radios</label>
                        <div class="col-12">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="example-inline-radio1" name="example-inline-radios" value="option1" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option 1</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="example-inline-radio2" name="example-inline-radios" value="option2">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option 2</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="example-inline-radio3" name="example-inline-radios" value="option3">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option 3</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Checkboxes</label>
                        <div class="col-12">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="example-checkbox1" name="example-checkbox1" value="option1" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Option 1</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="example-checkbox2" name="example-checkbox2" value="option2">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Option 2</span>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="example-checkbox3" name="example-checkbox3" value="option3">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Option 3</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Inline Checkboxes</label>
                        <div class="col-12">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1" checked>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option 1</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option 2</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Option 3</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-file-input">File Input</label>
                        <div class="col-12">
                            <input type="file" id="example-file-input" name="example-file-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-file-multiple-input">File Input (Multiple)</label>
                        <div class="col-12">
                            <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Bootstrap's Custom File Input</label>
                        <div class="col-12">
                            <label class="custom-file">
                                <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12">Bootstrap's Custom File Input (Multiple)</label>
                        <div class="col-12">
                            <label class="custom-file">
                                <input type="file" class="custom-file-input" id="example-file-multiple-input-custom" name="example-file-multiple-input-custom" multiple>
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </div>
                </form>
	        </div>
	    </div>
	    <!-- END Default Elements -->
	</div>
</div>



<script type="text/javascript">
	
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});

</script>