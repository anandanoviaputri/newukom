<?php
include '../layout/header.php';
?>

<div class="container"  style="margin-top: 2rem;">
<div class="row">
  <h4>Pilihan Buku</h4>
  <?php
    include '../koneksi/koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM bukuu Order by idbuku asc");

    while ($d = mysqli_fetch_array($data)) {
      
  ?>
    <div class="card" style="width: 14rem;">
      <div class="card-body">
          <img src="../layout/cover1.jpeg" class="card-img-top" alt="...">
          <h5 class="card-title"><?php echo $d['judul'];?></h5>
          <h6>Tahun terbit : <?php echo $d['tahunterbit'];?></h6>
          <a href= '../data/detail.php?idbuku=<?php echo $d['idbuku'];?>' class="btn btn-warning text-white">Detail</a>
          <a href= '../data/pinjam_buku.php?idbuku=<?php echo $d['idbuku'];?>' class="btn btn-primary">Pinjam</a>
        </div>
    </div>
    <?php
    }
  ?> 
  </div> 
</div>

<?php
include '../layout/footer.php';
?>