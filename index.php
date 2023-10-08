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
    <link rel="stylesheet" href="asset/css/styleku.css">
    <script type="text/javascript" src="assets/script.js"></script>
    <title>Toko Online</title>
</head>

<style>
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
              <h3>Electronic Store</h3>
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
  <!-- Navbar Atas -->

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
                  <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
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
                      <input type="text" class="form-control" id="nomer" placeholder="Enter Nomer HP" name="nomer">
                    </div>
                    <div class="form-group">
                      <label for="alamat"><img src="asset/gambar/icon/icon login.png" width="20px"> Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
                    </div>
                      <button type="submit" name="register" class="btn btn-success btn-block"><img src="asset/gambar/icon/icon masuk.png" width="20px"> Register</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Register-->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-xl">
        <a class="navbar-brand" href="index.php">Electronic Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="kategori.php">kategori</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="produk.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tamu.php">Buku Tamu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tips.php">Tips Belanja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Tentang Kami</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<!-- Navbar -->

<!-- Corousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/gambar/hp.jpg" alt="Los Angeles" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>HANDPHONE</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/elektronik.png" alt="Chicago" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>ELEKTRONIK</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/pakaian.jpg" alt="Chicago" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>FASHION</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/kamera.jpg" alt="New York" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>KAMERA</strong></h3>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<!-- Corousel -->

<!-- kategori -->
  <div  id="kategori">
    <div class="container">
      <p><h2><img class="rounded-circle" src="asset/gambar/icon/icon.png" width="40px">Kategori</h2></p>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon hp.jpg" width="150px">
          <h3>Handphone</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon laptop.png" width="150px">
          <h3>Laptop</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon baju.png" width="150px">
          <h3>Baju</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon celana.png" width="150px">
          <h3>Celana</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon makanan.png" width="150px">
          <h3>Makanan</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon alat tulis.jpg" width="150px">
          <h3>Alat Tulis</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/icon kamera.png" width="150px">
          <h3>Kamera</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><img class="rounded-circle" src="asset/gambar/icon/alat dapur.jpg" width="150px">
          <h3>Alat Dapur</h3>
        </div> 
      </div>
    </div>
  </div>
<!-- kategori -->

<!-- Isi -->
  <div id="isi">
    <div class="container">
      <h3>Belanja Online di Electronic Store</h3>
      <p>Electronic Store merupakan yang terdepan dalam belanja fashion online, menyediakan brand lokal dan internasional yang terus bertambah untuk para konsumen di seluruh Indonesia. Kami memiliki lebih dari 150.000 produk yang dapat memenuhi kebutuhan fashion Anda, 
        mulai dari rok hingga gaun, sepatu kets hingga sandal, pakaian olahraga hingga jam tangan, dan masih banyak lagi.
        Awali penemuan gaya Anda dengan memiliki beberapa perlengkapan fashion dasar yang penting, seperti kaos dan celana denim jeans, Baju Koko dan Gamis, dan kebutuhan fashion dasar lainnya. Temukan inspirasi fashion pilihan kami, mulai dari pakaian formal hingga dress 
        untuk ke pesta. Tampil menawan dengan mengenakan jas dan blazer untuk pergi ke kantor. Jangan lupa untuk memadukan keseluruhan penampilan Anda dengan sepatu, ada banyak sekali pilihannya mulai dari flats, high heels, boots, atau sepatu formal. Persiapkan diri Anda untuk 
        segala musim dengan berbelanja berbagai macam outerwear, mulai dari jaket ringan hingga sweater yang nyaman. Koleksi fashion kami pun dilengkapi dengan berbagai macam aksesoris -- seperti tas dan perlengkapan olahraga. Para pelanggan Likin Store juga dapat 
        berbelanja berdasarkan tren terbaru yang sedang mendominasi di dunia fashion, apakah itu gaya monokrom, athleisure, atau tren terbaru di musim ini.</p>
      <h3>Belanja di Toko Online Electronic Store</h3>
      <p>Electronic Store adalah toko online dimana brand fashion favorit Anda berada. Dengan berbelanja fashion di toko online Likin Store Anda dapat menemukan produk fashion eksklusif terbaik dari ribuan fashion brand terkenal, serta produk-produk yang dijamin original. 
        Kami sebagai pusat belanja fashion online terbesar di Indonesia dapat menjawab kebutuhan fashion pria dan fashion wanita dengan menawarkan brand-brand terbaru dan terkemuka, baik lokal maupun internasional.
        Anda pastinya tahu bahwa penampilan belum sempurna tanpa kehadiran sepatu dan aksesoris. Mencari sepatu terbaru dengan kualitas terbaik tidaklah susah. Anda bisa menemukan dengan mudah sepatu wedges yang dapat dicocokan dengan dress ataupun gaun yang elegan, atau sepasang 
        sneakers untuk melengkapi gaya kasual Anda. Likin Store merupakan satu-satunya tempat belanja online fashion dimana Anda dapat menemukan semuanya, termasuk baju formal untuk ke pesta. Kami menawarkan koleksi pilihan fashion terlengkap dari kasual, busana muslim, formal, 
        batik, Hijab, sports, dan sepatu. Tampilan Anda akan lebih lengkap dengan aksesoris dari Kami seperti tas, jam tangan digital & analog, kacamata, dan perhiasan. Dengan navigasi pencarian sederhana, daftar koleksi, dan harga yang menarik kami memberikan kemudahan untuk Anda 
        berbelanja online untuk menemukan barang yang Anda butuhkan. Jadikanlah momen belanja fashion online Anda menjadi aktifitas yang menyenangkan dengan Likin Store. Nantikan promo terbesar dan terbanyak yang akan diberikan oleh Likin Store saat Harbolnas mendatang.
        Temukan ribuan brand lokal dan internasional untuk melengkapi kebutuhan fashion Anda. Apapun alasan Anda, nikmati gratis 30 hari pengembalian dengan mudah di seluruh Indonesia. Likin Store memberikan jaminan produk 100% asli & berkualitas serta pengalaman belanja fashion online terbaik.</p>
    </div>
  </div>
<!-- Isi -->

<!-- about -->
<div id="about">
    <div class="container footer">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Electronic Store</h1>
        <h2>About Us</h2>
        <p><img src="asset/gambar/icon/telp.png" width="20px"> : 082322577960</p>
        <p><img src="asset/gambar/icon/email.png" width="20px"> : ElectronicStore@gmail.com</p>
        <p><img src="asset/gambar/icon/fb.png" width="20px"> Faceboook : Electronic Store</p>
        <p><img  src="asset/gambar/icon/ig.jpg" width="20px"> Instagram : @electronicStore</p> 
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          
            <form action="admin/aksi_tamu.php" method="post">
              <div class="from-grub">
                  <label for="nama">Name</label>
                  <input type="text" class="form-control" id="nama" placeholder="your name" name="nama">
              </div>
              <div class="from-grub">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="your email" name="email">
              </div>
              <div class="from-grub">
                  <label for="pesan">Comment</label>
                  <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">Electronic Store.COM © 2020</h5>
    </div>
  </div>
  <!-- kaki -->
  
    
</body>
</html>