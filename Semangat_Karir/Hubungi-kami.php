<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="nav">
            <h1>
                <a href="#CareerHub"></a>CareerHub</h1>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Lowongan Pekerjaan</a></li>
        </ul>
    </nav>
    <div class="container-KP">
        <img src="Images/img-2.jpg" alt="" class="img-kp">
        <div class="content-kp">
            <h1>Hubungi-kami</h1>
            <a href="index.html">Beranda</a>
        </div>
    </div>
    <div class="container-hk">
        <div class="konten-area-hk1">
            <div class="header-hk">
                <h2>Kontak Kami</h2>
                <p>Kami hadir untuk membantu anda mencari pekerjaan. <br> jika kamu butuh bantuan, berikut adalah kontak kami.</p>
            </div>
            <div class="kontak-konten">
                <div class="kontak-konten-1">
                    <img src="Images/adit.jpeg" alt="" class="poto-profil">
                </div>
                <div class="kontak-konten-2">
                    <span class="nama-kontak">Aditya Arya Sukma</span>
                    <div class="profil-container">
                        <i class="fab fa-whatsapp whatsapp-icon"></i>
                        <span class="whatsapp-number">089603771153</span>
                        <br>
                        <i class="fab fa-instagram instagram-icon"></i>
                        <a href="https://www.instagram.com/adityaaryass/?next=%2F" style="color: black; text-decoration: none;"> <span class="instagram-text-1">@adityaaryass</span></a>
                    </div>
                </div>
            </div>
            <div class="kontak-konten-ke2">
                <div class="kontak-konten-1-1">
                    <img src="Images/Olif.jpeg" alt="" class="poto-profil">
                </div>
                <div class="kontak-konten-2-1">
                    <span class="nama-kontak-1">Annisa Nur Kholifah</span>
                    <div class="profil-container-1">
                        <i class="fab fa-whatsapp whatsapp-icon-1"></i>
                        <span class="whatsapp-number-1">088289642368</span>
                        <br>
                        <i class="fab fa-instagram instagram-icon-1"></i>
                        <a href="https://www.instagram.com/anisakhlf_/" style="color: black; text-decoration: none;"> <span class="instagram-text-1-2">@anisakhlf_</span></a>
                    </div>
                </div>
            </div>
            <div class="kontak-konten-ke2-1">
                <div class="kontak-konten-1-1-1">
                    <img src="Images/img-1.jpg" alt="" class="poto-profil">
                </div>
                <div class="kontak-konten-2-1-1">
                    <span class="nama-kontak-1-1">Aditya Arya Sukma</span>
                    <div class="profil-container-1-1">
                        <i class="fab fa-whatsapp whatsapp-icon-1-1"></i>
                        <span class="whatsapp-number-1-1">089603771153</span>
                        <br>
                        <i class="fab fa-instagram instagram-icon-1-1"></i>
                        <a href="https://www.instagram.com/adityaaryass/?next=%2F" class="instagram-text-1-1">@adityaaryas</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="konten-area-hk2">
            <form action="contact_from.php" method="post" class="contact-form">
                <div class="header-hk">
                    <h2 class="header-hk">Berikan Kami Ulasan</h2>
                    <input type="text" placeholder="Nama" name="name">
                    <input type="email" placeholder="Alamat Email" name="email">
                    <input type="text" placeholder="No Telepon" name="phone">
                    <textarea rows="10" placeholder="Pesan" name="message"></textarea>
                    <button class="bt-class">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="container-footer">
            <div class="row">
                <div class="col" id="company">
                    <h3><span style="border-bottom: 2px solid red;">Tentang Loker</span></h3>
                    <p>Kami adalah portal pencari lowongan pekerjaan part time. <br> Loker yang kami cari adalah loker tentang IT yang <br> bekerja secara WFH.
                        <div class="social">
                            <a href="https://www.facebook.com/ahmdsyd24/?locale=id_ID"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/sayyiduliman/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                        </div>
                    </p>
                </div>
                <div class="col" id="Tentang Kami">
                    <h3><span style="border-bottom: 2px solid red;">Tentang Kami</span></h3>
                    <div class="links">
                        <a href="Hubungi-kami.html">Hubungi Kami</a><br>
                        <a href="Logo.html">Logo CareerHub</a><br>
                        <a href="Kebijakan Privasi.html">Kebijakan dan Ketentuan</a>
                    </div>
                </div>
                <div class="col" id="Contact">
                    <h3><span style="border-bottom: 2px solid red;">Contact</span></h3>
                    <div class="contact-details">
                        <i class="fa fa-location"></i>
                        <p>Purwakarta, Jawabarat, Indonesia</p>
                    </div>
                    <div class="contact-details">
                        <i class="fa fa-phone"></i>
                        <p>+62-1000000000</p>
                    </div>
                </div>
            </div>
    </footer>
</body>

</html>