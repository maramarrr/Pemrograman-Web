<?php
session_start();

$username_valid = "admin";
$password_valid = "123";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: index.html");
    exit();
}

echo $_POST['username'];
echo $_POST['password'];



if(($_POST['username'] == $username_valid) && ($_POST['password'] == $password_valid)){

    $_SESSION['login'] []= [
        'username' => 'username',
        'password' => 'password',
        'login_time' => date('Y-m-d H:i:s')
    ];
    //jika benar
    echo "Selamat datang " . $username . ", anda sudah login sebanyak: " . count($_SESSION['login']) . " kali";
    echo "<br>";
    echo "<a href='logout.php'>Logout</a>";
    echo '<pre>';
    var_dump($_SESSION['login']);
    

} else {
    echo "Login Gagal";
}