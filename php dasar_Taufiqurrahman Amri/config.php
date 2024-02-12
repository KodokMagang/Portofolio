<?php 
$koneksi = mysqli_connect("localhost","root","","db_rpl_taufiqurrahman");

if (mysqli_connect_errno()){
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

return array(
    'host' => "localhost",
    'username' => "root",
    'password' => "",
    'dbname' => "db_rpl_taufiqurrahman",
);

?>
