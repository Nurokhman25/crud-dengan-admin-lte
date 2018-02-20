<div class="box box-primary" style="padding:10px;">
 
          <div class="modal-header">
            <h4 class="modal-title">Form Pendataan Mahasiswa Baru</h4>
          </div>
          <div class="modal-body">
            <form action="simpan.php" method="post">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukan Nama lengkap Siswa" class="form-control" />
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" class="form-control" />
              </div>
                 <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control" />
              </div>       
              <div class="text-right">
                <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;&nbsp;simpan</button>
              </div>
            </form>
          </div>

</div>
