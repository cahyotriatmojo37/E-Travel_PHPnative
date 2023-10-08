<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<style>
  #atas{
    padding-left: 60px;
}

#atas button:hover{
    background-color: rgb(255, 255, 255);
    color: rgb(0, 0, 0);
}

#atas button{
    background-color: black;
    color: rgb(255, 254, 254);
}


</style>

<body>

<!-- Navbar Atas -->
<div class="container-fluid" id="atas">
    <br>
    <div class="row justify-content-between">
      <div class="col-6">
          <h3>Likin Store</h3>
          <p>Toko Online Terbaik dan Terpercaya di Indonesia</p>
      </div>
      <div class="col-6">
      <button type="button" data-toggle="modal" data-target="#exampleModal">
          Login
      </button>
      <button type="button"  data-toggle="modal" data-target="#exampleModal1">
          Register
      </button>
        <p>Daftar/Masuk untuk Pelapak</p>
      </div>
    </div>  
  </div>

<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><img src="asset/gambar/icon/icon kunci.png" width="30px"> Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="admin/cek_login.php" method="POST" name="login">
            <div class="form-group">
              <label for="username"><img src="asset/gambar/icon/icon login.png" width="20px"> Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
            </div>
            <div class="form-group">
              <label for="password"><img src="asset/gambar/icon/icon password.png" width="20px"> Password</label>
              <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" value="login"><img src="asset/gambar/icon/icon masuk.png" width="20px"> Login</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Register</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Login -->

<!-- Modal Register -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><img src="asset/gambar/icon/icon kunci.png" width="30px"> Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" method="post" action="admin/aksi_register.php">
        <div class="form-group">
              <label for="nama"><img src="asset/gambar/icon/icon login.png" width="20px"> Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
            </div>
            <div class="form-group">
              <label for="username"><img src="asset/gambar/icon/icon login.png" width="20px"> Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                <label for="password"><img src="asset/gambar/icon/icon password.png" width="20px"> Password</label>
                <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
              </div>
            <div class="form-group">
              <label for="email"><img src="asset/gambar/icon/email.png" width="20px"> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="nomer"><img src="asset/gambar/icon/telp.png" width="20px"> Nomer Hp</label>
              <input type="text" class="form-control" id="nomer" placeholder="Enter No.Hp" name="nomer">
            </div>
            <div class="form-group">
              <label for="alamat"><img src="asset/gambar/icon/icon login.png" width="20px"> Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat">
            </div>
              <button type="submit" class="btn btn-success btn-block" name="register"><img src="asset/gambar/icon/icon masuk.png" width="20px"> Register</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Register-->

  <!-- Navbar Atas -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-xl">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>
</body>
</html>