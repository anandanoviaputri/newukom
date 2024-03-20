<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="card" style="margin-top: 3rem">
            <div class="row m-4">
              <?php
                if (isset($_GET['idbuku'])) {
                  $idbuku = $_GET['idbuku'];
                }
                else{
                  die ("Data Tidak Tersedia");
                }
                include "../koneksi/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM bukuu WHERE idbuku='$idbuku' ");
                $result = mysqli_fetch_array($query);
              ?>
                <div class="col-sm-7">
                    <h3>From Peminjam buku</h3>
                    <a href="../peminjam/buku.php" class="btn btn-danger m-2">Kembali</a>
                    <form action="tgl_pinjam.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                      <input type="text" name="idBuku" class="form-control" required value="<?php echo $result['idbuku']; ?>" readonly>
                  </div>     
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID User</label>
                      <input type="text" name="idUser" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                      <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>     
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tanggal Peminjam</label>
                          <input type="date" name="tgl_peminjaman" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>       
                        </div>
                          <div class="col">
                          <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                          <input type="date" name="tgl_pengembalian" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 
                    </div>
                  </div>                
                  <div class="mb-3"></div>
                      <label for="exampleInputPassword1" class="form-label">Level</label>
                        <select class="form-select" name="status_peminjaman" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                           <option value="peminjam">Pinjam</option>
                      </select>
                   </div>  
                   <button type="submit" class="btn btn-primary">Pinjam</button>         
                  </form>
                </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>