<?php
include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
  <h2>Data Anggota</h2>
  <div class="coll">
    <table class="table my-3">
        <thead class="table table-info">
          <tr>
            <th scope="col">ID User</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php
        include '../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM userr");
        while ($d = mysqli_fetch_array($data)) {

        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['idUser'];?></th>
            <td><?php echo $d['nis'];?></td>
            <td><?php echo $d['namalengkap'];?></td>
            <td>
              <a href="data/detail_anggota.php?idUser=<?php echo $d['idUser'];?>" class="btn btn-warning text-black">Detail</a>
            </td>
          </tr>
        </tbody>
        <?php
           }
        ?>
      </table>
    </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>

