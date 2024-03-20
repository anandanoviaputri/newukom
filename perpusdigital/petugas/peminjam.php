<?php
include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <div class="col">
   <h2>Data Peminjam</h2>
     <table class="table mb-2">
      <a href="tambah_buku" class="btn btn-success mt-3">Tambah Peminjaman</a>
        <thead class="table table-info">
          <tr>
            <th scope="col">ID Peminjam</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Status Peminjam</th>
            <th scope="col">Aksi</th>


            </tr>
        </thead>
        <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($koneksi, "SELECT * FROM peminjamann");
            while ($d = mysqli_fetch_array($data)) {

        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['idpeminjaman'];?></th>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['status_peminjaman'];?></td>
            <td>
              <a href="data/detail_pmj.php?idpeminjaman=<?php echo $d['idpeminjaman'];?>" class="btn btn-primary text-black">Detail</a>
              <a href="" class="btn btn-warning text-black">Edit</a>
              <a href="" class="btn btn-danger text-black">Delete</a>

            </td>
          </tr>
        </tbody>
        <?php
           }
        ?>
   </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>

