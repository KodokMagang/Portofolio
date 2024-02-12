<?php
    session_start();

    if (isset($_SESSION["login"])){
        header(("Location: index.php"));
        exit;
    }

    include 'config.php';   

    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1 ){
            
            // Cek Password
            $row = mysqli_fetch_assoc($result);
            if ( password_verify($password, $row["password"]) )
            {
                // Set Session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
                
            }
        }
        $error = true;
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
    <link rel="stylesheet" href="masuk.css">
    <!-- ICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="box">
                <div class="header">
                    <header><img src="logo.png" alt="" srcset=""></header>
                    <p>Sign In to My Website</p>
                </div>  

                <?php if (isset($error)) : ?>
                <div class="alert alert-danger" role="alert" style="text-align: center; font-style=italic;
                        font-size: large; color: crimson;">Username atau Password salah.</div>
                <?php endif ;?>

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
                </div>
                

            <div class="btn">
                <input type="submit" name="login" class="input-submit" value="Sign In !" id="daftar" required>
            </div>

            <div class="button">
                <span><a href="login.php" style="font-size: larger;" margin-top="50px">Sign Up</a></span>
            </div>

        </div>
    </form>
</body>
</html>     