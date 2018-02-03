<?php

	echo "<div class='container'>
			<div class='container-content' style='min-height:50px;'>
				<div class='header-content'>
					<h4><b>
					TAMBAH PROVINSI
					</b></h4>
				</div>
			</div>

			<div class='container-content' style='min-height:450px;'>
				<div class='body-content'>
					<form class='form-horizontal' method='POST' action='".base_url()."index.php/provinsi/prosesTambah'>
						<div class='form-group'>
					        <label for='inputNamaProvinsi' class='control-label col-xs-2'> Nama Provinsi</label>
					        <div class='col-xs-10'>
					            <input type='text' class='form-control' name='inputNamaProvinsi' id='inputNamaProvinsi'>
					        </div>
					    </div>

					    <div class='form-group'>
						  	<label for='inputNegara' class='control-label col-xs-2'> Nama Negara </label>
						  	<div class='col-xs-10'>
						  	<select class='form-control' id='inputNegara' name='inputNegara'>";

						  		foreach ($listNegara as $key => $value) {
						  			# code...
						  			echo "<option value='".$value['kode_negara']."'>".$value['nama_negara']."</option>";
						  		}
							    
						  	echo "</select>
						  	</div>
						</div>
					    
					    <div class='form-group'>
					        <div class='col-xs-offset-5 col-xs-7' >
					            <button type='submit' class='btn btn-primary' style='min-width: 20%;'> Input </button>
					        </div>
					    </div>
					</form>

				</div>
			</div>
		</div>
	";
?>
