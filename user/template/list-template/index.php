<?php

include("../../../server/connection.php");
include("../../../server/model.php");
include("../../../server/client/auth/index.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <title><?php echo $sitename ?> - User Dashboard</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo $domain ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->

        <?php include("../../include/nav.php") ?>

        <!-- Page Header Ends                              -->
        <!-- Page body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include("../../include/sidenav.php") ?>






            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-xl-4 col-sm-7 box-col-3">
                                <h3> Upload Template</h3>
                            </div>
                            <div class="col-3 d-none d-xl-block">
                                <!-- Page Sub Header Start-->

                                <!-- Page Sub Header end -->
                            </div>
                            <div class="col-xl-5 col-sm-5 box-col-4">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html">
                                            <svg class="stroke-icon">
                                                <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Template</li>
                                    <li class="breadcrumb-item active">Upload Template</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>IMAGE GALLERY WITH DESCRIPTION </h4>
                                </div>

                                <div class="row mt-3 px-2">

                                    <?php

                                    $selectTemplate = mysqli_query($connection, "SELECT * FROM `template` WHERE `user`='$id'");
                                    if (mysqli_num_rows($selectTemplate) <= 0)  echo '<p>You have not yet uploaded a template or invoice</p>';

                                    if (mysqli_num_rows($selectTemplate) > 0) {

                                        while ($rowTemplate = mysqli_fetch_array($selectTemplate)) { ?>

                                            <div class=" col-lg-4 col-sm-6">
                                                <div class="card">
                                                    <div class="product-box">
                                                        <div class="product-img"><img class="img-fluid" src="<?php echo $domain . 'uploads/template/' . $rowTemplate['image'] ?>" alt="">
                                                            <div class="product-hover">
                                                                <ul>
                                                                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                                                                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <div class="product-box row">
                                                                            <div class="product-img col-lg-6"><img class="img-fluid" src="<?php echo $domain ?>assets/images/ecommerce/01.jpg" alt=""></div>
                                                                            <div class="product-details col-lg-6 text-start">
                                                                                <h3><?php echo $rowTemplate['title']  ?></h3>
                                                                                <div class="product-price">$50.00
                                                                                    <del>$35.00 </del>
                                                                                </div>
                                                                                <div class="product-view">
                                                                                    <h3>Product Details</h3>
                                                                                    <p class="mb-0">Rock Paper Scissors Women Tank Top High Neck Cotton Top Stylish Women Top..</p>
                                                                                </div>

                                                                                <div class="product-qnty">
                                                                                    <div class="addcart-btn"><a class="btn btn-primary" href="cart.html">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-details">

                                                            <a href="product-page.html">
                                                                <h3 style="text-transform: capitalize;"><?php echo $rowTemplate['title']  ?></h3>
                                                            </a>
                                                            <div style="display: flex; flex-wrap: wrap; gap: 5px;;" class="">
                                                                <?php
                                                            $tagArray = array_map('trim', explode(',', $rowTemplate['tags']));

                                                            $count = count($tagArray);

                                                            // Loop using a for loop
                                                            for ($i = 0; $i < $count; $i++) { ?>

                                                              <span style="text-transform: capitalize; color:white; font-size:12px;" class="badge badge-primary"><?php echo $tagArray[$i]  ?></span>
                                                                
                                                            <?php }

                                                           ?>
                                                            </div>
                                                            <div class="product-price">$50.00
                                                                <del>$35.00 </del>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php }
                                }

                                    ?>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php include("../../include/footer.php") ?>




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
    <script src="<?php echo $domain ?>assets/js/chart/morris-chart/raphael.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/morris-chart/morris.js"> </script>
    <script src="<?php echo $domain ?>assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/dashboard/default.js"></script>
    <script src="<?php echo $domain ?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="<?php echo $domain ?>assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo $domain ?>assets/js/owlcarousel/owl-custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead/handlebars.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead/typeahead.custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead-search/handlebars.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo $domain ?>assets/js/script.js"></script>
    <script src="<?php echo $domain ?>assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>

</html>