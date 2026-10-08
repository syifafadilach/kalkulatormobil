 <?php
 if(!isset($_POST["submit"])){
 header("Location:tugasmobilnew.php");
 die();
}
 ?>

<!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
 <title>Belajar PHP</title>
 </head>
 <body>
   <?php
    //var_dump($_POST);
if (isset($_POST['submit'])){
    $hargamobil = $_POST ['hargamobil']  ;
    $tenor = $_POST ['tenor'] ;
    $dp = $_POST ['dp'] ;
    $hargadpmobil = 0;
    $bunga = 20;
    $jumlahangsuran = 0;
    $nama=trim($_POST["nama"]);
    $email=trim($_POST["email"]);

    $query_nama = "nama=" .urlencode($nama);
    $query_email = "email=" .urlencode($email);
    
    $query_hargamobil = "hargamobil=" .urlencode($hargamobil);
    $query_tenor = "tenor=" .urlencode($tenor);
    $query_dp = "dp=" .urlencode($dp);

    $isi_form="&$query_nama&$query_email&$query_hargamobil&$query_tenor&$query_dp";

    if (empty($nama)){
    $pesan= urlencode("Nama harus diisi");
    header("Location:tugasmobilnew.php?pesan=$pesan$isi_form");
    die();
    }
    if (empty($email)){
    $pesan= urlencode("Email harusdi isi");
    header("Location:tugasmobilnew.php?pesan=$pesan$isi_form");
    die();
    }
    if (empty($tenor)){
    $pesan= urlencode("tenor harus diisi");
    header("Location:tugasmobilnew.php?pesan=$pesan$isi_form");
    die();
    }
    if (empty($dp)){
    $pesan= urlencode("Dp harus diisi");
    header("Location:tugasmobilnew.php?pesan=$pesan$isi_form");
    die();
    }
    if (empty($hargamobil)){
    $pesan= urlencode("harga mobil harus diisi");
    header("Location:tugasmobilnew.php?pesan=$pesan$isi_form");
    die();
    }
 
    
    
    //mencari dp harga mobil
    if ($dp == 10) {
        $hargadpmobil = ($dp/100) * $hargamobil;
    } elseif($dp == 20){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif($dp == 30){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif($dp == 40){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }elseif($dp == 50){
         $hargadpmobil = ($dp/100) * $hargamobil;
    }

    //mencari lama angsuran
    $lamaangsuran = 0;
    if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 2){
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 3){
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 4){
        $lamaangsuran = $tenor * 12;
    }elseif($tenor == 5){
        $lamaangsuran = $tenor * 12;
    }

    //mencari bunga
    if ($bunga == 20){
        $bunga = 20/100 * $hargamobil;
    }

    //menghitung jumlah angsuran
    if ($lamaangsuran > 0) {
        $jumlahangsuran = ($hargamobil - $hargadpmobil + $bunga) / $lamaangsuran;

    }
}else{
    echo"Halaman ini hanya bisa diakses dari form!";
    }

   
    ?>
    <div class="hasil-card">
            <h3>Hasil Perhitungan</h3>
            <div class="estimasi">
                <small>Rp</small>
                <strong><?= number_format($jumlahangsuran, 0,',','.') ?></strong>
            </div>
            <div class="estimasi_detail">
                <span>Nama</span>
                <strong><?= $nama ?></strong>
            </div>
            <div class="estimasi_detail">
                <span>Email</span>
                <strong><?= $email ?></strong>
            </div>
            <div class="estimasi_detail">
                <span>Harga Mobil</span>
                <strong><?= number_format($hargamobil, 0,',','.') ?></strong>
            </div>
            <div class="estimasi_detail">
                <span>Tenor</span>
                <strong><?= $tenor ?>Tahun</strong>
            </div>
            <div class="estimasi_detail">
                <span>DP</span>
                <strong><?= number_format($hargadpmobil, 0,',','.') ?></strong>
            </div>
            <div class="estimasi_detail">
                <span>Total Bunga</span>
                <strong><?=  number_format($bunga, 0,',','.')?></strong>
            </div>
            <div class="estimasi_detail">
                <span>Lama angsuran</span>
                <strong><?=  number_format($lamaangsuran, 0,',','.')?> bulan</strong>
            </div>
         </div>
        </div>

 
 </body>
 </html>