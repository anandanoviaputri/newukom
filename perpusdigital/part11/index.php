<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>

    <!-- css & js bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="content">
        <div class="card" style="margin-top: 11rem;">
          <div class="row">
            <div class="col m-3">
              <h2>Silahkan Login Untuk Melanjutkan !</h2>
              <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan']=="gagal"){
                        echo"<div class='alert alert-denger'>Username atau Password anda salah</div> ";
                    }
                }
                ?>

                <form action="aksi/cek_login.php" method="post">
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="Username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p class="mt-3"> Saya belum memiliki akun. Buat <a href="register.php" class="btn btn-warning text-black">Disini</a></p>
            </div>
            <div class="col">
                <img src="Foto1.png" width="500" alt="">          
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
