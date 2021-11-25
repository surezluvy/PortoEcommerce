<?php 
    include '../../mysql.php';
    mysqli_query($connect, "INSERT INTO product VALUES('', '$_POST[product_name]', '$_POST[price]', '$_POST[description]', '$_POST[image]')") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di tambahkan')</script>";
    echo "<script>location='../product.php';</script>";
?>