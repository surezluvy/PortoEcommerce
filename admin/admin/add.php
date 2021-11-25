<?php 
    include '../../mysql.php';
    mysqli_query($connect, "INSERT INTO admin VALUES('', '$_POST[email]', '$_POST[password]')") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di tambahkan')</script>";
    echo "<script>location='../admin.php';</script>";
?>