<?php 
    session_start();
    include 'mysql.php';
    if(isset($_SESSION['id_user'])){
        $data1 = mysqli_query($connect, "SELECT COUNT(id_cart) FROM cart WHERE id_user='$_SESSION[id_user]'") or die(mysqli_error($connect));
        $cart = $data1->fetch_row();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lokal Mart</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="logo.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo3.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
<?php 
	if(isset($_GET['status'])){
		if($_GET['status'] == 'checkout'){
			echo "<script>alert('Berhasil melakukan checkout, harap tunggu kami memprosesnya.')</script>";
        }
    }
?>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>

                        <a href="index.php" class="logo">
                            <img src="logo.png" alt="Porto Logo">
                        </a>
                        <nav class="main-nav font2">
                            <ul class="menu">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="index.php#product">Product</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <?php if(isset($_SESSION['email'])){ ?>
                            <a href="logout.php" class="header-icon"><i class="fa fa-user"></i></a>
                            <div class="dropdown cart-dropdown">
                                <a href="cart.php" class="dropdown-toggle cart-toggle">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-count badge-circle"><?php echo $cart[0] ?></span>
                                </a>
                            </div><!-- End .dropdown -->
                            <label for="" style="text-align: right; margin-left: 15px;">Login sebagai, <br> <?php echo $_SESSION['email'] ?></label>
                        
                            
                        <?php } else{ ?>
                            <a href="login.php" class="header-icon"><i class="fa fa-user"></i></a>
                        <?php } ?>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
