<?php 
    session_start();
    include 'mysql.php';
    
    $qt = 1;

    if(isset($_SESSION['email'])){
        if(isset($_POST['qt'])){
            $qt = $_POST['qt'];
            $sql = mysqli_query($connect, "SELECT * FROM cart WHERE id_product='$_GET[id]'") or die(mysqli_error($connect));
            $data3 = $sql->fetch_assoc();
            $cek = mysqli_num_rows($sql);

            if($cek != 0){
                $total = $data3['qt']+$qt;

                mysqli_query($connect, "UPDATE cart SET qt='$total' WHERE id_cart='$data3[id_cart]'") or die(mysqli_error($connect));
            
                echo "<script>alert('Produk berhasil ditambahkan ke keranjang')</script>";
                echo "<script>location='index.php';</script>";
            } else{
                mysqli_query($connect, "INSERT INTO cart VALUES('', '$_GET[id]', '$_SESSION[id_user]', '$qt')") or die(mysqli_error($connect));
            
                echo "<script>alert('Produk berhasil ditambahkan ke keranjang')</script>";
                echo "<script>location='index.php';</script>";
            }
        } else{
            $sql = mysqli_query($connect, "SELECT * FROM cart WHERE id_product='$_GET[id]'") or die(mysqli_error($connect));
            $data3 = $sql->fetch_assoc();
            $cek = mysqli_num_rows($sql);

            if($cek != 0){
                $total = $data3['qt']+$qt;

                mysqli_query($connect, "UPDATE cart SET qt='$total' WHERE id_cart='$data3[id_cart]'") or die(mysqli_error($connect));
            
                echo "<script>alert('Produk berhasil ditambahkan ke keranjang')</script>";
                echo "<script>location='index.php';</script>";
            } else{
                mysqli_query($connect, "INSERT INTO cart VALUES('', '$_GET[id]', '$_SESSION[id_user]', '$qt')") or die(mysqli_error($connect));
            
                echo "<script>alert('Produk berhasil ditambahkan ke keranjang')</script>";
                echo "<script>location='index.php';</script>";
            }
        }
    } else{
        echo "<script>alert('Harap login dahulu')</script>";
        echo "<script>location='login.php';</script>";
    }
?>