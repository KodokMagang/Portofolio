<?php
    session_start();

    include 'config.php';
    if (!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Taufiqurrahman Amri</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Taufiq.</a>

        <nav class="navbar">
            <a href="#"">Home</a>
            <a href="#">About</a>
            <a href="#">Portofolio</a>
            <a href="#">Contact</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
        <section class="home">
                <div class="content">
                    <h1>Halo, Nama saya Taufiqurrahman Amri </h1>
                    
                    <div class="btn">
                        <a href="www.linkedin.com/in/taufiqurrahman-amri" class="linkedin">Linkedin</a>
                        <a href="#" class="instagram">Instagram</a>
                    </div>
                    <!-- <div class="img">
                        <img src="" alt="" srcset="">
                    </div> -->
                </div>
            </section>

    

        <section class="about">
            <div class="konten">
                <h1>- About Me -</h1>
                <div class="image-container">
                            <div class="card">
                                <img src="gambar1.jpg" alt="Gambar 1">
                                
                            </div>
                        </div>
                <p>Saya adalah seorang pengembang perangkat lunak yang kreatif dan bersemangat, dengan hasrat untuk menciptakan solusi teknologi yang inovatif. Dengan latar belakang pendidikan di bidang Teknik Informatika dan pengalaman dalam mengembangkan berbagai aplikasi, saya berfokus pada menghadirkan pengalaman pengguna yang luar biasa. Dengan ketertarikan pada pemecahan masalah dan kemampuan beradaptasi yang baik, saya siap untuk terlibat dalam proyek-proyek menantang yang memungkinkan saya terus berkembang dan memberikan kontribusi positif.</p>
            </div>
        </section>

        
</body>
</html>