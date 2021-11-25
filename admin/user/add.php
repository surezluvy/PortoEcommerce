<?php 
    include '../../mysql.php';
    mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[address]')") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di tambahkan')</script>";
    echo "<script>location='../index.php';</script>";
?>