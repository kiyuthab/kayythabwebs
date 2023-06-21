<?php
require 'koneksi.php';
$all_data = query("SELECT * FROM donatur");

$total_dana = 0;
$total_harus = 10;
$query = "SELECT nominal FROM donatur";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {
  $total_dana += $row['nominal'];
}

$format_harus = number_format($total_harus, 0, ',', '.');
$format_nominal = number_format($total_dana, 0, ',', '.');

$bar = round(($total_dana / $total_harus) * 100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Masjid Wikrama</title>
</head>
<body>
    <header>
        <img src="img/logo.jpeg" alt="" width="40">
        <h1 id="nav-title">SMK WIKRAMA BOGOR</h1>
        <nav>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#cara">Cara wakaf</a></li>
                <li><a href="#data">Data wakaf</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#web">Web Wikrama</a></li>
            </ul>
        </nav>
    </header>

    <div id="beranda">
    <div class="container">
        <div class="content">
            <p class="tag">Masjid Besar SMK Wikrama Bogor</p>
            <p class="tag1">
                Mari <span class="span">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor
            </p>
            <a href="bantuan.php"><button type="submit">Beri Bantuan shodaqoh</button></a>
        </div>
        <div class="img">
            <img src="img/content.jpg" class="image">
        </div>
    </div>
    </div>

    <div class="totalitas" style="display: flex; justify-content: center; padding-top: 3rem;">
    <div class="cardana" style="border-radius: 10px; box-shadow: 0 0 10px rgb(197, 197, 197); width: 85%; display: flex; justify-content: center;  padding-top: 3rem;">
      <div class="danac-main" style="background-color: white; width: 100%;">
        <div class="danac-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); grid-gap: 10px; padding: 0 20px; max-width: 100%; justify-items: center;">
          <section class="danac-1">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Target Dana</h3>
            <br>
            <h1 style="font-size: 35px; text-align: center; color: black;">Rp.50.000.000,00</h1>
            <br><br>
          </section>
          <section class="danac-2">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Dana Terkumpul</h3>
            <br>
            <h1>
              <?= '<h1 style="font-size: 35px; text-align: center; color: black;"> Rp: ' . $format_nominal . ',00</h1>'; ?>
            </h1>
            <br><br>
          </section>
          <section class="danac-3">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Donatur</h3>
            <br>
            <h1 style="font-size: 25px; text-align: center; color: black;">
              <div class="naon">
                <?php $angka = 0; ?>
                <?php foreach ($all_data as $data) : ?>
                  <?php $angka++ ?>
                <?php endforeach; ?>
                <h1> <?= $angka; ?></h1>
              </div>
            </h1>
            <br>
          </section>
        </div>
        <div style="display: flex; justify-content: center">
          <div class="progress-bar" style="width: 50%; background-color: #ddd; height: 30px; border-radius: 10px; overflow: hidden;">
            <div class="progress" style="background-color: #1F3984; width: <?= $bar ?? 0 ?>%;"></div>
            <span class="progress-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;"></span>
          </div>
        </div>
        <br>
        <h1>
          <?= '<h1 style="color: black; display: flex; justify-content: center;">' . $bar  . '%</h1>'; ?>
        </h1>
        <br><br><br>
        <div style="border-radius: 10px; background-color: #1F3984;  height: 80px; display: flex; justify-content: center; align-items: center;">
          <marquee behavior="scroll" direction="left" scrollamount="20" style=" width: 100%; white-space: nowrap;overflow: hidden;">
            <?php foreach ($all_data as $dnt) { ?>
              <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: #FFFFFF;">
                <?= $dnt["nama"]; ?>
                <h3 style="display: inline-block; margin: 0; padding-right: 10px; color:#FFFFFF;"> - </h3>
              </h3>
              <h3 style="display: inline-block; margin: 0; padding-right: 50px; color: yellow;">
                <?= $dnt["kategori"]; ?>
                Rp. <?= number_format($dnt['nominal'], 2, ',', '.'); ?>
              </h3>
            <?php } ?>
          </marquee>
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="content3" style="margin-right: 50px;">
    <div class= "banner" style="margin-right: 50px;">
      <div class= "bannertext">
        <center><li>BANNER</li></center>
      </div>
    </div>
  </div>


    <div class="content1">
        <div class="info">
            <h2><span class="info1">Manfaat</span> Wakaf, Infaq Shodaqoh</h2>
        </div>
            <p class="tag2">
            Berikut Adalah Beberapa Keutamaan Wakaq, Infaq Shodaqoh Yang Akan Anda Dapatkan.
            </p>
        </div>

    <div class="container1">
      <div class="top-cards">
        <div class="card">
          <div class="card-img">
            <img src="img/love.png" alt="" width="40"> 
          </div>
          <br><br>
          <h1>Menjadikan hati lebih tenang</h1>
          <br> 
          <p>Kami memberikan harga yang terbaik dibandingkan
          dengan kompetitor kami.</p>
        </div>
        <div class="card">
          <div class="card-img">
            <img src="img/check1.png" alt="" width="40">
          </div>
          <br><br>
          <h1>Terbukanya pintu rezeki</h1> 
          <br>
          <p>Allah akan membuka pintu rezeki dari arah yang tidak
          dikira sebelummnya</p>
        </div>
      </div>

      <div class="bottom-cards">
        <div class="card">
          <div class="card-img">
            <img src="img/check2.png" alt="" width="40">
          </div>
          <br><br>
          <h1>Menjauhkan dari bahaya</h1> 
          <br>
          <p>Rasulullah SAW pernah bersabda: "Bersegeralah untuk
          bersedekah , karena musibah dan bencana tidak bisa mendahului sedekah."</p>
        </div>
        <div class="card">
          <div class="card-img">
            <img src="img/star.png" alt="" width="40">
          </div>
          <br><br>
          <h1>Pahala yang tak terputus</h1>
          <br> 
          <p>Ini akan menolong kita di akhirat nantinya, juga dapat
          menyelamatkannya dari api neraka.</p>
        </div>
      </div>
    </div>
    <div class="image-container">
      <img src="img/tangan.jpeg" alt="Gambar">
    </div>

    <div id="cara">
    <div class="content1">
        <div class="info">
            <h2><span class="info1">Cara Melakukan </span> Wakaf, Infaq Shodaqoh</h2>
        </div>
            <p class="tag2">
            Berikut adalah cara melakukan wakaq, infaq shodaqoh untuk Membantu Pembangunan Masjid Besar SMK Bogor.
            </p>
        </div>
    
    <div class="container2">
      <div class="top-cards2">
        <div class="card2">
          <h1><span>01</span></h1>
          <br>
          <h1>Isi Form Data Diri</h1>
          <br>
          <p>Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
        </div>
        <div class="card2">
          <h1><span>02</span></h1>
          <br>
          <h1>Isikan Nominal Shodaqoh</h1> 
          <br>
          <p>Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
        </div>
      </div>

      <div class="bottom-cards2">
        <div class="card2">
          <h1><span>03</span></h1>
          <br>
          <h1>Upload Bukti Pembayaran</h1> 
          <br>
          <p>Pilih motode pembayaran dan upload bukti pembayaranya.</p>
        </div>
        <div class="card2">
          <h1><span>04</span></h1>
          <br>
          <h1>Verifikasi Pembayaran</h1>
          <br> 
          <p>Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
        </div>
      </div>
    </div>

    <div class="content1">
        <div class="info">
            <h2><span class="info1">Data Donatur </span>Wakaf, Infaq Shodaqoh.</h2>
        </div>
            <p class="tag2">
            Berikut adalah data donatur wakaf, infaq shodaqoh untuk masjid besar SMK Wikrama Bogor
            </p>
    </div>
    <table border="1">
      <thead>
          <tr>
              <th>Nama Donatur</th>
              <th>Paket</th>
              <th>Kategori</th> 
              <th>Nominal</th>
          </tr>
      </thead> 
      <tbody>
      <?php $i = 1; ?>
          <?php foreach( $all_data as $data ) { ?>
          <tr>
              <td><?= $data["nama"]?></td>
              <td><?= $data["paket"] ?></td>
              <td><?= $data["kategori"] ?></td>
              <td><?= $data["nominal"] ?></td>
          </tr>
          <?php $i++ ?>
          <?php } ?>
      </tbody>
    </table>

    <div id="gallery">
    <div class="content1">
        <div class="info">
            <h2><span class="info1">Gallery </span>Masjid Besar SMK Wikrama Bogor</h2>
        </div>
            <p class="tag2">
            Berikut adalah gallery masjid besar sMK Wikrama Bogor.
            </p>
        </div>
    <div class="gallery">
      <div class="top-gallery">
        <div class="gallery-img">
          <img src="img/masjid1.jpeg" alt="" width="360">
          <img src="img/masjid2.jpeg" alt="" width="360">
          <img src="img/masjid3.jpeg" alt="" width="360">
        </div>
      </div>
      <div class="bottom-gallery">
        <div class="gallery-img">
          <img src="img/masjid4.jpeg" alt="" width="360">
          <img src="img/mesjid5.jpeg" alt="" width="360">
          <img src="img/buka-gallery.jpeg" alt="" width="360">
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="clearfix">
    <footer class="footer-main">
      <div class="footer-grid">
        <section class="footer-1">
          <img src="img/logo.jpeg" alt="" width="55">
          <h1 style="float:right; padding: 15px;">SMK Wikrama Bogor</h1>
          <br><br>
          <h3>Alamat</h3>
          <h3>Jl. Raya Wangun <br> Keluarahan Sindangsari <br> Bogor Timur 16720</h3>
          <br>
          <hr>
          <br>
          <h3>Telepon <br> 0251-8242411 / <br> 082221718035 (whatsapp)</h3>
          <br>
          <hr>
          <br>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
        </section>
        <section class="footer-2">
          <br><br>
          <h4>Tentang Wikrama</h4>
          <ul>
            <li>Sejarah</li>
            <li>Peraturan</li>
            <li>Rencana Stategi & Prestasi</li>
            <li>Yayasan</li>
            <li>Struktur Organisasi</li>
            <li>Cabang</li>
            <li>Sejarah</li>
            <li>Kerjasama</li>
          </ul>

        </section>
        <section class="footer-3">
          <br><br>
          <h4>Pesan</h4>
          <div class="input-container">
            <div class="input-column">
              <input type="text" name="input1" placeholder="Nama" style="height: 25px; ">
            </div>
            <div class="input-column">
              <input type="text" name="input2" placeholder="Email" style="height: 25px;">
            </div>
            <div class="input-column">
              <input type="text" name="input3" placeholder="Pesan Anda" style="height: 100px;">
            </div>
            <br>
            <button name="submit" style="width: 75px">Kirim</button>
          </div>
        </section>
      </div>
    </footer>
  </div>
</body>
</html>