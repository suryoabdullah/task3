<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                  Form Edit Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                  <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="nrp" class="form-label">Nrp</label>
                    <input type="text" name="nrp" class="form-control" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
                    <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                      <select class="form-select mb-3" id="jurusan"
                      name="jurusan">
                      <?php foreach( $jurusan as $j) : ?>
                       <?php if( $j ==$mahasiswa['jurusan'] ) : ?>
                         <option value="<?= $j; ?>"selected><?= $j; ?></option> 
                       <?php else : ?>
                         <option value="<?= $j; ?>"><?= $j; ?></option> 
                       <?php endif; ?>
                      <?php endforeach; ?>
                     </select>
                  </div>
                  <button type="submit" name="edit" class="btn btn-primary" style="float: right;">Edit Data</button>

               </form>   
            </div>
        </div>

           

        </div>
    </div>

</div>