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
function login($data){
    global
    $c;
    $username = $data['username'];
    $password = $data['password'];
    $query = mysqli_query($c,"SELECT * FROM user WHERE Username='$username' and Password='$password'");
    $check = mysqli_num_rows($query);
    return $check;
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