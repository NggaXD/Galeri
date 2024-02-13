<?php

$servername = "localhost";
$database = "galeri";
$username = "root";
$password = "";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
mysqli_close($conn);


session_start();        



// bikin koneksi
$c = mysqli_connect('localhost','root','','galeri');

// login
if(isset($_POST['login'])){
    // initiate variabel 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($c,"SELECT * FROM user WHERE Username='$username' and Password='$password'");
    $hitung = mysqli_num_rows($check);
    if($hitung>0){
        // jika datanya  berhasil ditemukan
        // berhasil login

        $_SESSION['login'] = 'True';
        header('location:index.php');
    } else{
        // data tidak ditemukan
        // gagal login
        echo '
        <script>alert("Username atau Password salah");
        window.location.href="login.php"
        </script>
        ';
    }
}

    if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $namalengkap=$_POST['namalengkap'];
    $alamat=$_POST['alamat'];

    $insert = mysqli_query($c,"insert into user (username,password,email,namalengkap,alamat) values ('$username','$password','$email','$namalengkap','$alamat')");
    if($insert){
        header('location:login.php'); 
    } else {
        echo '
        <script>alert("Gagal Registrasi");
        window.location.href="register.php"
        </script>
        ';
    }



    }


?>