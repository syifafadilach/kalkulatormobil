<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: arial,helvetica,sans-serif;
            color: #10254a;
            background: #eef6ff;
        }
        
        .navbar {
            width: 100%;
            height: 72px;
            background: rgb(225, 255, 255, 0.96);
            display: flex;
            align-items: center;
            position: relative;
            z-index: 10;
            border-bottom: 1px solid#edf2f7;
        }

        .nav-container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            height: 100%;
            padding: 0 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .logo img {
            width: 105px;
            height: auto;
            display: block;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 42px;
        }

        .nav-menu a{
            position: relative;
            color: #26344d;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            padding: 27px 0;
            transition: 0.3s ease;
        }

        

        img {
            height: 500px;
        }

        .carousel-caption {
        top: 40%;
        bottom: auto;

        }

        .card{
            border-radius: 20px;
            overflow: hidden;
            width: 80%;
            max-width: 900px;
            margin: 30px auto;
        }

        .card-body{
            background: #ffffff;
        }

        .card-title{
            font-size: 36px;
        }

        .card p{
            line-height: 1.7;
        }

        .card img{
            min-height: 450px;
            object-fit: cover;
        }

        
        

        .kalkulator-wrapper{
            max-width: 500px;
            margin: 0 auto;
            background: #b7d0f0;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(15, 31, 61, 0.08);
            padding: 40px;
            display: block;
            

        }
         .form-group{
            margin-bottom: 18px;
        }
        .form-group label{
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--navy-900);
            margin-bottom: 6px;
        }

        .btn-hitung {
            width: 100%;
            padding: 14px;
            background:hsl(214, 79%, 75%);
            color: var(--white);
            border: none;
            border-radius: var(--radius-md);
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background .2s ease;
        }

        .btn-hitung:hover {
            background: #1d4ed8;
        }


        .footer{
            width: 100%;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 70px;
            box-sizing: border-box;
            background: transparent;
        }
        .footer-logo img{
            width: 50px;
            height: auto;
            display: block;
        }

        .footer-copy{
            flex: 1;
            text-align: center;
            margin-right: 145px;
            font-size: 14px;
            color: #52627a;
        }
           

        


    </style>
</head>
<body>
<?php    
if (isset($_GET["pesan"])){
    $pesan = "<p> {$_GET["pesan"]} <p>";
}
else {
    $pesan = "";
}

   // ambil nilai nama jika ada
 if (isset($_GET["nama"])){
 $nilai_nama = $_GET["nama"];
 }
 else {
 $nilai_nama = "";
 }

 // ambil nilai email jika ada
 if (isset($_GET["email"])){
 $nilai_email = $_GET["email"];
 } else {
 $nilai_email = "";
 }

 // ambil nilai harga mobil jika ada
 if (isset($_GET["hargamobil"])){
 $nilai_hargamobil = $_GET["hargamobil"];
 } else {
 $nilai_hargamobil = "";
 }

 // ambil nilai harga mobil jika ada
 if (isset($_GET["tenor"])){
 $nilai_tenor = $_GET["tenor"];
 } else {
 $nilai_tenor = "";
 }

 // ambil nilai harga mobil jika ada
 if (isset($_GET["dp"])){
 $nilai_dp = $_GET["dp"];
 } else {
 $nilai_dp = "";
 }
 ?>
     <header calss="navbar">
        <div class="nav-container">
        <a href="#" class="logo">
            <img src="aset/download__53_-removebg-preview.png" alt=""></a>
             <nav class="nav-menu">
                <a href="#">beranda</a>
                <a href="#">Mobil</a>
                <a href="#">Promo</a>
                <a href="#">Tentang</a>
             </nav>
        </div>
    </header>

   <!--SLIDER-->
