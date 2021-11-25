<?php
    session_start();
    include '../mysql.php';
    $data = mysqli_query($connect, "SELECT * FROM cart WHERE id_user='$_SESSION[id_user]'");
    while($data2 = mysqli_fetch_array($data)){
        $nama = $_FILES["image"]["name"];
        $date = date('Y-m-d');
        mysqli_query($connect, "INSERT INTO checkout VALUES('', '$data2[id_product]', '$_SESSION[id_user]', '$data2[qt]', '$_POST[total]', 'proses', '$nama', '$date')") or die(mysqli_error($connect));
        move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/images/bukti/".$nama);

        mysqli_query($connect, "DELETE FROM cart WHERE id_user='$_SESSION[id_user]'") or die(mysqli_error($connect));
            
        // echo "<script>location='../product.php?id=$_GET[id]';</script>";
        
        header("Location: ../index.php?status=checkout");
    }
?>