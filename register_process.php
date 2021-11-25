<?php 
    include 'mysql.php';
    mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[address]')") or die(mysqli_error($connect));

    echo "<script>alert('Berhasil mendaftar')</script>";
    echo "<script>location='login.php';</script>";
?>