<section id="beranda">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aset/Toyota Fortuner Legender Wallpaper.jpg"  class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="aset/fortuner legender.jpg" class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="aset/Introducing the New Toyota Fortuner GR S, Powerful Engine, Feature Updates.jpg" class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<div class="cointainer mt-5">
    <div class="card shadow-lg border-0">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="card-body p-5">
                    <span class="badge bg-primary mb-3">TOYOTA</span>
                    <h2 class="card-title fw-bold">
                        Toyota fortuner
                    </h2>
                    <p class="text-muted">Toyota Motor Corporation adalah salah satu produsen otomotif terbesar di dunia yang bermarkas di Aichi, Jepang. Perusahaan ini awalnya bermula dari divisi otomotif pabrik tenun otomatis milik Sakichi Toyoda, yang kemudian dikembangkan oleh putranya, Kiichiro Toyoda, hingga resmi berdiri sendiri sebagai perusahaan otomotif pada 28 Agustus 1937.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="aset/download (56).jpg" alt="toyota fortuner" class="img-fluid h-100 w-100 object-fit-cover">
            </div>
        </div>
    </div>
</div>
       
        <form action="proses.php" method="POST">
            <div class="kalkulator-wrapper">
        <div class="form-section">
            <div class="header">
                <div class="icon-circle"></div>
                <div>
                    <h2>kalkulator Harga Mobil</h2>
                    <p>Isi data dibawah ini untuk mengetahui estimasi cicilan mobil impian Anda</p>
                    </div>
                    </div>
    <?php
   if (isset($_GET['pesan'])) {
    echo $_GET['pesan'];
   }
   ?>
         <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?php echo $nilai_nama?>"  id="">

</div>
         <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email"   value="<?php echo$nilai_email?>" id="">
</div>

        <div class="form-group">
        <label for="">Harga Mobil</label>
        <input type="number" name="hargamobil" value="<?php echo$nilai_hargamobil?>" id="">
    
</div>
   <div class="form-group">
    <label>Tenor</label>

    <div class="tenor-options">
        <label class="tenor-item">
            <input type="radio" name="tenor" value="1"
            <?php if ($nilai_tenor == "1") echo "checked"; ?>>
            <span>1 Tahun</span>
        </label>

        <label class="tenor-item">
            <input type="radio" name="tenor" value="2"
            <?php if ($nilai_tenor == "2") echo "checked"; ?>>
            <span>2 Tahun</span>
        </label>

        <label class="tenor-item">
            <input type="radio" name="tenor" value="3"
            <?php if ($nilai_tenor == "3") echo "checked"; ?>>
            <span>3 Tahun</span>
        </label>

        <label class="tenor-item">
            <input type="radio" name="tenor" value="4"
            <?php if ($nilai_tenor == "4") echo "checked"; ?>>
            <span>4 Tahun</span>
        </label>

        <label class="tenor-item">
            <input type="radio" name="tenor" value="5"
            <?php if ($nilai_tenor == "5") echo "checked"; ?>>
            <span>5 Tahun</span>
        </label>
    </div>
</div>

        <br> <br>
         <div class="form-group">DP
        <select name="dp">
        <option value="10" <?php if ($nilai_dp == "10") echo "selected"; ?>>10%</option>
        <option value="20" <?php if ($nilai_dp == "20") echo "selected"; ?>>20%</option>
        <option value="30" <?php if ($nilai_dp == "30") echo "selected"; ?>>30%</option>
        <option value="40" <?php if ($nilai_dp == "40") echo "selected"; ?>>40%</option>
        <option value="50" <?php if ($nilai_dp == "50") echo "selected"; ?>>50%</option>
    </select>
</div>

        <br> <br>
         <button type="submit" name="submit" class="btn-hitung">Hitung</button>

          

</div>
</div>
</form>
   <footer class="footer">
    <div class="footer-logo">
        <img src="aset/download__53_-removebg-preview.png" alt="Toyota">
    </div>
    <div class="footer-copy">
        2026 Toyota.All rights reserved.
    </div>

   </footer>

   

</body>
</html>