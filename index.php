<?php
include 'koneksi.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <header class="header">
            <nav class="nav">
                <div class="logo">zzaaaput</div>
                <div class="nav-links">
                    <a href="#about">about</a>
                    <a href="#ekskul">ekskulekuler</a>
                    <a href="#contact">contact</a>
                </div>
                <div class="logo-icon"><img src="images/logo.png" alt="logo icon"></div>
            </nav>

            <div id="home" class="home">
                <div class="home-content">
                    <div class="star-icon">⭐</div>
                    <h1>Pendaftaran<br>EKSTRAKURIKULER<br>SMKN 1 Kota Bekasi</h1>
                    <p>Selamat datang di website ekskulekuler SMK Negeri 1 Kota Bekasi</p>
                    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Pendaftaran</a>
                </div>
                <div class="home-image">
                    <img src="images/fotoSmk.png" alt="images">
                </div>
            </div>
        </header>
        
        <div class="ticker">
            <div class="ticker-content">
                <span>ATLETIK</span>
                <span>•</span>
                <span>P3</span>
                <span>•</span>
                <span>ATLETIK</span>
                <span>•</span>
                <span>SENI</span>
                <span>🌶️</span>
                <span>KEAGAMAAN</span>
                <span>•</span>
                <span>SPORT</span>
                <span>•</span>
                <span>ATLETIK</span>
                <span>•</span>
                <span>SENI</span>
                <span>🌶️</span>
            </div>
        </div>
        
        <section id="about" class="about">    
            <h1>About</h1>
            <br><br>
            <p>SMK Negeri 1 Kota Bekasi merupakan sekolah yang ditunjuk oleh Direktorat 
                Pembinaan SMK (PSMK) sebagai Rintisan Sekolah Bertaraf Internasional untuk 
                seluruh kompetensi keahlian yang ada di dalamnya sejak tahun 2008. 
                Terletak di Jalan Bintara VIII No. 2, Bintara, Bekasi Barat. 
                SMK Negeri 1 Kota Bekasi didirikan 
                pada tahun 1997 dengan nama STM Negeri 1 Kota Bekasi berdasarkan 
                berdasarkan surat keputusan nomor 107/O/1997 dan pada 
                tahun 29 April 1998 berganti nama menjadi SMK Negeri 1 Kota Bekasi.</p>
        </section>

        <section id="ekskul" class="ekskul">
            <div class="ekskul-card">
                <h2 class="ekskul-title">AMBALAN RESIDIEN</h2>
                <img src="images/pramuka.png" alt="Cosiness Spice" class="ekskul-image">
                <a href="tambah.php"><button class="add">DAFTAR SEKARANG!</button></a>
            </div>

            <div class="ekskul-card">
                <h2 class="ekskul-title">DRUPADI</h2>
                <img src="images/tari.png" alt="Intensity Spice" class="ekskul-image">
                <a href="tambah.php"><button class="add">DAFTAR SEKARANG!</button></a>
            </div>

            <div class="ekskul-card">
                <div class="top-pick">TOP PICK</div>
                <h2 class="ekskul-title">MUSIK</h2>
                <img src="images/musik.png" alt="Passion Spice" class="ekskul-image">
                <a href="tambah.php"><button class="add">DAFTAR SEKARANG!</button></a>
            </div>

            <div class="ekskul-card">
                <h2 class="ekskul-title">ROCKINONE</h2>
                <img src="images/basket.png" alt="Intensity Spice" class="ekskul-image">
                <a href="tambah.php"><button class="add">DAFTAR SEKARANG!</button></a>
            </div>

            <div class="ekskul-card">
                <h2 class="ekskul-title">FUTSAL</h2>
                <img src="images/sepakBola.png" alt="Intensity Spice" class="ekskul-image">
                <a href="tambah.php"><button class="add">DAFTAR SEKARANG!</button></a>
            </div>
        </section>
        
        <section id="list">
            <?php include 'list.php'; ?>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <form id="contact-form">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>


        <footer class="footer">
            <div class="footer-content">
                <!-- Logo and Description Section -->
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="images/logo.png" alt="Logo">
                        <h2>zzaaaput</h2>
                    </div>
                    <p class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                    <div class="contact-info">
                        <i class="location-icon">📍</i>
                        <span>Jl. Bintara VIII No. 2, Kel. Bintara, Kec. Bekasi Barat, Kota Bekasi 17134, Jawa Barat, Indonesia Indonesia</span>
                    </div>
                    <div class="contact-info">
                        <i class="phone-icon">📞</i>
                        <span>(021) 8895 1151</span>
                    </div>
                    <div class="contact-info">
                        <i class="email-icon">✉️</i>
                        <span>info@smkn1kotabekasi.sch.id</span>
                    </div>
                </div>
                

                <!-- Navigation Section -->
                <div class="footer-section">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#ekskul">ekskulekuler</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div>
        
                <!-- Quick Link Section -->
                <div class="footer-section">
                    <h3>Link</h3>
                    <ul>
                        <li><a href="#">Ambalan Residen</a></li>
                        <li><a href="#">Drupadi</a></li>
                        <li><a href="#">Musik</a></li>
                        <li><a href="#">Rockinone</a></li>
                        <li><a href="#">Futsal</a></li>
                    </ul>
                </div>
        
                <!-- Services Section -->
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>© 2025 ekskulekuler SMK Negeri 1 Kota Bekasi </p>
            </div>
        </footer>
</body>
</html>
