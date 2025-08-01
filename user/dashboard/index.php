<?php

include("../../server/connection.php");
include("../../server/model.php");
include("../../server/client/auth/index.php");



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
  <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - User Dashboard</title>
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/datatables.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/owlcarousel.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
  <!-- loader starts-->

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
                <h3> Dashboard</h3>
              </div>
              <div class="col-5 d-none d-xl-block">
                <!-- Page Sub Header Start-->

                <!-- Page Sub Header end -->
              </div>
              <div class="col-xl-3 col-sm-5 box-col-4">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item bi bi-house-add-fill"> </li>
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
          <div class="row">
            <div class="row">

              <div class="col-4">
                <div class="card">
                  <div class="card-body ">


                    <h1 class="card-title">30</h1>
                    <span>balance</span>


                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="card">
                  <div class="card-body ">


                    <h1 class="card-title">30</h1>
                    <span>balance</span>

                  </div>
                </div>
              </div>







            </div>



            <div class="col-xl-12 proorder-md-9 box-col-6">
              <div class="card">
                <div class="card-header">
                  <div class="header-top">
                    <h4>Recent Deposit History</h4>
                  </div>
                </div>
                <div class="card-body">
                  <input type="text" id="userSearch" placeholder="Search by Deposit ID ,	Amount , Account Status" class="form-control mb-3">



                  <div class="div" style="overflow-x: auto;">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Deposit ID</th>
                          <th>Amount</th>
                          <th>Account Status</th>

                        </tr>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                        $select = mysqli_query($connection, "SELECT deposits.* FROM deposits,payment_methods WHERE deposits.user='$id' AND deposits.payment_method_id=payment_methods.id");
                        if (mysqli_num_rows($select) > 0) {
                          $count = 0;
                          while ($row = mysqli_fetch_array($select)) {
                            $count++;

                        ?>


                            <tr>
                              <td class="f-w-600"><?= $count ?></td>
                              <td><?= htmlspecialchars($row['deposit_id']) ?></td>
                              <td><?= $row['usdt_amount'] . ' USDT => ' . $row['naira_amount'] . ' NARIA' ?></td>
                              <td class="text-end">

                                <?php

                                if ($row['status'] == 'declined') { ?>
                                  <a style="text-transform:capitalize" class="btn btn-warning btn-sm"></a><?php echo $row['status'] ?></a>
                                <?php } else if ($row['status'] == 'pending') { ?>
                                  <a style="text-transform:capitalize" class="btn btn-danger btn-sm"> <?php echo $row['status'] ?></a>
                                <?php } else if ($row['status'] == 'approved') { ?>
                                  <a style="text-transform:capitalize" class="btn btn-success btn-sm"> <?php echo $row['status'] ?></a>
                                <?php  } else { ?>
                                  <a style="text-transform:capitalize" class="btn btn-secondary btn-sm"> <?php echo $row['status'] ?></a>
                                <?php }

                                ?>


                              </td>
                            </tr>

                          <?php  }
                        } else { ?>

                          <p>Table is empty</p>

                        <?php }  ?>




                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <?php include("../include/footer.php") ?>




      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const searchInput = document.getElementById("userSearch");
          const table = document.querySelector(".table tbody");

          searchInput.addEventListener("keyup", function() {
            const filter = this.value.toLowerCase();
            const rows = table.querySelectorAll("tr");

            rows.forEach(row => {
              const username = row.cells[1]?.textContent.toLowerCase() || '';
              const email = row.cells[2]?.textContent.toLowerCase() || '';
              const status = row.cells[3]?.textContent.toLowerCase() || '';

              const match = username.includes(filter) || email.includes(filter) || status.includes(filter);

              row.style.display = match ? "" : "none";
            });
          });
        });
      </script>




    </div>
  </div>
  <!-- latest jquery-->
  <script src="../../assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="../../assets/js/scrollbar/simplebar.js"></script>
  <script src="../../assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../../assets/js/sidebar-menu.js"></script>
  <script src="../../assets/js/sidebar-pin.js"></script>
  <script src="../../assets/js/slick/slick.min.js"></script>
  <script src="../../assets/js/slick/slick.js"></script>
  <script src="../../assets/js/header-slick.js"></script>
  <script src="../../assets/js/chart/morris-chart/raphael.js"></script>
  <script src="../../assets/js/chart/morris-chart/morris.js"> </script>
  <script src="../../assets/js/chart/morris-chart/prettify.min.js"></script>
  <script src="../../assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="../../assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="../../assets/js/chart/apex-chart/moment.min.js"></script>
  <script src="../../assets/js/notify/bootstrap-notify.min.js"></script>
  <script src="../../assets/js/dashboard/default.js"></script>
  <script src="../../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="../../assets/js/datatable/datatables/datatable.custom.js"></script>
  <script src="../../assets/js/datatable/datatables/datatable.custom1.js"></script>
  <script src="../../assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="../../assets/js/owlcarousel/owl-custom.js"></script>
  <script src="../../assets/js/typeahead/handlebars.js"></script>
  <script src="../../assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="../../assets/js/typeahead/typeahead.custom.js"></script>
  <script src="../../assets/js/typeahead-search/handlebars.js"></script>
  <script src="../../assets/js/typeahead-search/typeahead-custom.js"></script>
  <script src="../../assets/js/height-equal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../../assets/js/script.js"></script>
  <script src="../../assets/js/theme-customizer/customizer.js"></script>
  <!-- Plugin used-->
</body>


</html>