<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Pemekrisaan</label> 
    <div class="col-8">
      <select id="tanggal" name="tanggal" class="custom-select">
        <option value="rabbit">07/12/2023</option>
        <option value="duck">08/12/2023</option>
        <option value="fish">09/12/2023</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="usia" class="col-4 col-form-label">Usia</label> 
    <div class="col-8">
      <input id="usia" name="usia" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_2" type="radio" class="custom-control-input" value="fish"> 
        <label for="jk_2" class="custom-control-label">Fish</label>
      </div>
    </div>
  </div> 
 
</form>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							Jenis Tes
						</th>
						<th>
							Hasil Pemekrisaan
						</th>
						<th>
							Normal
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Kolestrol
						</td>
						<td>
							130
						</td>
						<td>
							60 mg/dl
						</td>
					</tr>
					<tr class="table">
						<td>
                            Tekanan Darah
						</td>
						<td>
							100/80
						</td>
						<td>
							90/60 mm/Hg - 120/80 mm/Hg.

						</td>
					</tr>
					<tr class="table">
						<td>
							Asam Urat
						</td>
						<td>
							3
						</td>
						<td>
							2,5 mg
						</td>
					</tr>
					<tr class="table">
						<td>
							Gula Darah
						</td>
						<td>
							120
						</td>
						<td>
							sebelum tidur: 100-140 mg/dL.
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>