<?php

include("../../server/connection.php");
include("../../server/model.php");


$banks = mysqli_query($connection, "SELECT id, type, accountorwallet FROM payment_methods WHERE method = 'bank'");
$cryptos = mysqli_query($connection, "SELECT id, type, accountorwallet FROM payment_methods WHERE method = 'crypto'");



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = 2;

    $amount = $_POST['amount'] ;
    $payment_option_id = $_POST['payment_option'] ;

    echo "<script>alert($user_id + ' =>amount '  + $amount  + ' =>payment '  + $payment_option_id)</script>";

    if (!$user_id || !$payment_option_id || !$amount) {
        echo Model('Missing required fields.');
    } else {
        $amount = floatval($amount);
        $payment_option_id = intval($payment_option_id);

        // Generate a unique deposit ID
        $deposit_id = 'DEP_' . strtoupper(uniqid());

        // Insert into deposits table
        $insert = mysqli_query($connection, "
            INSERT INTO deposits (user, deposit_id, payment_method_id, amount)
            VALUES ('$user_id', '$deposit_id', '$payment_option_id', '$amount')
        ");

        if ($insert) {
            echo  Model("Deposit recorded successfully. Reference: $deposit_id");
            echo "<script>
                setTimeout(() => {
                    window.location.href= './history/';
                }, 2000);
            </script>";
        } else {
            echo Model('Failed to record deposit.');
        }
    }
}



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

        <?php include("../include/nav.php") ?>

        <!-- Page Header Ends                              -->
        <!-- Page body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include("../include/sidenav.php") ?>






            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-xl-4 col-sm-7 box-col-3">
                                <h3> Deposit</h3>
                            </div>
                            <div class="col-5 d-none d-xl-block">
                                <!-- Page Sub Header Start-->

                                <!-- Page Sub Header end -->
                            </div>
                            <div class="col-xl-3 col-sm-5 box-col-4">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html">
                                            <svg class="stroke-icon">
                                                <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Deposit</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid default-dashboard">
                    <div class="row">
                        <div class="col-xl-12 proorder-md-9 box-col-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">Deposit Form</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">

                                    <form method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <input class="form-control" name="amount" type="number" placeholder="Enter amount" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Payment Method</label>
                                            <select class="form-control" id="paymentMethod" name="payment_method" required>
                                                <option value="">-- Select Payment Method --</option>
                                                <option value="bank">Bank Transfer</option>
                                                <option value="crypto">Crypto</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 d-none" id="bankSelect">
                                            <label class="form-label">Select Bank</label>
                                            <select class="form-control sub-option" id="bankOptions" name="payment_option">
                                                <option value="">-- Select Bank --</option>
                                                <?php while ($bank = mysqli_fetch_assoc($banks)) : ?>
                                                    <option
                                                        value="<?= $bank['id'] ?>"
                                                        data-account="<?= htmlspecialchars($bank['accountorwallet']) ?>">
                                                        <?= htmlspecialchars($bank['type']) ?>
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>

                                        <div class="mb-3 d-none" id="cryptoSelect">
                                            <label class="form-label">Select Crypto</label>
                                            <select class="form-control sub-option" id="cryptoOptions" name="payment_option">
                                                <option value="">-- Select Crypto --</option>
                                                <?php while ($crypto = mysqli_fetch_assoc($cryptos)) : ?>
                                                    <option
                                                        value="<?= $crypto['id'] ?>"
                                                        data-account="<?= htmlspecialchars($crypto['accountorwallet']) ?>">
                                                        <?= htmlspecialchars($crypto['type']) ?>
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>

                                        <div class="mb-3 d-none" id="accountDisplay">
                                            <label class="form-label">Account / Wallet Address</label>
                                            <input type="text" class="form-control" id="accountInput" readonly>
                                        </div>

                                        <div class="form-footer">
                                            <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                        </div>
                                    </form>


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

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const paymentMethod = document.getElementById('paymentMethod');
    const bankSelect = document.getElementById('bankSelect');
    const cryptoSelect = document.getElementById('cryptoSelect');
    const bankOptions = document.getElementById('bankOptions');
    const cryptoOptions = document.getElementById('cryptoOptions');
    const accountDisplay = document.getElementById('accountDisplay');
    const accountInput = document.getElementById('accountInput');

    paymentMethod.addEventListener('change', function () {
      const method = this.value;

      // Toggle visibility
      bankSelect.classList.toggle('d-none', method !== 'bank');
      cryptoSelect.classList.toggle('d-none', method !== 'crypto');

      // Enable the relevant select and disable the other
      if (method === 'bank') {
        bankOptions.disabled = false;
        cryptoOptions.disabled = true;
      } else if (method === 'crypto') {
        cryptoOptions.disabled = false;
        bankOptions.disabled = true;
      } else {
        bankOptions.disabled = true;
        cryptoOptions.disabled = true;
      }

      // Reset account display
      accountDisplay.classList.add('d-none');
      accountInput.value = '';
    });

    [bankOptions, cryptoOptions].forEach(select => {
      select.addEventListener('change', function () {
        const selected = this.options[this.selectedIndex];
        const account = selected.getAttribute('data-account') || '';
        if (account) {
          accountInput.value = account;
          accountDisplay.classList.remove('d-none');
        } else {
          accountInput.value = '';
          accountDisplay.classList.add('d-none');
        }
      });
    });

    // Trigger initial disable
    bankOptions.disabled = true;
    cryptoOptions.disabled = true;
  });
</script>





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