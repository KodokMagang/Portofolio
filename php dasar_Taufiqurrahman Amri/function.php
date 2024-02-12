<?php
    include 'config.php';

    function registrasi($data) {
        global $koneksi;
        // Ambil data dari formulir
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $cpassword = mysqli_real_escape_string($koneksi, $data["cpassword"]);

        // Cek username sudah pernah atau belum
        $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username Telah Terdaftar! ');
                    </script>";
                    return false;
        }

        // cek password konfirmasi
        if ($password !== $cpassword){
            echo "<script>
                alert('Password dan Konfirmasi Password Salah');
                </script>";

                return false;
        }
        // encrypt password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // insert to DB
        mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$password')");

        return mysqli_affected_rows($koneksi);
    }
?>