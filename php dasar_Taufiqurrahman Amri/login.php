<?php
    include 'config.php';
    include 'function.php';

    if(isset($_POST["daftar"])){
        if (registrasi($_POST) > 0) {
            echo "<script>
            alert('Data Berhasil Ditambahkan !');
            </script>";
        } else {
            echo mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="login.css">
    <!-- ICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="box">
                <div class="header">
                    <header><img src="logo.png" alt="" srcset=""></header>
                    <p>Sign Up to My Website</p>
                </div>  

            <div class="wrap-input">
                    <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="input-field" id="username" required>
                    <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" name="password" class="input-field" id="password" required>
                <i class="bx bx-lock"></i>
            </div>

            <div class="input-box">
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="input-field" id="cpassword" required>
                <i class="bx bx-key"></i>
            </div>
                </div>
                

            <div class="btn">
                <input type="submit" name="daftar" class="input-submit" value="Sign Up Now !" id="daftar" required>
            </div>

            <div class="button">
                <span><a href="masuk.php" style="font-size: larger;" margin-top="50px">Sign In</a></span>
            </div>

        </div>
    </form>
</body>
</html>