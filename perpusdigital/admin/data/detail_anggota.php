<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Anggota</title>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
  </head>
  <body>

    <div class="container" style="margin-top: 5rem;">
        <div class="card">
            <div class="row m-4">
                <?php
                    include '../../koneksi/koneksi.php';
                    if (isset($_GET['iduser'])) {
                        $iduser = $_GET['iduser'];
                    } else {
                        die ("ERROR, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE iduser = '$iduser' ");
                    $result = mysqli_fetch_array($query);
                 ?>
                <div class="col">
                <h2>Detail Anggota</h2> 
                <a href="../anggota.php" class="btn btn-danger my-1">Kembali</a> <hr>
                    <table>
                        <tr>
                            <td><h5>ID User</h5></td>
                            <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>NIS</h5></td>
                            <td><h5>: <?php echo $result['nis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Username</h5></td>
                            <td><h5>: <?php echo $result['username'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Lengkap</h5></td>
                            <td><h5>: <?php echo $result['namalengkap'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Alamat</h5></td>
                            <td><h5>: <?php echo $result['alamat'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Email</h5></td>
                            <td><h5>: <?php echo $result['email'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Username</h5></td>
                            <td><h5>: <?php echo $result['username'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Password</h5></td>
                            <td><h5>: <?php echo $result['password'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Level</h5></td>
                            <td><h5>: <?php echo $result['level'];?></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>