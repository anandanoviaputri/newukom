<?php
  include 'layout/header.php'
?>

    <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <h2>Data Buku</h2>
            <div class="col">
                <table class="table my-2">
                    <thead class="table table-warning">
                        <tr>
                            <th scope="col">ID Buku</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                     include '../koneksi/koneksi.php';
                    
                     $data = mysqli_query($koneksi, "SELECT * FROM buku" );
                     while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $d['IDbuku'];?></th>
                            <td><?php echo $d['judul'];?></td>
                            <td>
                                <a href="data/detail_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary text-white">Detail</a>
                                <a href="" class="btn btn-warning text-white">Edit</a>
                                <a href="" class="btn btn-danger text-white">Delete</a>
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
  include 'layout/footer.php'
?>