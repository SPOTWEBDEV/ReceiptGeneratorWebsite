<?php include('../../server/connection.php');
include('../../server/model.php');
include('../../server/client/auth/index.php');


$sql = "SELECT `credit_value`,`nairaRate`,`id` FROM `siteinfo` ORDER BY `id` DESC LIMIT 1";
$result = $connection->query($sql);


if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $creditPrice = floatval($row['credit_value']);
    $nairaRate = $row['nairaRate'];
    $credit_id = $row['id'];
}


if (isset($_POST['submit'])) {
    $creditAmount = intval($_POST['credit_amount'] ?? 0);
    $usdtAmount = $creditAmount * $creditPrice;
    $nairaAmount = $usdtAmount * $nairaRate;

    $deposit_id = 'DEP_' . strtoupper(uniqid());

    // Insert into deposit table
    $stmt = mysqli_query($connection , "INSERT INTO deposits (credit, usdt_amount, naira_amount , deposit_id,user) VALUES ('$creditAmount', '$usdtAmount', '$nairaAmount' , '$deposit_id','$id')");
    

    if($stmt) {
      echo "<script>window.location.href='../deposit/?deposit_id=$deposit_id'</script>";
    } else {
      echo  Model("Something went wrong");
    }

}



?>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <title>Zono - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/range-slider.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo $domain ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/responsive.css">
</head>

<body class="light">
    <!-- loader starts-->

    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top" style="display: block;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up">
            <polyline points="17 11 12 6 7 11"></polyline>
            <polyline points="17 18 12 13 7 18"></polyline>
        </svg></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper null compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include('../include/nav.php') ?>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include('../include/sidenav.php') ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-xl-4 col-sm-7 box-col-3">
                                <h3>Range Slider</h3>
                            </div>
                            <div class="col-5 d-none d-xl-block">
                                <!-- Page Sub Header Start-->
                                <div class="left-header main-sub-header p-0">
                                    <div class="left-menu-header">
                                        <ul class="header-left">
                                            <li class="onhover-dropdown"> <span class="f-w-700">General </span>
                                                <ul class="onhover-show-div left-dropdown">
                                                    <li class="flyout-right"><a href="#">Dashboards</a><i class="fa fa-angle-right"></i>
                                                        <ul>
                                                            <li> <a href="index.html">Default </a></li>
                                                            <li> <a href="dashboard-02.html">Ecommerce</a></li>
                                                        </ul>
                                                    </li>


                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <!-- Page Sub Header end
                  -->
                            </div>
                            <div class="col-xl-3 col-sm-5 box-col-4">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <svg class="stroke-icon">
                                                <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Bonus Ui</li>
                                    <li class="breadcrumb-item active">Range Slider</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>Purchase Credit</h4>
                                    <div class="currency">
                                        <p class="f-m-light mt-1">1 Credit = <?php echo number_format($creditPrice, 2); ?> USDT</p>
                                        <p class="f-m-light mt-1">10 Credit = <?php echo number_format($creditPrice * 10, 2); ?> USDT</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php

                                    if (isset($_POST['submit'])) {
                                        $credit_id_ = $_POST['credit_id'];
                                    }

                                    ?>
                                    <form method="POST">
                                        <div class="d-flex gap-2">
                                            <input style="width: 75%;" type="hidden" id="credit_id" name="credit_id" value="10">
                                            <input style="width: 75%;" type="range" id="creditRange" name="credit_amount" min="1" max="100" value="10" oninput="updatePrice()">
                                            <output id="creditOutput">10</output> Credit(s)
                                        </div>
                                        <div class="d-flex gap-3">
                                            <p><span id="usdtAmount">2.50</span> USDT</p>
                                            <p><span id="nairaAmount">₦3,750</span></p>
                                        </div>
                                        <button name="submit" class="btn btn-success" type="submit">Buy Now</button>
                                    </form>
                                </div>
                            </div>

                            <script>
                                const creditPrice = <?php echo $creditPrice; ?>;
                                const nairaRate = <?php echo $nairaRate; ?>;

                                function updatePrice() {
                                    const creditInput = document.getElementById("creditRange");
                                    const creditValue = parseInt(creditInput.value);

                                    const usdt = creditValue * creditPrice;
                                    const naira = usdt * nairaRate;

                                    // Update live values
                                    document.getElementById("creditOutput").textContent = creditValue;
                                    document.getElementById("usdtAmount").textContent = usdt.toFixed(2);
                                    document.getElementById("nairaAmount").textContent = "₦" + naira.toLocaleString();
                                }

                                // Initialize values on page load
                                updatePrice();
                            </script>

                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-copyright">
                            <p class="mb-0">Copyright 2024 © Zono theme by pixelstrap.</p>
                        </div>
                        <div class="col-md-6 p-0">
                            <p class="heart mb-0">Hand crafted &amp; made with
                                <svg class="footer-icon">
                                    <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#heart"></use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?php echo $domain ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo $domain ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?php echo $domain ?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?php echo $domain ?>assets/js/scrollbar/simplebar.js"></script>
    <script src="<?php echo $domain ?>assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo $domain ?>assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo $domain ?>assets/js/sidebar-menu.js"></script>
    <script src="<?php echo $domain ?>assets/js/sidebar-pin.js"></script>
    <script src="<?php echo $domain ?>assets/js/slick/slick.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/slick/slick.js"></script>
    <script src="<?php echo $domain ?>assets/js/header-slick.js"></script>
    <script src="<?php echo $domain ?>assets/js/range-slider/ion.rangeSlider.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/range-slider/rangeslider-script.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo $domain ?>assets/js/script.js"></script>
    <script src="<?php echo $domain ?>assets/js/theme-customizer/customizer.js"></script>

    <!-- Plugin used-->

</body>

</html>