<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
  </head>
  <body>
  
    <div class="container" style="margin-top: 5rem;">
      <div class="card">
        <div class="row m-4">
        <?php 
        include '../koneksi/koneksi.php';
          if (isset($_GET['idbuku'])) {
            $idbuku = $_GET['idbuku'];
          }else{
            die ("error, Data Tidak Ditemukan");
          }
          $query = mysqli_query($koneksi, "SELECT * fROM bukuu WHERE idbuku='$idbuku' ");
          $result = mysqli_fetch_array($query);
        ?>
          <div class="col text-center">
          <img src= '../layout/cover1.jpeg' height="500" alt="">
        </div>
        <div class="col" style="margin-top: 5rem;">
           <h2>Detail Buku</h2> 
           <a href='../peminjam/buku.php' class="btn btn-danger">Kembali</a><hr>
          <table>
            <tr>
               <td><h5>ID Buku</h5></td>
               <td><h5>: <?php echo $result['idbuku'];?></h5></td>
            </tr>
            <tr>
               <td><h5>Judul Buku </h5></td>
               <td><h5>: <?php echo $result['judul'];?></h5></td>
            </tr>
            <tr>
               <td><h5>Penulis Buku</h5></td>
               <td><h5>: <?php echo $result['penulis'];?> Adiera</h5></td>
            </tr>
            <tr>
              <td><h5> Penerbit Buku </h5></td>
              <td><h5>: <?php echo $result['penerbit'];?> Sartika</h5></td>
            </tr>
            <tr>
              <td><h5> Tahun Terbit </h5></td>
              <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
            </tr>
          </table>
             <a href="#" class="btn btn-success my-3">Baca Sekarang</a>
        </div>
      </div>
    </div>
  </div>


    </script>
  </body>
</html>