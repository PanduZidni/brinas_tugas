<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project UTS Pemograman Web</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/animate.css" />
    <link rel="stylesheet" href="./assets/bootstrap/structure.css" />
  </head>
  <body>
    <!-- HTML Header -->
    <header id="header">
      <div class="container">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#navbar"
                aria-expanded="false"
                aria-controls="navbar"
              >
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                <span class="icon-bar"></span> <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./home.php"><span>Berita</span>Unas</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li class=""><a href="./home.php">Home</a></li>
                <li class="dropdown">
                  <a href="./category.html" role="button" aria-expanded="false">Category</a>
                </li>
                <li><a href="./about.html">About</a>
                </li>
                <li><a href="./login.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <form id="searchForm">
          <input type="text" placeholder="Search..." />
          <input type="submit" value="" />
        </form>
      </div>
    </header>

     <!-- Berita Rekomendasi -->
     <div id="beritaRekom">
      <div class="center">
        <h1 class="judul">Berita Terbaru</h1>

        <div class="rekomendasi">
          <!-- Rekomendasi sebelah kiri -->
          <div class="rekomKiri">
            <h3>Citayam Fashion Week di Dukuh Atas Mulai Sepi</h3>
            <img src="./assets/images/cfw.jpg" />
            <p style="margin-top: 20px;">
              Hampir seperti jalan-jalan biasanya, kawasan Stasiun BNI City, Dukuh Atas,
              Jakarta Pusat, atau yang biasa disebut Citayam Fashion Week (CFW), kini mulai
              kembali seperti…
            </p>
            <div class="button">
              <a href="detail1.html">Baca Selengkapnya</a>
            </div>
          </div>
          <div class="rekomKanan">
            <h3>Awal Mula Pesulap Merah Bongkar Ilmu Kedukunan</h3>
            <img src="./assets/images/marcel.jpg" />
            <p style="margin-top: 20px;">
              Marcel Radhival atau yang dikenal dengan Pesulap Merah baru-baru ini sukses
              menyedot perhatian publik. Pria berusia 26 tahun tersebut sempat viral di...
          </p>
            </p>
            <div class="button">
              <a href="detail2.html">Baca Selengkapnya</a>
            </div>
          </div>
    
          <!-- Rekomendasi sebelah kanan -->
          <div class="rekomKiri">
            <h3>Pasar Kripto Lesu Jelang Akhir Pekan</h3>
            <img src="./assets/images/bitcoin.jpg" />
            <p style="margin-top: 20px;">
              Menjelang akhir pekan, pasar kripto melaju lesu, walaupun terpantau memasuki zona hijau. Secara keseluruhan pasar masih belum mampu bangkit sepenuhnya seperti pekan…
            </p>
            <div class="button">
              <a href="detail3.html">Baca Selengkapnya</a>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="rekomKanan">
            <h3>Dirasa Kurang Efektif, Sistem EW SU-34 Akan Ditingkatkan</h3>
            <img src="./assets/images/hot_img1.jpg" />
            <p style="margin-top: 20px;">
              Sistem perangkat elektronik (EW) yang dipasang pada pembom garis depan Su-34 akan
              ditingkatkan dengan mempertimbangkan hasil penggunaan pembom tersebut dalam operasi
              militer khusus rusia....
            </p>
            <div class="button">
              <a href="detail.html">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />
    <section id="tutors">
      <div class="tengah">
        <div class="kolom">
          <p class="deskripsi"></p>
          <h2>Trending #1</h2>
        </div>

        <div class="tutor-list">
          <div class="kartu-tutor">
            <img src="https://www.borneonews.co.id/images/upload/wa/2021/05/10/1620657336-16.jpg" />
            <p>- Politik</p>
            <p>
              Pemindahan Ibu Kota Negara dari DKI Jakarta ke Kalimantan Timur tinggal menunggu
              pembahasan realisasi Pemerintah telah mengirim surat presiden, terkait Rancangan
              Undang-undang Ibu Kota Negara (RUU IKN) ke DPR pada 29 September 2021.
            </p>
          </div>
          <div class="kartu-tutor">
            <img
              src="https://pbs.twimg.com/profile_images/730271326150103042/gR9RVbmC_400x400.jpg"
            />
            <p>- Teknologi</p>
            <p>
              Sejarah Facebook yang Ganti Nama Jadi Meta, Aplikasi yang Dikuasai Mark Zuckerberg: IG
              hingga WA perusahaan milik miliarder Mark Zuckerberg, Meta Platforms Inc., tersingkir
              dari daftar 10 perusahaan terbesar di dunia.
            </p>
          </div>
          <div class="kartu-tutor">
            <img src="https://www.borneonews.co.id/images/upload/wa/2021/04/03/1617408515-6.jpg" />
            <p>- Olahraga</p>
            <p>
              Pep Guardiola memberikan komentarnya terkait dengan perekrutan Erling Haaland ke
              Manchester City.Manchester City mengonfirmasi mereka sudah menemui kesepakatan dengan
              Borussia Dortmund untuk transfer Erling Haaland.
            </p>
          </div>
        </div>
      </div>
    </section>

    <div id="copyright">copyright &copy; 2022. <b>Kelompok 1</b> Universitas Nasional.</div>
    <script src="./assets/bootstrap/js/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/bootstrap/js/wow.min.js"></script>
    <script src="./assets/bootstrap/js/custom.js"></script>
  </body>
</html>
