<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                  Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" autocomplete="off" name="nama" class="form-control" id="nama">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="nrp" class="form-label">Nrp</label>
                    <input type="text" autocomplete="off" name="nrp" class="form-control" id="nrp">
                    <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" autocomplete="off" name="email" class="form-control" id="email">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                      <select class="form-select mb-3" id="jurusan"
                      name="jurusan">
                       <option value="Pertambangan">Pertambangan</option>
                       <option value="Alat Berat">Alat Berat</option>
                       <option value="Perhutanan">Perhutanan</option>
                       <option value="Peternakan">Peternakan</option>
                       <option value="Salesman">Salesman</option>
                     </select>
                  </div>
                  <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah Data</button>

               </form>   
            </div>
        </div>

           

        </div>
    </div>

</div>