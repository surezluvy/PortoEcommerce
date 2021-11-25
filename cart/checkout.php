<?php
    session_start();
    include '../mysql.php';
    
    $nama = $_FILES["image"]["name"];
    
    $data = mysqli_query($connect, "SELECT * FROM cart WHERE id_user='$_SESSION[id_user]'");
    while($data2 = mysqli_fetch_array($data)){
        mysqli_query($connect, "INSERT INTO checkout VALUES('', '$data2[id_cart]', 'Proses', '$nama')") or die(mysqli_error($connect));
        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/bukti/".$nama);
            
        // echo "<script>location='checkout.php';</script>";
        header("Location: ../index.php?status=checkout");
    }
    
?>