<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product List</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
        <h1><center>Book Controller</center></h1>
      <table>
        <tr>
          <td><a href="<?php echo base_url('index.php/buku/add_new');?>" class="btn btn-primary">Tambah Buku</a></td>
          <td></td>
          <td></td>
          <td><a href="<?php echo base_url('index.php/auth/logout') ?>" class="btn btn-warning">Logout</a></td>
        </tr>
      
      </table>
      <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th width ="83" scope="col">Id Buku</th>
                <th>Kode Buku</th>
                <th>Kategori</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th width="150">Penerbit</th>
                <th width="120">Tahun Terbit</th>
                <th>Jumlah</th>
                <th>Menu</th>
            </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($buku->result() as $row) :
            $count++;
        ?>
            <tr>
                <th scope="row"><?php echo $count;?></th>
                <td align="center"><?php echo number_format($row->id_buku);?></td>
                <td align="center"><?php echo $row->kode_buku;?></td>
                <td align="center"><?php echo $row->kategori_buku;?></td>
                <td width="200"><?php echo $row->judul_buku;?></td>
                <td width="150"><?php echo $row->pengarang_buku;?></td>
                <td><?php echo $row->penerbit_buku;?></td>
                <td width="150" align="center"><?php echo $row->tahun_buku;?></td>
                <td align="center"><?php echo number_format($row->jumlah_buku);?></td>
                <td align="center"><a href="<?php echo base_url('index.php/buku/edit/'.$row->id_buku);?>" class="btn btn-sm btn-info">Edit</a></td>
                <td align="center"><a href="<?php echo base_url('index.php/buku/delete/'.$row->id_buku);?>" class="btn btn-sm btn-danger">Delete</a></td>
            </tr>
            <?php endforeach;?>
        </tbody>
      </table>
 
    </div>
 
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>