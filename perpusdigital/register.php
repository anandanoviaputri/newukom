 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Register</title>
    <!-- css & js bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="content">
        <div class="card" style="margin-top: 1rem;">
          <div class="row">
            <div class="col m-3">
              <h2>Silahkan Masukan data untuk Untuk Melanjutkan !</h2>
                <form action="aksi/proses_daftar.php" method="post">
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">NIS</label>
          <input type="text" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
          <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3"></div>
                  <label for="exampleInputPassword1" class="form-label">Level</label>
                  <select class="form-select" name="level" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="peminjam">Pengguna</option>
                  </select>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>  
                
                <p class="mt-3"> Saya sudah memiliki akun ?Login <a href="index.php" class="btn btn-warning text-black">Disini</a></p>
            </div>
          
            </div>  
          </div>
          </div>
        </div>
  </body>
</html>