<?php
session_start();
require 'koneksi.php';

if(!isset($_SESSION['login'])){
    header('location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index_utama.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>Blue Festival</title>

    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
       
        <ul class="nav-links">
            <label for="checkbox_toggle" class="menuu">&#9776;</label>
            <div class="menu">
                <li><a class="active" href="#">HOME</a></li>
                <li><a href="#lineup">LINE UP</a></li>
                <li><a href="phpcrud/tambah.php">PESAN</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
                <li><i class="bi-brightness-high-fill" id="toggleDark"></i></li>
                    
            </div>
        </ul>
    </nav>

    <div class="row">
       
    </div>

    <div class="artikel" height="30vh">
        <p class="pheading">DESKRIPSI</p>
        <p class="pheading2">Siapa yang ga sabar ikutan Blue Festival, kali ini Blue Festival akan mengadakan konser spesial secara offline pada 14 Desember 2022.  Apa itu Blue festival? Blue festival adalah festival Artis indonesia. Acara ini adalah cara yang tepat bagi Artis Indonesia tercinta untuk mengungkapkan cinta mereka kepada para penggemar mereka. Website ini berfungsi untuk memberikan informasi tentang festival  yang akan diselenggarakan dan tata cara pembelian tiket yang tersedia. Tujuan website ini adalah untuk mempermudah masyarakat dalam memperoleh informasi terbaru mengenai konser-konser yang akan diselenggarakan di Indonesia serta masyarakat dapat membeli tiket secara mudah dan cepat.</h2>
        <p class="pheading">Informasi Penting</p>
        <ul class="pheading2">
            <li>Wajib sudah vaksin lengkap dan memiliki aplikasi Peduli Lindungi.</li>
            <li>Wajib menggunakan masker selama acara berlangsung.</li>
            <li>Wajib menjaga protokol kesehatan yang berlaku.</li>
            <li>Disarankan tidak membawa anak-anak di bawah umur 12 tahun.</li>
        </ul>
        <ul class="pheading2" >
            <li style="list-style-type: none">Tempat dan Waktu</li>
            <li style="list-style-type: none">14 Desember 2022 20.00 WITA, Gor Kadrie Oening</li>
        </ul>
        <p class="pheading">Harga Tiket Blue Festival</p>
        <ul class="pheading2" >
            <li style="list-style-type: none">Tiket Blue Festival sudah bisa kamu beli dari sekarang, lho, sobat tiket! Cek harga </li>
            <li style="list-style-type: none">Tiket Blue Festival</li>
            <li style="list-style-type: none">Di bawah ini:</li>
            <li>Festival : Rp.1.000.000</li>
            <li>VIP : Rp.2.000.000</li>

        </ul>
    </div>
    <h1 class="pheading">AKAN DIMERIAHKAN OLEH</h1>
    <section class="sec" id='lineup'>
        <div class="products">
            <!-- str card -->
        
            <!-- end -->

            <!-- str card -->
            <div class="card" id="dom2">
                <div class="img"><img src="img/slank.jpg" alt=""></div>
                <div class="desc" id="huruf">Slank</div>
                <div class="title" id="huruf1">Slank adalah grup musik Indonesia yang dibentuk oleh Bimbim pada 26 Desember 1983 karena bosan menjadi cover band (band yang menyanyikan lagu dari penyanyi atau band lain) dan punya keinginan untuk menciptakan dan membawakan lagu sendiri.</div>
            </div>
            <!-- end -->

            <!-- str card -->
            <div class="card" >
                <div class="img"><img src="img/test3.jfif" alt=""></div>
                <div class="desc">TULUS</div>
                <div class="title">Tulus ialah salah satu penyanyi top Indonesia yang telah berkarier sejak tahun 2011 silam dan masih aktif hingga sekarang. Penyanyi tersebut telah menorehkan berbagai prestasi di bidang musik. Selama berkarier di dunia musik, ia sudah berhasil membuat kariernya berada di puncak kepopuleran.</div>
            </div>
        </div>
    </section>
    <h1 class="pheading">LAYOUT</h1>
    <div class="layout">
        <div class="layout-2">
          <img id="promosi" src="img/layout.png" alt="pict1" height="300vh" />
        </div>
    </div>
    <script src="dark.js"></script>

    <footer>
        <ul class="footer-incons">
            <li><a href="https://instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://www.youtube.com/watch?v=wdbF3WjnDbI"><ion-icon name="logo-youtube"></ion-icon></a></li>
            <li><a href="https://mail.google.com/"><ion-icon name="mail"></ion-icon></a></li>
        </ul>

        <ul class="footer-menu">
            <li><a href="https://goo.gl/maps/tkbKNgze1CzDJQ6m9">Lokasi</a></li>
            <li><a href="#https://web.whatsapp.com/">Services</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="https://bri.co.id/brilink">Bank</a></li>
        </ul>

        <div class="footer-copyright"><p>Copyright ©2022 by Blue Festival </p></div>
            
    </footer>

</body>
</html>