<?php 
	include '../../mysql.php';
    mysqli_query($connect, "DELETE FROM image WHERE id_image='$_GET[id]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di hapus')</script>";
    header("Location: ../image.php?id=$_GET[id_product]");
 ?>