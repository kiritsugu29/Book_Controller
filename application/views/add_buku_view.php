<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Buku</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
      <h1><center>Tambah Buku</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo base_url('index.php/buku/save');?>" method="post">
          <div class="form-group">
            <label>Kode Buku</label>
            <input type="text" class="form-control" name="kode_buku" placeholder="Kode Buku">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" class="form-control" name="kategori_buku" placeholder="Kategori">
          </div>
          <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku">
          </div>
          <div class="form-group">
            <label>Pengarang</label>
            <input type="text" class="form-control" name="pengarang_buku" placeholder="Pengarang">
          </div>
          <div class="form-group">
            <label>Penerbit</label>
            <input type="text" class="form-control" name="penerbit_buku" placeholder="Penerbit">
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <input type="text" class="form-control" name="tahun_buku" placeholder="Tahun">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah_buku" placeholder="Jumlah">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>