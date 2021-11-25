<?php 
	include '../../mysql.php';
    mysqli_query($connect, "UPDATE user SET email='$_POST[email]', password='$_POST[password]', name='$_POST[name]', address='$_POST[address]' WHERE id_user='$_POST[id_user]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di ubah')</script>";
    echo "<script>location='../index.php';</script>";
 ?>