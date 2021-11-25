<?php 
	include '../../mysql.php';
    // mysqli_query($connect, "UPDATE product SET product_name='$_POST[product_name]', price='$_POST[price]', desc='$_POST[desc]' WHERE id_product='$_POST[id_product]'") or die(mysqli_error($connect));
    mysqli_query($connect, "UPDATE product SET product_name='$_POST[product_name]', price='$_POST[price]', description='$_POST[description]', '$_POST[image]' WHERE id_product='$_POST[id_product]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di ubah')</script>";
    echo "<script>location='../product.php';</script>";
 ?>