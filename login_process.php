<?php 
 
include 'mysql.php';

session_start();

if ($_SESSION['status'] == "login") {
    header("Location: index.php");
} else{
    echo "<script>alert('Gagal login, harap periksa data anda.')</script>";
    header("Location: login.php");
}

$sql = mysqli_query($connect, "SELECT * FROM user WHERE email='$_POST[email]' AND password='$_POST[password]'") or die(mysqli_error($connect));
$cek = mysqli_num_rows($sql);

while($data2 = mysqli_fetch_array($sql)){
    if($cek > 0){
        $_SESSION['email'] = $data2['email'];
        $_SESSION['roles'] = 'user';
        $_SESSION['id_user'] = $data2['id_user'];
        $_SESSION['status'] == "login";
        header("location:index.php");
    }else{
        $_SESSION['status'] == "gagal";
        echo "<script>alert('Gagal login, harap periksa data anda.')</script>";
        echo "<script>location='login.php';</script>";
    }
}
 
?>