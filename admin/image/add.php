
<?php 
    include '../../mysql.php';
    $nama = $_FILES["image"]["name"];
    mysqli_query($connect, "INSERT INTO image VALUES('', '$_POST[id_product]', '$nama')") or die(mysqli_error($connect));

    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/products/".$nama);

    echo "<script>alert('Data berhasil di tambahkan')</script>";
    header("Location: ../image.php?id=$_POST[id_product]");
?>