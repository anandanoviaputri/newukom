<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container" style="margin-top: 5rem;">
        <div class="card">
            <div class="row m-4">
                <?php
                    include '../../koneksi/koneksi.php';
                    if (isset($_GET['idp'])) {
                        $idp = $_GET['idp'];
                    } else {
                        die ("ERROR, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpeminjaman='$idp' ");
                    $result = mysqli_fetch_array($query);
                ?>
                <div class="col">
                <h2>Detail Peminjaman</h2> 
                <a href="../pinjam.php" class="btn btn-danger my-1">Kembali</a> <hr>
                    <table>
                        <tr>
                            <td><h5>ID Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['IDpeminjaman'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ID User</h5></td>
                            <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Peminjam</h5></td>
                            <td><h5>: <?php echo $result['nama'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>TGL Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['tgl_peminjaman'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>TGL Pengembalian</h5></td>
                            <td><h5>: <?php echo $result['tgl_pengembalian'];?></h5></td>
                        </tr>
                        <tr class="bg bg-warning text-white">
                            <td><h5>Status Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['status_peminjaman'];?></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>